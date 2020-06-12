<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\MultiTenantModelTrait;

class Client extends Model
{
    use SoftDeletes, MultiTenantModelTrait;

    public $table = 'clients';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'phone',
        'email',
        'created_at',
        'updated_at',
        'deleted_at',
		'created_by_id',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'client_id', 'id');
    }
	
	public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
