<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use SoftDeletes;

    public $table = 'locations';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'address',
        'event_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * allways loaded relation
     */
    //protected $with = ['eventDate'];

    public function event()
    {
        return $this->belongsTo('App\Models\Event', 'event_id');
    }

    public function eventDate()
    {
        return $this->hasMany('App\Models\EventDate', 'location_id');
    }
}
