<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CredentialUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => ['required', 'exists:credentials,id'],
            'password'       => ['nullable', 'max:255', 'string'],
            '2fa_code' => ['nullable', 'max:255', 'string'],

            'general_information'       => ['nullable', 'max:255', 'string'],
            'full_name'                 => ['nullable', 'max:255', 'string'],
            'business_email_address'    => ['nullable', 'max:255', 'string'],
            'personal_email_address'    => ['nullable', 'max:255', 'string'],
            'mobile_phone_number'       => ['nullable', 'max:255', 'string'],
            'facebook_page_name'        => ['nullable', 'max:255', 'string'],
        ];
    }
}
