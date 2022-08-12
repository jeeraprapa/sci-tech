<?php

namespace SciTech\Admin\Http\Requests\Department;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDepartmentRequest extends FormRequest
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
            'slug' => ['required', 'max:255', 'regex:/^[a-zA-Z0-9_-]+$/u', Rule::unique('departments')->whereNull('deleted_at')->ignore($this->id)],
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
            'status.required' => 'สถานะห้ามว่าง',
            'description.required' => 'รายละเอียดห้ามว่าง',
            'description.max' => 'รายละเอียดต้องมีความยาวตัวอักษรไม่เกิน 65535 ตัวอักษร',
        ];
    }
}
