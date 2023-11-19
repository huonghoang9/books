<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
        $rules = [];
       $method = $this->route()->getActionMethod();
       switch ($this->method()){
           case 'POST':
               switch ($method){
                   case 'store':
                       $rules = [
                           'comment' => 'required',
                       ];
                       break;
               }
               break;
           default:
               break;
       }
       return $rules;
    }
    public function messages()
    {
        return [
            'comment.required' => 'Không được bỏ trống bình luận',
           
        ];
    }
}
