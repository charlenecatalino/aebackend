<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffsRequest extends FormRequest
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
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'gender' => 'required|string',
            'contact_number' => 'required|string',
            'email' => 'required|email|unique:staffs,email,' . $this->route('staff'), // Unique rule excluding the current staff member
        ];
    }
}
