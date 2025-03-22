<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
                'name' => ['required'],
                'email' => ['required', 'email'],
                'phoneNumber' => ['required'],
                'imageUrl' => ['required', 'url:http,https'],
                'address' => ['required'],
            ];
        } else {
            return [
                'password' => ['required', 'confirmed']
            ];
        }
    }

    protected function prepareForValidation() {
        if($this->phoneNumber && $this->imageUrl) {
            $this->merge([
                'phone_number' => $this->phoneNumber,
                'image_url' => $this->imageUrl
            ]);
        }
    }
}
