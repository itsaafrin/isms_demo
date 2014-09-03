<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendSMSFormRequest extends FormRequest {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'message_recipient' => 'required',
            'message_content' => 'required|between:5,128',
            'message_type' => 'required|integer'
            
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

}
