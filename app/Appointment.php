<?php

namespace App;

// TODO: Use events to send emails
// TODO: Send email X hours before appointment starts. Create a reminder class?
// https://laravel.com/docs/7.x/eloquent#events
/*
use App\Events\AppointmentSaved;
use App\Events\AppointmentUpdated;
*/
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'attendant_name',
        'attendant_email',
        'attendant_phone',
        'organization_type',
        'organization_name',
        'scheduled_date', 
        'slot', 
        'specie',
        'total_antibodies',
        'fluorophores',
        'reservation_code',
        'status'
    ];

    protected $casts = [
        'scheduled_date' => 'datetime'
    ];
    /*
    protected $dispatchesEvents = [
        'saved' => AppointmentSaved::class,
        'updated' => AppointmentUpdated::class,
    ];
    */
    
    /**
     * 1: USACH, 2: Other organzation
     */
    protected $attributes = [
        'organization_type' => 1,
        'status' => 'PENDING',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
