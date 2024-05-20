<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComponentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'subtitle' => 'sometimes|required|string|max:255',
            'component' => 'sometimes|required|string|max:255',
            'user_id' => 'sometimes|required|exists:users,id',
            'font-size' => 'sometimes|required|integer|min:1',
        ];
    }
}
