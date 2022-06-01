<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuarriesValidation extends FormRequest
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

    public function rules()
    {
        return [
            'name'=> '',
            'number'=> '',
            'address'=> '',
            'material'=> '',
            'material_type'=> '',
            'gross_weight'=> '',
            'tar_weight'=> '',
            'net_weight'=> '',
            'payment_status'=> '',
            'payment'=> '',
            'material_delivery_status'=> '',
        ];
    }
}
