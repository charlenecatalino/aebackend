<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Patients;
use App\Http\Controllers\Controller;
use App\Http\Requests\PatientsRequest;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Patients::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PatientsRequest $request)
    {
        // Validate the request and retrieve the validated input data
        $validated = $request->validated();

        // Create a new patient
        $patient = Patients::create($validated);

        return $patient;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the patient by ID or throw a 404 exception
        return Patients::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PatientsRequest $request, string $id)
    {
        // Validate the request and retrieve the validated input data
        $validated = $request->validated();

        // Find the patient by ID or throw a 404 exception
        $patient = Patients::findOrFail($id);

        // Update the patient
        $patient->update($validated);

        return $patient;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the patient by ID or throw a 404 exception
        $patient = Patients::findOrFail($id);

        // Delete the patient
        $patient->delete();

        return $patient;
    }
}
