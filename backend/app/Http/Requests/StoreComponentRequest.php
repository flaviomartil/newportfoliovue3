<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComponentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'subtitle' => 'required|string|max:255',
            'component' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
            'font-size' => 'required|integer|min:1',
        ];
    }
}
