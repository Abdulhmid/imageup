<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Models\Users;
use App\Models as Md;
use Image;
use Intervention\Image\ImageManager;

class HomeController extends Controller
{
  use AuthenticatesAndRegistersUsers;

  protected $model;
	protected $title = "Welcome To Image Upload App";
	protected $folder = "module.home";
	protected $url = "/";
	protected $form;

	public function __construct(Guard $auth,
                              Users $users,
                              Md\Posts $post,
                              Md\Comments $comments)
	{
		$this->auth = $auth;
    $this->model = $users;
    $this->post = $post;
    $this->comments = $comments;
    $this->middleware('auth', ['only' => 'getProfile']);
	}

	public function getIndex()
	{
      $post = with(new $this->post)->scopePosting()->toArray();
		  return view($this->folder.".index", [
                    'title'     => $this->title,
                    'dataPost'  => $post
             ]);
	}

  public function getDataPosting($id = ""){
      $post = with(new $this->post)->scopePosting($id)->toArray();
      $html = \PostHelpers::htmlData($post);
      return $html;
  }

  public function getLogin(){
      return view($this->folder.".login", ['title' => $this->title]);
  }

  public function getRegister(){
      return view($this->folder.".register", ['title' => $this->title]);
  }

  public function postLogin(Request $request)
	{
		$this->validate($request, [
			'email' => 'required|email|exists:users,email', 'password' => 'required',
		]);

		$credentials = $request->only('email', 'password');

		$user = $this->findUser($credentials['email']);
    $userFull = \App\Models\Users::select('*')->whereEmail($credentials['email'])->first();

		if ($user->active == 0)
		{
			return redirect('/')
					->withInput($request->only('email', 'remember'))
					->withErrors([
						'email' => "Your account not activated yet.",
					]);
		}

		if ( $this->auth->attempt($credentials, $request->has('remember')))
		{
			$this->updateLastLogin($user);
      \Session::put('member_session', $userFull);
      return redirect()->intended('/');
		}

    \Session::put('member_session', $userFull);
		return redirect('/')
					->withInput($request->only('email', 'remember'))
					->withErrors([
						'email' => $this->getFailedLoginMessage(),
					]);
	}

  public function postRegister(Request $request)
  {
      $this->validate($request, [
        'username' => 'required|min:5',
  			'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
        'fullname' => 'required'
  		]);

      $input = $request->except('save_continue','password_confirmation');
      $input['remember_token'] = \Crypt::encrypt(date('d-m-Y'));
  		$input['created_by'] = "system";
      $input['password'] = bcrypt($request->password);
      $query = $this->model->create($input);

      $input['remember_token'] = $query->remember_token;


      \Mail::send('emails.confirm', $input, function($message) use ($query) {
                    $message->from('videotronsystem@gmail.com', 'Admin Image Upload');
                    $message->to($query->email, $query->fullname)->subject('Konfirmasi Pendaftaran');
                }); 

      return redirect('/register')->with('message','Registrasi Berhasil, Cek email untuk melakukan Konfirmasi Pendaftaran');

  }

  public function getConfirmation($token = ""){
      $countUsers = \DB::table('users')->where('remember_token', $token);
      if ($token == "" || $countUsers->count() < 1) return redirect('/')->with('message','Link Sudah Tidak Aktif');

      $dataUsers = \DB::table('users')->where('remember_token', $token)->first();
      \DB::table('users')
                  ->where('remember_token', $token)
                  ->update(['active' => 1,'remember_token' => ""]);

      $userFull = \App\Models\Users::select('*')->where('id',$dataUsers->id)->first();
      \Session::put('member_session', $userFull);

      return redirect('/')->with('message','Konfirmasi Berhasil');
  }

  public function postPosting(Request $request){
      $this->validate($request, [
        'tags' => 'required',
        'link' => 'required'
  		]);
  }

  protected function updateLastLogin($user)
	{
		  $user->update(['last_login' => \Carbon\Carbon::now()]);
	}

  protected function findUser($email)
	{
		  return \App\Models\Users::select('id','email','active')->whereEmail($email)->first();
	}

  public function getLogout(){
      \Session::flush();
      return redirect('/');
  }

  /*
  ** Post Method
  */

  public function postUpload(){
      $image = \Input::file("files");
      // var_dump($image);
      if ($image[0]->isValid())
      {
        if(!file_exists('images/posting/')){
          mkdir('images/posting/');
        }
        $name = time().preg_replace('/\s+/', '', $image[0]->getClientOriginalName());
        $size = $image[0]->getSize();
        $mime = $image[0]->getMimeType();
        $destinationPath = 'images/posting/';
        $image[0]->move($destinationPath,$name);
        $result[0] = array(
          'name' => $name,
          'size' => $size,
          'type' => $mime,
          'pathPublic' => "images/posting/".$name,
          'url' => \URL::to('images/posting/')
        );
        return $result;
      }
  }

