<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreReplyRequest extends FormRequest
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
            'commentId' => ['required'],
            'replierId' => ['required'],
            'content' => ['required']
        ];
    }

    protected function prepareForValidation() {
            $this->merge([
                'comment_id' => $this->commentId,
                'replier_id' => $this->replierId
            ]);
    }
}
