<?php

namespace SciTech\Admin\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAdminRequest extends FormRequest
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
            'email' => ['required', 'email', 'max:255', Rule::unique('admins')->whereNull('deleted_at')->ignore($this->id)],
            'password' => 'nullable|confirmed|max:255|min:8',
            'status' => 'required',
            'role_id' => 'required',
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
            'email.required' => 'อีเมลห้ามว่าง',
            'email.email' => 'อีเมลรูปแบบไม่ถูกต้อง',
            'email.max' => 'อีเมลต้องมีความยาวตัวอักษรไม่เกิน 255 ตัวอักษร',
            'email.unique' => 'อีเมลนี้ไม่สามารถใช้ได้',
            'password.confirmed' => 'รหัสผ่านไม่ตรงกัน',
            'password.max' => 'รหัสผ่านต้องมีความยาวตัวอักษรไม่เกิน 255 ตัวอักษร',
            'password.min' => 'รหัสผ่านต้องมีความยาวตัวอักษรไม่น้อยกว่า 8 ตัวอักษร',
            'status.required' => 'สถานะห้ามว่าง',
            'role_id.required' => 'สิทธิ์ห้ามว่าง',
        ];
    }
}
