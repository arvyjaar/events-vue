<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $events = Event::all();
        return response()->json(
            [
                'status' => 'success',
                'events' => $events, //->toArray()
            ], 200);
    }
}
