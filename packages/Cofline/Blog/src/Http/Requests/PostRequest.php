<?php

namespace Cofline\Blog\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //Return true while waiting to find a solution to authenticate
        return true;
        // return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_id' => 'required|int',
            'title' => 'required|string',
            'content' => 'required|string',
            'is_published' => 'bool'
        ];
    }
}