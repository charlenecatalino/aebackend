<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DoctorSchedules;
use App\Http\Requests\DoctorSchedulesRequest;

class DoctorSchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DoctorSchedules::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorSchedulesRequest $request)
    {
        // Validate the request and retrieve the validated input data
        $validated = $request->validated();

        // Create a new doctor schedule
        $doctorSchedule = DoctorSchedules::create($validated);

        return $doctorSchedule;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the doctor schedule by ID or throw a 404 exception
        return DoctorSchedules::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DoctorSchedulesRequest $request, string $id)
    {
        // Validate the request and retrieve the validated input data
        $validated = $request->validated();

        // Find the doctor schedule by ID or throw a 404 exception
        $doctorSchedule = DoctorSchedules::findOrFail($id);

        // Update the doctor schedule
        $doctorSchedule->update($validated);

        return $doctorSchedule;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the doctor schedule by ID or throw a 404 exception
        $doctorSchedule = DoctorSchedules::findOrFail($id);

        // Delete the doctor schedule
        $doctorSchedule->delete();

        return $doctorSchedule;
    }
}
