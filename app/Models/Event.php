<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    public $table = 'events';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'description',
        'event_type_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $with = ['location', 'eventType'];

    public function eventType()
    {
        return $this->belongsTo('App\Models\EventType', 'event_type_id');
    }

    public function location()
    {
        return $this->hasMany('App\Models\Location', 'event_id');
    }

}
