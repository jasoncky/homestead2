<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\MultiTenantModelTrait;

class Order extends Model
{
    use SoftDeletes, MultiTenantModelTrait;
	
	public $table = 'orders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'customer_name',
        'customer_email',
		'created_by_id',
    ];
    
	public static function boot()
	{
		parent::boot();
		Order::observe(new \App\Observers\UserActionsObserver);
	}
	
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot(['quantity','discount','discountByPercent']);
    }
	
	public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}