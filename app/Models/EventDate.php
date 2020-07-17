<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventDate extends Model
{
    use SoftDeletes;

    public $table = 'event_dates';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'datetime',
        'seats',
        'location_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $with = ['location'];

    public function location()
    {
        return $this->belongsTo('App\Models\Location', 'location_id');
    }

    public function getSeatsAvailableAttribute()
    {
        $seats_booked = DB::table('user_event_date')->where('event_date_id', $this->id)->get()->count();
        $seats_left = $this->seats - $seats_booked;

        return $seats_left;
    }

    public function getDatetimeAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)
            ->format('Y-m-d' . ' ' . 'H:i') : null;
    }

}
