<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'name'              => 'required|max:150',
            'repository_link'   => 'required',
            'description'       => 'required',
            'date_start'        => 'required|date',
        ];
    }
    public function messages()
    {
        return [
            'name.required'         => 'Il campo Name Project è obbligatorio.',
            'name.max'              => 'Il campo deve avere massimo 150 caratteri',
            'link.required'         => 'Il campo Link Project è obbligatorio.',
            'description.required'  => 'Il campo Project Description è obbligatorio.',
            'date_start.required'   => 'Il campo Start Date Project è obbligatorio.',
            'date_start.date'       => 'Il campo Start Date Project non è valido.',
        ];
    }
}
