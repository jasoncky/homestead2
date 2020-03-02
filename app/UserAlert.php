<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAlert extends Model
{
    use SoftDeletes;

    public $table = 'user_alerts';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'alert_text',
        'alert_link',
        'created_at',
        'updated_at',
    ];
	
	public static function boot()
	{
		parent::boot();
		UserAlert::observe(new \App\Observers\UserActionsObserver);
	}
	
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
