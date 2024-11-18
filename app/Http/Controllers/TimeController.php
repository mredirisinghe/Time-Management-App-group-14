<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeController extends Controller
{
<<<<<<< HEAD

    public function delete($id) 
    { $employee = TimeController::findOrFail($id); 
     return $employee->delete(); }
    public function update(Request $request, $id) { 
        $employee = TimeController::findOrFail($id);
        return $employee->update($request->all()); }

    public function edit($id) { return TimeController::findOrFail($id); }

=======
    public function all() { return TimeController::all(); } 
    
    public function get($id) { return TimeController::findOrFail($id); }
>>>>>>> 7ddafcb33bb671eadfde68eeb22c586a2f2ac5c8
}
