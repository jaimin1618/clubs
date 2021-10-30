<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminFormController extends Controller
{
     
    public function index() {
        return view('admin.adminForm');
    }
}
