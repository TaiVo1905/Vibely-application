<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if(request()->method() == "PUT") {
            return [
                'content' => ['required'],
                'status' => ['required', Rule::in(['public', 'private'])]
            ];
        } else {
            return [
                'content' => ['sometimes', 'required'],
                'status' => ['sometimes', 'required', Rule::in(['public', 'private'])]
            ];
        }
    }
}
