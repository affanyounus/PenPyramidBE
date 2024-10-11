<?php

namespace App\Http\Requests\Store;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreOrganizationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'bail|required|unique:organizations|max:255',
            'body' => 'required',
        ];
    }

    protected function prepareForValidation(): void{
        $this->merge([
           'slug'=>Str::slug($this->title),
        ]);
    }
}
