<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MasterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب',
            'exists' => 'غير موجود',
            'min' => 'مطلوب 8 احرف على الأقل',
        ];
    }
}
