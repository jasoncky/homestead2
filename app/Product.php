<?php

namespace App;

use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Product extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait, MultiTenantModelTrait;

    public $table = 'products';

    protected $appends = [
        'photo',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
		'code',
        'price',
		'stock',
		'status',
		'quantity',
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
		'created_by_id',
    ];
	
	const STATUS_COLOR = [
        'Active'   => '#90EE90',
        'Inactive' => '#00BFFF',
    ];
	
	const STOCK_COLOR = [
        'LOWALERT' => '#ffc107',
		'LOWSTOCK' => '#dc3545',
    ];
	
	const LOWALERPERCENT = 30;
   
    public static function boot()
	{
		parent::boot();
		Product::observe(new \App\Observers\UserActionsObserver);
	}
    
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(50)->height(50);
		
		// Watermark conversion
        $this->addMediaConversion($media->basename.'preview')
            ->watermark(public_path('/images/watermark.png'))
			->watermarkOpacity(50)
            ->nonQueued();
    }

    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class);
    }

    public function tags()
    {
        return $this->belongsToMany(ProductTag::class);
    }

    public function getPhotoAttribute()
    {
        $file = $this->getMedia('photo')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
			$file->preview = $file->getUrl('preview');
        }

        return $file;
    }
	
	public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
