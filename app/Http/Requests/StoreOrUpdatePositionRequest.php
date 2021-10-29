<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrUpdatePositionRequest extends FormRequest
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
            'file' => 'required|mimes:jpg,jpeg,png,svg|max:2048',
            'category' => 'required|string',
//            'name'         => ['required', 'string', 'min:3', 'max:255'],
//            'url'          => ['required', 'url', 'max:255'],
//            'category_id'  => ['required', 'integer', 'exists:categories,id' ],
//            'email'        => ['required', 'string', 'min:3', 'max:255', new Emails()],
//            'location_id'  => ['nullable', 'integer', 'exists:locations,id'],
//            'project_id'   => ['nullable', 'integer', 'exists:projects,id'],
//            'is_archived'   => ['boolean']
        ];
    }

    public function messages()
    {
        return [
            'file.required' => 'Прежде чем отправить изображение, необходимо его добавить',
            'file.mimes' => 'Поддерживает форматы - jpg,jpeg,png,svg'
//            'name.required'        => 'Это поле обязательно для заполнения.',
//            'name.min'             => 'Слишком короткое название вакансии.',
//            'name.max'             => 'Слишком длинное название вакансии.',
//            'category_id.required' => 'Категория обязательна для заполнения.',
//            'email.required'       => 'Это поле обязательно для заполнения.',
//            'email.min'            => 'Слишком короткий email.',
//            'url.required'         => 'Это поле обязательно для заполнения.',
//            'url.url'              => 'Введите валидный URL.',
        ];
    }
}