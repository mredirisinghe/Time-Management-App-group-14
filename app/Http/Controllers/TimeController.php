<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function update(Request $request, $id) { 
        $employee = TimeController::findOrFail($id);
        return $employee->update($request->all()); }
}
