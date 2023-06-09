<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCharacterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50|min:3',
            'level' => 'required',
            'class' => 'required|max:50|min:3',
            'race' => 'required|max:50|min:3',
            'lifepoint' => 'required',
            'strength' => 'required',
            'agility' => 'required',
            'main_weapon' => 'required|max:50|min:3',
        ];
    }
}
