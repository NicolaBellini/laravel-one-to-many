<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class projectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'name' => 'required|min:2|max:30',
        'topic' => 'required|min:2|max:50',
        'difficulty' => 'required|min:1|max:10'
        ];
    }

    public function messages(): array
    {
        return[
            'name.required' => 'Il nome deve essere inserito',
            'name.min' => 'Il nome deve avere almeno :min caratteri',
            'name.max' => 'Il nome deve avere massimo :max caratteri',
            'topic.required' => 'Il topic deve essere inserito',
            'topic.min' => 'Il topic deve avere almeno :min caratteri',
            'topic.max' => 'Il topic deve avere massimo :max caratteri',
            'difficulty.required' => 'La difficoltà deve essere inserita',
            'difficulty.min' => 'La difficoltà deve avere almeno :min caratteri',
            'difficulty.max' => 'La difficoltà deve avere massimo :max caratteri'
        ];
    }
}
