<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\MultiTenantModelTrait;

class ProductTag extends Model
{
    use SoftDeletes, MultiTenantModelTrait;

    public $table = 'product_tags';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
		'color',
        'created_at',
        'updated_at',
        'deleted_at',
		'created_by_id',
    ];
	
	public static function boot()
	{
		parent::boot();
		ProductTag::observe(new \App\Observers\UserActionsObserver);
	}
	
    public function tagProducts()
    {
        return $this->belongsToMany(Product::class);
    }
	
	public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
