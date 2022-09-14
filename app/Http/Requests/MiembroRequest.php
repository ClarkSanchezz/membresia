<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MiembroRequest extends FormRequest
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
            
            'nombre' => 'required|max:60',
            'apellido1' => 'required|max:60',
            'apellido2' => 'nullable|max:60',
            'fecha_nac' => 'required|date_format:Y-m-d',
            //'estado' => 'nullable|max:60',
            'estado' => 'required|numeric|min:0|max:2',
            'ministerio' => 'nullable|max:60'
        ];
    }
}
