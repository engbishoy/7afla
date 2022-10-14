<?php

namespace Modules\Package\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
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

            "package_name.*" => ['required', 'string'],
            "description.*" => ['nullable'],
            "price.*" => ['required', 'numeric'],
            "photo.*"=>['required']
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
