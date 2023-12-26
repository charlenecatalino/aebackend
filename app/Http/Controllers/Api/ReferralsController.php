<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Referrals;
use App\Http\Requests\ReferralsRequest;

class ReferralsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Referrals::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReferralsRequest $request)
    {
        // Validate the request and retrieve the validated input data
        $validated = $request->validated();

        // Create a new referral
        $referral = Referrals::create($validated);

        return $referral;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the referral by ID or throw a 404 exception
        return Referrals::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReferralsRequest $request, string $id)
    {
        // Validate the request and retrieve the validated input data
        $validated = $request->validated();

        // Find the referral by ID or throw a 404 exception
        $referral = Referrals::findOrFail($id);

        // Update the referral
        $referral->update($validated);

        return $referral;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the referral by ID or throw a 404 exception
        $referral = Referrals::findOrFail($id);

        // Delete the referral
        $referral->delete();

        return $referral;
    }
}
