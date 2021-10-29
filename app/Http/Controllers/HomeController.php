<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class HomeController extends Controller {

    public function __construct() {
        $this->middleware(['auth', 'verified']);
    }
    
    public function index() {
        return view('index');
    }

    public function get_data () {
        $clubs = Club::all();
        return json_encode($clubs);
    }

    public function club_data ($id = 0) {
        return view('club');
    }

    public function show_club ($id = 0) {
        $club = Club::find($id);
        if ($club) {
            return json_encode(['status' => 1, 'data' => $club]);
        } 
        return json_encode(['status' => 0]);
    }
        
}
