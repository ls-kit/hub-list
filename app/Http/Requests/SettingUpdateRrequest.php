<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdateRrequest extends FormRequest
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
            'logo' => 'nullable|mimes:jpeg,jpg,png|max:1024',
            'fevicon' => 'nullable|mimes:jpeg,jpg,png|max:1024',
            'banner' => 'nullable|mimes:jpeg,jpg,png|max:1024',
        ];
    }
}
