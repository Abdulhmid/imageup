<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\Models as Md;

use App\Http\Requests;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth, Md\Users $users)
    {
        $this->auth = $auth;
        $this->model = $users;
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function postLogin(Request $request){
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

  		return redirect('/admin')
  					->withInput($request->only('email', 'remember'))
  					->withErrors([
  						'email' => $this->getFailedLoginMessage(),
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

}
