<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class AdminFormController extends Controller
{
     
    function index() {
        return view('admin.adminForm');
    }

    function get_data () {
        $clubs = Club::all(['clubName']);
        if ($clubs != null && count($clubs) > 0) {
            return json_encode(['status' => true, 'data' => $clubs]);
        } 
        return json_encode(['status' => false, 'data' => null]);
    }
    
}
