<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Notifications\TwoFactorCode;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

	//protected $username;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
		$this->username = 'username';
    }

	/*
	public function username()
    {
        return $this->username;
    }
	*/
	
	
	protected function authenticated(Request $request, $user)
    {
        if ($user->status == 'Active')
		{
			$user->update([
				'last_login_at' => now(),
			]);
			//$user->generateTwoFactorCode();
			//$details = [
			//	'two_factor_code' => $user->two_factor_code
			//];
			//$user->notify(new TwoFactorCode($details));
		}
    }

	protected function credentials(Request $request)
	{
		$field = filter_var($request->get($this->username()), FILTER_VALIDATE_EMAIL)
			? $this->username()
			: 'username';
		return [
			$field => $request->get($this->username()),
			'password' => $request->password,
		];
	}

}
