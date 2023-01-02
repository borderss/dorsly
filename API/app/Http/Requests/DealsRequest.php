<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DealsRequest extends FormRequest
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
            'user_id' => 'required',
            'point_of_interest_id' => 'required',
            'type' => 'required',
            'prices' => 'required',
            'status' => 'required',
        ];
    }
}
