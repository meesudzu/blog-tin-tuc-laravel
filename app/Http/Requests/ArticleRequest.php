<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|min:5|max:191',
            'cat_id' => 'required',
            'summary' => 'required|max:190',
            'content' => 'required',
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
            'title.required' => __('app.title_required'),
            'summary.required' => __('app.summary_required'),
            'summary.max' => __('app.summary_max'),
            'content.required' => __('app.content_required'),
            'cat_id.required' => __('app.category_required'),
            'title.min' => __('app.title_min'),
            'title.max' => __('app.title_max'),
        ];
    }
}
