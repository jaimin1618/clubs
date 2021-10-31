<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller {

    function index () {
        return view('events');
    }

    /*
    function imageUpload (Request $req) {
        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time().'.'.$req->image->extension();
        // $req->image->move(public_path('images'), $imageName); // FOR PUBLIC/images
        $req->image->storeAs('images/events', $imageName); // FOR STORAGE/APP/IMAGE

        return back()
            ->with('success', 'Image uploaded!')
            ->with('image', $imageName);
    }
    */

    function addEvent (Request $req) {
        $event = new Event;

        $req->validate([
            'club' => ['required', 'string', 'max:255'],
            'date' => ['required', 'string'],
            'time' => ['required', 'string'],
            'name' => ['required', 'string'],
            'level' => ['required', 'integer', 'min:0', 'max:5'],
            'text' => ['required'],
            'created_by' => ['required', 'string', 'max:255']
        ]);

        $event->club = $req->club;
        $event->date = $req->date;
        $event->time = $req->time;
        $event->eventName = $req->name;
        $event->level = $req->level;
        $event->description = $req->text;
        $event->certificate = $req->certificate;
        $event->created_by = $req->created_by;

        if ($event->save()) {
            return json_encode(true);
        } 

        return json_encode(false);
    }

    function displayEvents (Request $req) {
        $events = Event::orderBy('created_at','desc')->get();
        return json_encode($events);
    }

}
