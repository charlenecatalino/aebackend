<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Checkups;
use App\Http\Requests\CheckupsRequest;

class CheckupsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Checkups::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CheckupsRequest $request)
    {
        // Validate the request and retrieve the validated input data
        $validated = $request->validated();

        // Create a new checkup
        $checkup = Checkups::create($validated);

        return $checkup;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the checkup by ID or throw a 404 exception
        return Checkups::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CheckupsRequest $request, string $id)
    {
        // Validate the request and retrieve the validated input data
        $validated = $request->validated();

        // Find the checkup by ID or throw a 404 exception
        $checkup = Checkups::findOrFail($id);

        // Update the checkup
        $checkup->update($validated);

        return $checkup;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the checkup by ID or throw a 404 exception
        $checkup = Checkups::findOrFail($id);

        // Delete the checkup
        $checkup->delete();

        return $checkup;
    }
}
