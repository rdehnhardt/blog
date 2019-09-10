<?php

namespace Blog\Ui\Web\Requests;

use Skeleton\Parents\Foundation\Http\FormRequest;

class Post extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
        ];
    }
}
