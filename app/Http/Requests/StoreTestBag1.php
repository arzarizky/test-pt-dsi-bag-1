<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestBag1 extends FormRequest
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
            'nama'      => 'required|string',
            'jenis'     => 'required|in:1,2,3',
            'hp'        => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/',
            'komentar'  => 'required|min:3|max:1000'
        ];
    }
}
