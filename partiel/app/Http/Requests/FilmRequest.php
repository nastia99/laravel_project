<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
            'titre' => ['required', 'string', 'max:100'],
            'categorie_id' => ['required'],
            'anneeSortie' => ['required', 'Numeric', 'min:1900', 'max:2050'],
            'description' => ['required', 'string'],
        ];
    }
}
