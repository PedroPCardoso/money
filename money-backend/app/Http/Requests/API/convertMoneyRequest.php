<?php

namespace App\Http\Requests\API;

use App\Models\Money;
use Illuminate\Foundation\Http\FormRequest;

class convertMoneyRequest extends FormRequest 
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
        return Money::$rules;
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return Money::$messages;
    }




}
