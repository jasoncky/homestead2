<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Http\Services\SocialAccountService;
use Illuminate\Support\Facades\Log;

class SocialAuthController extends Controller
{
    /**
   * Create a redirect method to facebook api.
   *
   * @return void
   */
    public function redirect($driver)
    {
        return Socialite::driver($driver)->redirect();
    }
    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback(SocialAccountService $service, $driver)
    {
		$value = session()->get('plan');
		Log::info('plan: '.$value);
		
		$members = $service->createOrGetUser($driver, Socialite::driver($driver)->user());
		
        //auth()->login($user);
        //return redirect()->to('/home');
		//Log::info('Showing user profile for facebook 111111111: '.print_r($members,1));
    }
}

