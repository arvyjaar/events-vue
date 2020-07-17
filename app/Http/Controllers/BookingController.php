<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Event;

class BookingController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        /*
        $event = Event::find($request->event);
        $this->locations = $event->location->pluck('id');

        $users = User::with(['eventDate' => function($q) {
            $q->whereIn('location_id', $this->locations);
        }])->get();
        */
        $events = Event::all();

        switch (auth()->user()->roles) {
                // Admin
            case 1:
                $users = User::all();
                break;
                // TeamLead
            case 2:
                /*
                $users = User::with(['eventDate' => function ($q) {
                    $q->whereIn('location_id', $this->locations);
                }])->where('branch_id', auth()->user()->branch_id)->get();
                */
                $users = User::with(['eventDate'])->where('branch_id', auth()->user()->branch_id)->get();
                break;
        }

        return response()->json(
            [
                'status' => 'success',
                'users' => $users,
                'events' => $events,
            ],
            200
        );
    }
}
