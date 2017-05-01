<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Requires user to be autenticated to call this controller.
     */    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = auth()->user()->events;
        return view('event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        $event = Event::create(request([
            'user_id', //agafar d'altre puesto
            'parcela_id',
            'nom',
            'data',
            'fet',
            'descripcio',
        ]));
        //$event->user_id = auth()->user()->id;

        return redirect('/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, Event $event)
    {
        $event['user_id'] = auth()->user()->id;
        $event['parcela_id'] = $request['parcela_id'];
        $event['nom'] = $request['nom'];
        $event['data'] = $request['data'];
        $event['fet'] = $request['fet'];
        $event['descripcio'] = $request['descripcio'];

        $event->save();

        return view('event.show', compact('event'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        Event::destroy($event->id);
        return redirect('/events');
    }
}
