<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentsRequest extends FormRequest
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
            'appointment_date' => 'required|date',
            'appointment_time' => 'required|date_format:H:i',
            'symptoms' => 'nullable|string',
            'comments' => 'nullable|string',
            'status' => 'nullable|boolean',
            'patient_id' => 'required|exists:patients,patient_id',
            'schedule_id' => 'required|exists:doctor_schedules,schedule_id',
            'staff_id' => 'required|exists:staffs,staff_id',
        ];
    }
}
