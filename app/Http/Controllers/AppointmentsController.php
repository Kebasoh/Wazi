<?php

namespace App\Http\Controllers;

use App\Appointments;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function showAllAppointments()
    {
        return response()->json(Appointments::all());
    }

    public function showOneAppointment($id)
    {
        return response()->json(Appointments::find($id));;
    }

    public function store(Request $request)
    {
        $appointments = Appointments::create($request->all());

        return response()->json($appointments, 201);
    }

    public function update(Request $request, $id)
    {
        $appointments = Appointments::findOrFail($id);
        $appointments->update($request->all());
        
        return response()->json(['message' => 'Success! appointment updated', $appointments, 200]);
    }

    public function delete( Appointments $appointments)
    {
        Appointments::findOrFail($id)->delete();
        
        return response()->json(['message' => 'Delete success']);
    }

}

