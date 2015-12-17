<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Models\Users;

class HomeController extends Controller
{
  use AuthenticatesAndRegistersUsers;

  protected $model;
	protected $title = "Welcome";
	protected $folder = "module.home";
	protected $url = "/";
	protected $form;

	public function __construct(Guard $auth, Users $users)
	{
		$this->auth = $auth;
    $this->model = $users;
	}

	public function getIndex()
	{
		  return view($this->folder.".index", ['title' => $this->title]);
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

  public function postUploads(){
    // echo "string";
    //   exit();
    //   $image =$request->file('filesImage');
    //   var_dump($image); exit();
    //   $filename  = time() . '.' . $image->getClientOriginalExtension();
    //   \Image::make($image->getRealPath())->resize(580, 367)->save('images/'.$filename);
    //   $fullname = '/images/'.$filename;
    //   return \Response::json(array('name' => $fullname));
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

}
