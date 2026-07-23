<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Support\Str;

class ReservationController extends Controller
{
    public function store(Event $event){
        $reservation = Reservation::where('user_id', auth()->id())
        ->where('event_id', $event->id)->first();

        if($reservation){
            return redirect('/events')->with('error', 'vous etes deja inscit à cet événement');
        }

        if($event->reservation()->count()>= $event->capacity){
            return redirect('/events')->with('error', 'cet événement est complet');
        }

        Reservation::create([

        'reservation_code' => 'BDE-2026-' .strtoupper(Str::random(5)),
        'reservation_date' => now(),
        'user_id' => auth()->id(),
        'event_id' => $event->id,
        ]);
         return redirect('/events')->with('success', 'Reservation effectuée avec succés');
    }
}
