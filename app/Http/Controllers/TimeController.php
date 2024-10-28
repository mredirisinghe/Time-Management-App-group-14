<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function all() { return TimeController::all(); } 
    
    public function get($id) { return TimeController::findOrFail($id); }
}
