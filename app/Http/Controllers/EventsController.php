<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller {

    function index () {
        return view('events');
    }

    function addEvent (Request $req) {
        return json_encode($req->all()->get());
    }

}
