<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServiceVideoRequest extends FormRequest
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
            "service_id" => "required|exists:services,id",
            "youtube_url" => "required|string|max:500",
            "title_ar" => "nullable|string|max:191",
            "title_en" => "nullable|string|max:191",
            "description_ar" => "nullable|string",
            "description_en" => "nullable|string",
            "thumbnail_url" => "nullable|string|url|max:500",
            "status" => "required|boolean",
            "thumbnail" => [
                $this->method() == "PUT" ? 'nullable' : 'nullable',
                'image',
                'mimes:jpeg,png,jpg,gif,webp',
                'max:2048'
            ],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'service_id.required' => 'The service is required.',
            'service_id.exists' => 'The selected service does not exist.',
            'youtube_url.required' => 'The YouTube URL is required.',
            'youtube_url.url' => 'The YouTube URL must be a valid URL.',
            'youtube_url.max' => 'The YouTube URL may not be greater than 500 characters.',
            'title_ar.max' => 'The Arabic title may not be greater than 191 characters.',
            'title_en.max' => 'The English title may not be greater than 191 characters.',
            'thumbnail_url.url' => 'The thumbnail URL must be a valid URL.',
            'thumbnail_url.max' => 'The thumbnail URL may not be greater than 500 characters.',
            'status.required' => 'The status is required.',
            'status.boolean' => 'The status must be true or false.',
            'thumbnail.image' => 'The thumbnail must be an image.',
            'thumbnail.mimes' => 'The thumbnail must be a file of type: jpeg, png, jpg, gif, webp.',
            'thumbnail.max' => 'The thumbnail may not be greater than 2048 kilobytes.',
        ];
    }
}
