<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobListing extends FormRequest
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
            'title'             => ['required', 'string', 'max:255'],
            'salary'            => ['required', 'string'],
            'address'           => ['required', 'string'],
            'job_nature'        => ['required', 'string'],
            'requirements'      => ['required', 'string'],
            'full_description'  => ['required', 'string'],
            'short_description' => ['required', 'string'],
            'phone'             => ['required', 'digits:11'],
            'email'             => ['required', 'email'],
            'company_name'      => ['required', 'string'],
        ];
    }
}
