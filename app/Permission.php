<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use SoftDeletes;

    public $table = 'permissions';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
	
	 public static function boot()
	{
		parent::boot();
		Permission::observe(new \App\Observers\UserActionsObserver);
	}
	
    public function permissionsRoles()
    {
        return $this->belongsToMany(Role::class);
    }
}
