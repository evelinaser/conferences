<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateConferenceRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check();
    }
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date|after_or_equal:today',
            'address' => 'required|max:255',
        ];
    }
}
