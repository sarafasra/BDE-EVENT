<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;


class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('events.index', compact('events'));
    }
    public function create()
{
    return view('events.create');
}


public function store(Request $request){
    $validate = $request->validate([
       'title' => 'required|string|max:255',
        'description' => 'required|string',
        'date' => 'required|date',
        'time' => 'required',
        'location' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'capacity' => 'required|integer|min:1',
    ]);
    Event::create($validate);
    return redirect('/events')->with('sucess', 'Evenement creer avec sucess');
}
}