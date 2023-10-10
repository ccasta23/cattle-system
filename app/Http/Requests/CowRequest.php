<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use App\Enums\Breeds;

class CowRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'cow_name' => 'required|string|max:255',
            'cow_alias' => ['required','string','max:255'],
            //'cow_code' => ['required','string','max:5', 'unique:App\Models\Cow,cow_code'],
            'cow_code' => ['required','string','max:5'],
            'cow_birthdate' => ['required','date'],
            'cow_weight' => ['required','numeric', 'min:30', 'max:900'],
            'cow_height' => ['required','numeric', 'min:50', 'max:300'],
            'cow_breed' => [new Enum(Breeds::class)]
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'cow_alias.required' => 'Debe colocarle un Alias a su vaca',
            'cow_weight.max' => 'La vaca no puede ser tan pesada',
        ];
    }
}
