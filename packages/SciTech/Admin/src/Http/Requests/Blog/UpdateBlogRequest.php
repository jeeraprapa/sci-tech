<?php

namespace SciTech\Admin\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'slug' => ['required', 'max:255', 'regex:/^[a-zA-Z0-9]+$/u', Rule::unique('blogs')->whereNull('deleted_at')->ignore($this->id)],
            'name' => 'required',
            'category_id' => 'required',
            'published_at' => 'required',
            'status' => 'required',
            'short_description' => 'required',
            'description' => 'required',
        ];
    }
}
