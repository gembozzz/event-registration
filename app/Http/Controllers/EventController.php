<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('start_at', 'asc')
        ->where('is_active', 1)
        ->get();
        return view('frontend.events.index', compact('events'));
    }

    public function show(Event $event)
    {
        return view('frontend.events.show', compact('event'));
    }
}
