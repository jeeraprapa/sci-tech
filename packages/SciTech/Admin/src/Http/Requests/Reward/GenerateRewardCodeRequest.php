<?php

namespace SciTech\Admin\Http\Requests\Reward;

use Illuminate\Foundation\Http\FormRequest;

class GenerateRewardCodeRequest extends FormRequest
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
            'code_quantity' => 'required',
            'code_length' => 'required',
            'code_format' => 'required',
            'code_prefix' => 'nullable|alpha_num',
            'code_suffix' => 'nullable|alpha_num',
            'expired_at' => 'nullable|date_format:Y-m-d H:i',
        ];
    }
}
