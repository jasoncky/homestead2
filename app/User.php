<?php

namespace App;

use Carbon\Carbon;
use Hash;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use SoftDeletes, Notifiable, HasApiTokens;

    public $table = 'users';

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
		'two_factor_expires_at',
		'last_login_at',
    ];

    protected $fillable = [
        'name',
        'email',
        'password',
        'created_at',
        'updated_at',
        'deleted_at',
        'remember_token',
        'email_verified_at',
		'two_factor_code',
        'two_factor_expires_at',
		'status',
		'username',
		'last_login_at',
    ];
	
	const STATUS_COLOR = [
        'Active'   => '#90EE90',
        'Inactive' => '#00BFFF',
    ];
	
	public static function boot()
	{
		parent::boot();
		User::observe(new \App\Observers\UserActionsObserver);
	}

    public function getIsAdminAttribute()
    {
        return $this->roles()->where('id', 1)->exists();
    }
	
    public function userUserAlerts()
    {
        return $this->belongsToMany(UserAlert::class);
    }

    public function getEmailVerifiedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setEmailVerifiedAtAttribute($value)
    {
        $this->attributes['email_verified_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
	
	public function generateTwoFactorCode()
	{
		$this->timestamps = false;
		$this->two_factor_code = rand(100000, 999999);
		$this->two_factor_expires_at = now()->addMinutes(10);
		$this->save();
	}
	
	public function resetTwoFactorCode()
	{
		$this->timestamps = false;
		$this->two_factor_code = null;
		$this->two_factor_expires_at = null;
		$this->save();
	}
	
	public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
	
	public function products()
    {
        return $this->hasMany(Product::class, 'created_by_id', 'id');
    }
	
	public function orders()
    {
        return $this->hasMany(Order::class, 'created_by_id', 'id');
    }
	
	public function events()
    {
        return $this->hasMany(Events::class, 'created_by_id', 'id');
    }
	
	public function employees()
    {
        return $this->hasMany(Employee::class, 'created_by_id', 'id');
    }
	
	public function members()
    {
        return $this->hasMany(Members::class, 'created_by_id', 'id');
    }
	
	public function categories()
    {
        return $this->hasMany(ProductCategory::class, 'created_by_id', 'id');
    }
	
	public function tags()
    {
        return $this->hasMany(ProductTag::class, 'created_by_id', 'id');
    }
}
