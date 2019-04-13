<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:100',
            'order' => 'required',
            'link' => 'required',
            'note' => 'required',
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
            'name.required' => __('app.name_required'),
            'name.min' => __('app.name_min'),
            'name.max' => __('app.name_max'),
            'order.required' => __('app.order_required'),
            'link.required' => __('app.link_required'),
            'note.required' => __('app.note_required'),
        ];
    }
}
