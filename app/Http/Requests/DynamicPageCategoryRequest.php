<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DynamicPageCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules(): array
    {
        return [
            'language_id'   => 'required | exists:languages,id',
            'status'        => 'required | in:0,1',
            'title'         => 'required | string | min:3 | max:255 | unique:dynamic_page_categories,title,' . request('dynamic_page_category_id'),
            'slug'          => 'required | string | min:3 | max:255'
        ];
    }
}
