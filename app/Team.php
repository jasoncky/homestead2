<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Team
 *
 * @package App
 * @property string $name
*/
class Team extends Model
{
    use SoftDeletes;
	
	public $table = 'teams';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    
    public static function boot()
	{
		parent::boot();
		Team::observe(new \App\Observers\UserActionsObserver);
	}
	
    public function teamsUsers()
    {
        return $this->belongsToMany(User::class);
    }
	
	public function users()
    {
        return $this->belongsToMany(User::class);
    }
}