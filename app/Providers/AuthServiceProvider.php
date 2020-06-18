<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        if (!app()->runningInConsole()) {
            Passport::routes();
        };
		
		 Gate::define('user_status', function($user) {
			$isAdmin = $user->roles()->where('id', 1)->exists();
			return $isAdmin == 1;
			//if user can have only one role, use following
			//return $user->isAdmin == 1; 
			//return $user->role_id == 1; // for admin
			//return $user->email  == 'jasoncky@gmail.com';
		});
		
		 Gate::define('appointment_status', function($user) {
			$isAdmin = $user->roles()->where('id', 1)->exists();
			//Log::debug("is admin=========".$user->getIsAdminAttribute());
			return $isAdmin == 1;
		});
    }
}
