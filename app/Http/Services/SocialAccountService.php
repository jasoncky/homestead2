<?php
namespace App\Http\Services;
use App\Member;
use Laravel\Socialite\Contracts\User as ProviderUser;
use Illuminate\Support\Facades\Log;

class SocialAccountService
{
    public function createOrGetUser($driver, ProviderUser $providerUser)
    {
        Log::info('Showing user profile:'.print_r($providerUser,1));
		if ($driver == "facebook")
		{
			$account = Member::whereProvider($driver)
				->whereProviderId($providerUser->getId())
				->first();	
		}
		else if ($driver == "google")
		{
			$account = Member::whereProvider($driver)
				->whereGoogleId($providerUser->getId())
				->first();
		}
        if ($account) {
            return $account;
        } else {
            //Log::info('profile not found');
			$member = Member::whereEmail($providerUser->getEmail())->first();
			if (!$member) {
				//Log::info('email not match , create new member');
				if ($driver == "facebook")
				{
					$member = Member::create([
						'email' => $providerUser->getEmail(),
						'name' => $providerUser->getName(),
						'password' => md5(rand(1,10000)),
						'provider_id' => $providerUser->getId(),
						'provider' => $driver
					]);	
				}
				else if ($driver == "google")
				{
					$member = Member::create([
						'email' => $providerUser->getEmail(),
						'name' => $providerUser->getName(),
						'password' => md5(rand(1,10000)),
						'google_id' => $providerUser->getId(),
						'provider' => $driver
					]);
				}			
			}
			
			if ($driver == "facebook")
			{
				$member->provider_id = $providerUser->getId();
			}
			else if ($driver == "google")
			{
				$member->google_id = $providerUser->getId();
			}
			$member->provider = $driver;
			$member->save();
			//Log::info('data to return aaaaaaaa');
			//Log::info('data to return: '.print_r($member,1));
			
			return $member;
		}
    }
}