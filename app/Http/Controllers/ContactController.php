<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller {

    function index () {
        return view('contact');
    }

    function create (Request $req) {
        $status = true;
        $Message = new Contact;
        $Message->name = $req->name;
        $Message->email = $req->email;
        $Message->message = $req->message;

        if (!$Message->save()) {
            $status = false;
        }

        return json_encode($status);
    }
    
}
