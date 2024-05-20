<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAboutRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'description' => 'required|string|max:255',
            'back_techs' => 'required|string|max:255',
            'front_techs' => 'required|string|max:255',
            'photo' => 'nullable|string',
        ];
    }
}
