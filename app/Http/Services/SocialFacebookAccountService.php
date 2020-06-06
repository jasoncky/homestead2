<?php
namespace App\Http\Services;
use App\Member;
use Laravel\Socialite\Contracts\User as ProviderUser;
use Illuminate\Support\Facades\Log;

class SocialFacebookAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
        //Log::info('Showing user profile for facebook:'.print_r($providerUser,1));
		$account = Member::whereProvider('facebook')
            ->whereProviderId($providerUser->getId())
            ->first();
        if ($account) {
            return $account;
        } else {
            //Log::info('profile not found');
			$member = Member::whereEmail($providerUser->getEmail())->first();
			if (!$member) {
				//Log::info('email not match , create new member');
				$member = Member::create([
					'email' => $providerUser->getEmail(),
					'name' => $providerUser->getName(),
					'password' => md5(rand(1,10000)),
					'provider_id' => $providerUser->getId(),
					'provider' => 'facebook'
				]);				
			}
			$member->provider_id = $providerUser->getId();
			$member->provider = 'facebook';
			$member->save();
			//Log::info('data to return aaaaaaaa');
			//Log::info('data to return: '.print_r($member,1));
			return $member;
		}
    }
}