  public function postStatus(Request $request)
  {
      $input = $request->only('article','hastag','link','created_by');
      $image = $request->image;
      $dataMember = session('member_session');
      $input['created_by'] = !empty($dataMember->username) ? $dataMember->username : "anomin"  ;
      $query = $this->post->create($input);
      /*
      ** Add Image
      */
      $explodeImage = explode(",", $image);
      foreach ($explodeImage as $key => $value) {
        \DB::table('post_detail')->insert(
            ['image' => $value, 'post_id' => $query->id,
             'created_at' => \Carbon\Carbon::now(),
             'updated_at' => \Carbon\Carbon::now()]
        );
      }

      return $query->id;
  }

  public function postComment(Request $request, $id = "")
  {
      $input = $request->only('comment','post_id','created_by');
      $input['post_id'] = $id  ;
      $dataMember = session('member_session');
      $input['created_by'] = !empty($dataMember->username) ? $dataMember->username : "anomin"  ;
      $image = $request->image;
      $query = $this->comments->create($input);
      /*
      ** Add Image
      */
      $explodeImage = explode(',', $image);
      $imgValue = "";
      foreach ($explodeImage as $key => $value) {
        if ($value != "") {
          \DB::table('comment_detail')->insert(
              ['image' => $value, 'comment_id' => $query->id,
               'created_at' => \Carbon\Carbon::now()]
          );
          $imgValue .=   '<div class="content-file-comment-list">'.
                          '<img src="'.$value.'" style="width:98px; height:96px">'.
                          '</div>';
        }
      }

      $data['comment'] = $input['comment'];
      $data['imageCommentContent'] = $imgValue;
      $data['imageComment'] = $explodeImage;
      $data['created_by'] = $input['created_by'];
      $data['id'] = $id;

      return $data;

  }

  // Setting Profil

  public function getProfile(){
      $dataMember = session('member_session');
      $dataProfil = $this->model->find($dataMember->id);
      return view('auth.profil', [
          'title' => "Edit My Profil",
          'row' => $dataProfil,
          'session' => $dataMember
      ]);
  }

  public function postStoreProfile($id, Request $request){

      $input = $request->all();
      $rules = array(
          'fullname'=>'required',
          'photo'=>'',
          'password' => 'min:6|confirmed',
          'password_confirmation' => 'min:6'
      );      

      if( \Input::hasFile('photo'))
          $photo  = (new \ImageUpload($input))->upload();


      $validator = \Validator::make(\Request::all(), $rules);
      if ($validator->passes()) { 
          $data = [
              'fullname' => $input['fullname']
          ];

          if(!empty($input['password'])) {
              $data = [
                  'password' => bcrypt($input['password'])
              ];  
          }

          if(\Input::hasFile('photo')){
              $data = [
                      'photo' => isset($photo) ? $photo : ""
                  ];  
          }

          $this->model->find($id)->update($data);
          return \Redirect::back()->with('message','Ubah Data Sukses!')->withInput(\Input::all());
      }else{
          return redirect('/profile')->withErrors($validator);
      }

  }

  public function getForgot(){
      return view('auth.forgot', [
          'title' => "Edit My Profil"
      ]);
  }

  public function postForgotPassword(Request $request){
      $input = $request->all();
      $rules = array(
          'email'=>'required|email|exists:users'
      );      

      $validator = \Validator::make(\Request::all(), $rules);

      if ($validator->passes()) { 

          $dataUsers = \DB::table('users')->where('email', $input['email'])->first();
          $input['remember_token'] = \Crypt::encrypt(date('d-m-Y'));
      
          \DB::table('users')
                      ->where('email', $input['email'])
                      ->update(['remember_token' => $input['remember_token'] ]);

          \Mail::send('emails.forgot', $input, function($message) use ($dataUsers) {
                        $message->from('videotronsystem@gmail.com', 'Admin Image Upload');
                        $message->to($dataUsers->email, $dataUsers->fullname)->subject('Konfirmasi Pendaftaran');
                    }); 


          return \Redirect::back()->with('message','Cek Email untuk reset Password!')->withInput(\Input::all());
      }else{
          return redirect('/forgot')->withErrors($validator);
      }
  }

  public function getForgotConfirmation($token = ""){
      $countUsers = \DB::table('users')->where('remember_token', $token)->count();
      if($token == "" || $countUsers < 1) return redirect('/')->with('message','Link Sudah Tidak Aktif!');
      return view('auth.forgot-confirm', [
          'title' => "Create New Password",
          'token' => $token
      ]);
  }

  public function postNewPassword($token, Request $request){
      $input = $request->all();
      $rules = array(
          'password' => 'required|min:6|confirmed',
          'password_confirmation' => 'min:6'
      );      

      $validator = \Validator::make(\Request::all(), $rules);

      if ($validator->passes()) { 

          $password = bcrypt($input['password']);

          \DB::table('users')
                      ->where('remember_token', $token)
                      ->update(['password' => $password,'remember_token' => ""]);

         return redirect('/')->with('message','Password Berhasil Di Ubah!')->withInput(\Input::all());
      }else{
          return redirect()->back()->withErrors($validator);
      }

  }

  public function getLanding(){
    return view("module.themes.index", ['title' => $this->title]);
  }

}
