<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\MultiTenantModelTrait;

class Service extends Model
{
    use SoftDeletes, MultiTenantModelTrait;

    public $table = 'services';

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
		'created_by_id',
    ];

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }

    public function appointments()
    {
        return $this->belongsToMany(Appointment::class);
    }
	
	public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
