<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\MultiTenantModelTrait;

class Contact extends Model
{
    use SoftDeletes, MultiTenantModelTrait;

    public $table = 'contacts';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'created_at',
        'updated_at',
        'deleted_at',
		'created_by_id',
    ];
	
	public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
