<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Staffs;
use App\Http\Requests\StaffsRequest;

class StaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Staffs::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StaffsRequest $request)
    {
        // Validate the request and retrieve the validated input data
        $validated = $request->validated();

        // Create a new staff member
        $staff = Staffs::create($validated);

        return $staff;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the staff member by ID or throw a 404 exception
        return Staffs::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StaffsRequest $request, string $id)
    {
        // Validate the request and retrieve the validated input data
        $validated = $request->validated();

        // Find the staff member by ID or throw a 404 exception
        $staff = Staffs::findOrFail($id);

        // Update the staff member
        $staff->update($validated);

        return $staff;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the staff member by ID or throw a 404 exception
        $staff = Staffs::findOrFail($id);

        // Delete the staff member
        $staff->delete();

        return $staff;
    }
}
