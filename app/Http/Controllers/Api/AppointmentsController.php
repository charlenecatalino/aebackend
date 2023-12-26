<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Appointments;
use App\Http\Requests\AppointmentsRequest;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Appointments::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AppointmentsRequest $request)
    {
        // Validate the request and retrieve the validated input data
        $validated = $request->validated();

        // Create a new appointment
        $appointment = Appointments::create($validated);

        return $appointment;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the appointment by ID or throw a 404 exception
        return Appointments::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AppointmentsRequest $request, string $id)
    {
        // Validate the request and retrieve the validated input data
        $validated = $request->validated();

        // Find the appointment by ID or throw a 404 exception
        $appointment = Appointments::findOrFail($id);

        // Update the appointment
        $appointment->update($validated);

        return $appointment;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the appointment by ID or throw a 404 exception
        $appointment = Appointments::findOrFail($id);

        // Delete the appointment
        $appointment->delete();

        return $appointment;
    }
}
