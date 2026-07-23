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
public function edit(Event $event)
{
    return view('events.edit', compact('event'));
}

public function update(Request $request, Event $event)
{
    $request->validate([
        'title'=>'required',
        'description'=>'required',
        'date'=>'required',
        'time'=>'required',
        'location'=>'required',
        'price'=>'required|numeric|min:0',
        'capacity'=>'required|integer|min:1',
    ]);

    $event->update($request->all());

    return redirect('/events')
        ->with('success','Événement modifié avec succès.');
}


public function destroy(Event $event)
{
    $event->delete();

    return redirect('/events')
        ->with('success','Événement supprimé avec succès.');
}
}