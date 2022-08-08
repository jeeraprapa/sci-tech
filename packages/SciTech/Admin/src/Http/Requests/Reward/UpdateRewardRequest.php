<?php

namespace SciTech\Admin\Http\Requests\Reward;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRewardRequest extends FormRequest
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
            'category_id' => 'required',
            'type' => 'required',
            'status' => 'required',
            'amount' => 'nullable|required_if:type,coupon,gift|integer|min:1|max:2147483647',
            'spend_point' => 'required|integer|min:1|max:2147483647',
            'usage_per_user' => 'nullable|integer|min:1|max:2147483647',
            'starts_from' => 'nullable|date_format:Y-m-d H:i',
            'ends_till' => 'nullable|date_format:Y-m-d H:i|after:starts_from',
            'shipment' => 'required|max:65535',
            'name.en' => 'required|max:65535',
            'name.th' => 'required|max:65535',
            'description.en' => 'required|max:65535',
            'description.th' => 'required|max:65535',
            'condition.en' => 'required|max:65535',
            'condition.th' => 'required|max:65535',
            'starts_announcement' => 'sometimes|required|date_format:Y-m-d H:i',
            'ends_announcement' => 'sometimes|required|date_format:Y-m-d H:i|after:starts_announcement',
            'coupon_type' => 'sometimes|required',
        ];
    }
}
