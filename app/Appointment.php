<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\MultiTenantModelTrait;
use App\Traits\AppointmentModelTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;

class Appointment extends Model
{
    use SoftDeletes, MultiTenantModelTrait, Notifiable, AppointmentModelTrait;

    public $table = 'appointments';

    protected $dates = [
        'end_time',
        'start_time',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const RECURRENCE_RADIO = [
        'none'    => 'None',
        'daily'   => 'Daily',
        'weekly'  => 'Weekly',
        'monthly' => 'Monthly',
    ];

    protected $fillable = [
        'name',
        'end_time',
        'appointment_id',
        'start_time',
        'recurrence',
        'created_at',
        'updated_at',
        'deleted_at',
		'created_by_id',
		'client_id',
		'employee_id',
		'service_id',
		'venue',
		'description',
		'status',
    ];
	
	public static function boot()
	{
		parent::boot();
		Appointment::observe(new \App\Observers\UserActionsObserver);
	}
    
    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
	
	public function appointments()
    {
        return $this->hasMany(Appointment::class, 'appointment_id', 'id');
    }

    public function getStartTimeAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setStartTimeAttribute($value)
    {
        $this->attributes['start_time'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getEndTimeAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setEndTimeAttribute($value)
    {
        $this->attributes['end_time'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'appointment_id');
    }

    public function saveQuietly()
    {
        return static::withoutEvents(function () {
            return $this->save();
        });
    }
	
	public function setCreatedByIdAttribute($input)
    {
        $this->attributes['created_by_id'] = $input ? $input : null;
    }
	
	public function services()
    {
        return $this->belongsToMany(Service::class);
    }
	
	public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}