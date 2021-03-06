<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use App\Traits\MultiTenantModelTrait;

class Badge extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait, MultiTenantModelTrait;

    public $table = 'badges';

    protected $appends = [
        'icon',
    ];

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
	
	public static function boot()
	{
		parent::boot();
		Badge::observe(new \App\Observers\UserActionsObserver);
	}

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(16)->height(16)->keepOriginalImageFormat();
    }

    public function badgesEmployees()
    {
        return $this->belongsToMany(Employee::class);
    }

    public function getIconAttribute()
    {
        $file = $this->getMedia('icon')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
	
	public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}