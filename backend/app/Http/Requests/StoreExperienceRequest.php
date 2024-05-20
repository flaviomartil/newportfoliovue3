<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExperienceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'description' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'started_in' => 'required|date',
            'finished_in' => 'nullable|date',
            'user_id' => 'required|integer'
        ];
    }
}
