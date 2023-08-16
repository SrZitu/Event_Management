<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    function home(){
        return view('frontend.index');
    }


    public function create()
    {
        $events = Event::all(); 
        return view('reservations.create', compact('events'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'event_id' => 'required|exists:events,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        Reservation::create($data);

        return redirect()->route('reservations.create')
            ->with('success', 'Reservation successfully made!');
    }
}
