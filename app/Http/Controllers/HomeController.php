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
	protected $title = "Welcome";
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
	}

	public function getIndex()
	{
      $post = with(new $this->post)->scopePosting()->toArray();
      //
      // echo "<pre>";
      // print_r($post);
      // echo "</pre>";
      // foreach ($post as $key => $value) {
      //   echo $value['created_by'];
      // }
      // exit();
		  return view($this->folder.".index", [
                    'title'     => $this->title,
                    'dataPost'  => $post
             ]);
	}

  public function getDataPosting(){
      $post = with(new $this->post)->scopePosting()->toArray();
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
			return redirect()->intended('/');
		}

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
		$input['created_by'] = "system";
    $input['password'] = bcrypt($request->password);
    $query = $this->model->create($input);

    return redirect('/register')->with('message','Registrasi Berhasil, Cek email untuk melakukan Konfirmasi Pendaftaran');

  }

  public function postConfirmation(){

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
    $input = $request->only('article','hastag','link');
    $image = $request->image;
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
  }

  public function postComment(Request $request, $id = "")
  {
    $input = $request->only('comment','post_id');
    $input['post_id'] = $id  ;
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
    $data['id'] = $id;

    return $data;

  }

}
