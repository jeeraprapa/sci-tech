<?php

namespace SciTech\Admin\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBlogRequest extends FormRequest
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
            'name' => 'required|max:255',
            'slug' => ['required', 'max:255', 'regex:/^[a-zA-Z0-9_-]+$/u', Rule::unique('blogs')->whereNull('deleted_at')->ignore($this->id)],
            'category_id' => 'required',
            'published_at' => 'required|date_format:Y-m-d H:i',
            'status' => 'required',
            'short_description' => 'required',
            'description' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'ชื่อห้ามว่าง',
            'name.max' => 'ชื่อต้องมีความยาวตัวอักษรไม่เกิน 255 ตัวอักษร',
            'slug.required' => 'slug ห้ามว่าง',
            'slug.max' => 'slug ต้องมีความยาวตัวอักษรไม่เกิน 255 ตัวอักษร',
            'slug.regex' => 'slug มีรูปแบบไม่ถูกต้อง',
            'slug.unique' => 'slug นี้ไม่สามารถใช้ได้',
            'category_id.required' => 'ประเภทห้ามว่าง',
            'published_at.required' => 'วันที่เผยแพร่ห้ามว่าง',
            'published_at.date_format' => 'วันที่เผยแพร่รูปแบบไม่ถุกต้อง',
            'status.required' => 'สถานะห้ามว่าง',
            'short_description.required' => 'รายละเอียดอย่างย่อห้ามว่าง',
            'short_description.max' => 'รายละเอียดอย่างย่อต้องมีความยาวตัวอักษรไม่เกิน 65535 ตัวอักษร',
            'description.required' => 'รายละเอียดห้ามว่าง',
            'description.max' => 'รายละเอียดต้องมีความยาวตัวอักษรไม่เกิน 65535 ตัวอักษร',
        ];
    }
}
