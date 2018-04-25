<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Cliente;

class ClienteRequest extends FormRequest
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
         if ($this->tipodoc == "RUC") {
            return [
               'nombre' => 'required',
               'tipodoc' => 'required',
               'email' => 'required',
               'numerodoc' => 'required|min:10|max:10',
            ];
           } 

        else {
            return [
               'nombre' => 'required',
               'tipodoc' => 'required',
               'email' => 'required',
               'numerodoc' => 'required|min:7|max:7',
            ];
           }
    }
}
