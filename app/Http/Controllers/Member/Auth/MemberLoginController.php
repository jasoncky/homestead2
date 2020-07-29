<?php

namespace App\Http\Controllers\Member\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;
use Auth;
use Route;
use Illuminate\Support\Facades\Log;

class MemberLoginController extends Controller
{
    use AuthenticatesUsers;
	
	protected $redirectTo = '/member';
	
	public function __construct()
    {
      $this->middleware('guest:member')->except('logout');
    }
	
	protected function guard()
    {
        return \Auth::guard('member');
    }

    public function showLoginForm()
    {
        return view('auth.member-login');
    }
	
	public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);
      
      // Attempt to log the user in
      if (Auth::guard('member')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
        Log::info('redirect to member home');
		return redirect()->intended(route('member.home'));
      } 
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    
    public function logout()
    {
        Auth::guard('member')->logout();
		Session::forget('url.intented'); 
        return redirect('/');
    }



}