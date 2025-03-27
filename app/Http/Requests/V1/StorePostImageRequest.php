<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StorePostImageRequest extends FormRequest
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
        return [
            'postId' => ['required'],
            'image_url' => ['required'],
        ];
    }

    protected function prepareForValidation() {
        $this->merge([
            'post_id' => $this->postId,
            'image_url' => $this->imageUrl
        ]);
    }
}
