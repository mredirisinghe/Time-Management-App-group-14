<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function edit($id) { return TimeController::findOrFail($id); }
}
