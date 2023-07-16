<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeUpdateRequest extends FormRequest
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
            //Mensaje a mostrar en caso el campo nombre esté vacío
            "name" => "required"
        ];
    }

    //Método creado para: definir mensajes personalizados para los atributos de los campos que se están validando
    public function attributes()//Este método permite personalizar los mensajes de error de validación
    {
        return [
            "name" => "nombre"//Cuando el campo "name" esté vacío, indicará que el campo nombre está vacío
        ];
    }
}
