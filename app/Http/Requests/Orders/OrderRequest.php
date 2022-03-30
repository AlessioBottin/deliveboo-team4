<?php

namespace App\Http\Requests\Orders;

use Illuminate\Foundation\Http\FormRequest;
class OrderRequest extends FormRequest
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
            'token' => 'required',
            // For each element inside plate, verify if the id exists in plates table
            'plate.*.id' => 'exists:plates,id'
            // If we want to check if the plates belong to the same restaurant we need to check if the user_id is the same in each plate
        ];
    }
}
