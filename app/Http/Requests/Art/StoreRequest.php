<?php

namespace App\Http\Requests\Art;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required',
            'image' => 'required'
        ];
    }
}
