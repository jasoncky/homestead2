<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

trait MultiTenantModelTrait
{
    public static function bootMultiTenantModelTrait()
    {
        Log::debug("in bootMultiTenantModelTrait");
		
		if (!app()->runningInConsole() && auth()->check()) {
            Log::debug("in auth check bootMultiTenantModelTrait");
			$isAdmin = auth()->user()->roles->contains(1);
			static::creating(function ($model) use ($isAdmin) {
				// Prevent admin from setting his own id - admin entries are global.

				// If required, remove the surrounding IF condition and admins will act as users
				if (!$isAdmin) {
                    Log::debug("save id is===============".Auth::id());
					$model->created_by_id = auth()->id();
                }
            });
            if (!$isAdmin) {
                 Log::debug("filter id is===============".Auth::id());
				 static::addGlobalScope('created_by_id', function (Builder $builder) {
                    $builder->where('created_by_id', auth()->id())->orWhereNull('created_by_id');
                });
            }
        }
    }
}