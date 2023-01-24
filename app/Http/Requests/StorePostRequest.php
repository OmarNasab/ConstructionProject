<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePostRequest extends FormRequest
{

    public function prepareForValidation()
    {
        $this->merge([
            'user_id' => Auth::id(),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            "image"=>"required",
            "title"=>"required",
            "description"=>"required",
            "user_id"=>"required"
        ];
    }
}
