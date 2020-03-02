<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductTag extends Model
{
    use SoftDeletes;

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
}
