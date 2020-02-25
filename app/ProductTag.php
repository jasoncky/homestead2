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

    public function tagProducts()
    {
        return $this->belongsToMany(Product::class);
    }
}
