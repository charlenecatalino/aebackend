<?php

namespace App\Http\Controllers\Api;

use App\Models\Patients;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientsController extends Controller
{
    /**
     * Display a listing of patients.
     */
    public function index()
    {
        return Patients::all();
    }

    /**
     * Store a newly created patient in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'password' => 'required|string',
            'patient_first_name' => 'required|string',
            'patient_last_name' => 'required|string',
            'patient_marital_status' => 'required|string',
            'patient_date_of_birth' => 'required|date',
            'patient_gender' => 'required|string',
            'patient_address' => 'required|string',
            'patient_phone' => 'required|string',
            'patient_email' => 'required|email|unique:patients,patient_email',
        ]);

        $patient = Patients::create($validatedData);

        return response()->json(['patient' => $patient], 201);
    }

    /**
     * Display the specified patient.
     */
    public function show(string $id)
    {
        $patient = Patients::findOrFail($id);
        return response()->json(['patient' => $patient]);
    }

    /**
     * Update the specified patient in storage.
     */
    public function update(Request $request, string $id)
    {
        $patient = Patients::findOrFail($id);

        $validatedData = $request->validate([
            'password' => 'required|string',
            'patient_first_name' => 'required|string',
            'patient_last_name' => 'required|string',
            'patient_marital_status' => 'required|string',
            'patient_date_of_birth' => 'required|date',
            'patient_gender' => 'required|string',
            'patient_address' => 'required|string',
            'patient_phone' => 'required|string',
            'patient_email' => 'required|email|unique:patients,patient_email,' . $patient->patient_id,
        ]);

        $patient->update($validatedData);

        return response()->json(['patient' => $patient]);
    }

    /**
     * Remove the specified patient from storage.
     */
    public function destroy(string $id)
    {
        $patient = Patients::findOrFail($id);
        $patient->delete();

        return response()->json(['message' => 'Patient deleted successfully']);
    }
}
