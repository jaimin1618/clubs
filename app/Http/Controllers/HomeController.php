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

    function get_data ($id = 0) {
        $clubs = Club::all();
        if ($id > 0) {
            $clubs = Club::where('id', $id)->get();
        }
        return json_encode($clubs);
    }
    
}
