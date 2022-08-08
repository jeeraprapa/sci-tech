<?php

namespace SciTech\Admin\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBlogCategoryRequest extends FormRequest
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
            'slug' => ['required', 'max:255', 'regex:/^[a-zA-Z0-9]+$/u', Rule::unique('blog_categories')->whereNull('deleted_at')->ignore($this->id)],
            'name' => 'required',
            'status' => 'required',
            'description' => 'required',
        ];
    }
}
