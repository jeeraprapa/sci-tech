<?php

namespace SciTech\Admin\Http\Requests\Reward;

use Illuminate\Foundation\Http\FormRequest;

class StoreRewardBannerRequest extends FormRequest
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
            'banner_small' => 'required',
            'banner_large' => 'required',
            'sort_order' => 'nullable|integer|min:1|max:2147483647',
            'type' => 'required',
            'title.th' => 'required|max:65535',
            'title.en' => 'required|max:65535',
            'content.th' => 'nullable|max:65535',
            'content.en' => 'nullable|max:65535',
            'url.th' => 'nullable|max:65535',
            'url.en' => 'nullable|max:65535',
        ];
    }
}
