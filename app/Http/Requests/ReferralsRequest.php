<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReferralsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // You may adjust the authorization logic if needed
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'referral_date' => 'required|date',
            'referral_reason' => 'required|string',
            'referral_description' => 'nullable|string',
            'facility_name' => 'required|string',
            'facility_address' => 'required|string',
            'contact_number' => 'required|string',
            'checkup_id' => 'required|exists:checkups,checkup_id',
        ];
    }
}
