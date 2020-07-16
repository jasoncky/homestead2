<?php

namespace App;
use Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Traits\MultiTenantModelTrait;

class Member extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait, MultiTenantModelTrait;

    public $table = 'members';

    protected $appends = [
        'photo',
    ];
	
	protected $hidden = [
        'password',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'email',
		'password',
        'created_at',
        'updated_at',
        'deleted_at',
		'phone',
		'provider', 
		'provider_id',
		'status',
		'created_by_id',
    ];
	
	const STATUS_COLOR = [
        'Active'   => '#90EE90',
        'Inactive' => '#00BFFF',
    ];
	
	public static function boot()
	{
		parent::boot();
		Member::observe(new \App\Observers\UserActionsObserver);
	}
	
	public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
        }
    }
	
	public function scopeFilterDates($query)
    {
        $date = explode(" - ", request()->input('from-to', "")); 
		
        if(count($date) != 2)
        {
            //Log::debug('date not count 2');
			$date = [now()->format("Y-m-d"), now()->addDays(1)->format("Y-m-d")];
        }

        return $query->whereBetween('created_at', $date);
    }
	
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(50)->height(50);
    }

    public function getPhotoAttribute()
    {
        $file = $this->getMedia('photo')->last();

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