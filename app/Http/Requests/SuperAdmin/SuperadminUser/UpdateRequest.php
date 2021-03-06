<?php

namespace App\Http\Requests\SuperAdmin\SuperadminUser;

use App\PaymentSetting;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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

        $data = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$this->route('superadmin'),
        ];

        return $data;
    }
}
