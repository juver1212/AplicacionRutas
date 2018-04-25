<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AutomovilRequest extends FormRequest
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
             'imei_movil' => 'required|min:16|max:16',
             'alias' => 'required',
             'placa' => 'required|min:6',
        ];
    }
}
