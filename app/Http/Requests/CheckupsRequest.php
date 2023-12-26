<?php

// CheckupsRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckupsRequest extends FormRequest
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
            'medication_prescribed' => 'nullable|string',
            'diagnosis' => 'nullable|string',
            'referral' => 'nullable|string',
            'appointment_id' => 'required|exists:appointments,appointment_id',
            'schedule_id' => 'required|exists:doctor_schedules,schedule_id',
        ];
    }
}
