<?php

namespace Modules\Package\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePackageRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "profile_id" => ['required'],
            "title" => ['required', 'string'],

            "package_name.*" => ['required'],
            "description.*" => ['nullable'],
            "price.*" => ['required', 'numeric'],
            "photo.*"=>['required','image']
        
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
