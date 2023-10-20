<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [];
        $method = $this->route()->getActionMethod();
        switch ($this->method()){
            case 'POST':
                switch ($method){
                    case 'add':
                        $rules = [
                            'book_name' => 'required',
                            "price"  => 'required',
                            "quantity"  => 'required',
                            "publishing_year"  => 'required',
                            "image"  => 'required',
                            'cate_id' => 'required',
                            'describe' => 'required',
                            'producer_name'=> 'required',
                            'author_name'=> 'required',
                        ];
                        break;
                    case 'edit':
                        $rules = [
                            'book_name' => 'required',
                            "price"  => 'required',
                            "quantity"  => 'required',
                            "publishing_year"  => 'required',
                            'cate_id' => 'required',
                            'describe' => 'required',
                            'producer_name'=> 'required',
                            'author_name'=> 'required',
                        ];
                        break;
                    default:
                        break;
                }
                break;
            default:
                break;
        }

        return $rules;
    }
    public function  messages()
    {
        return [
            'book_name.required'=> 'Không được bỏ trống tên sách',
            'price.required'=> 'Không được bỏ trống giá tiền ',
            'publishing.required' => 'Không được bỏ trống năm xuất bản',
            'quantity.required'=> 'Không được bỏ trống số lượng',
            'describe.required'=> 'Không được bỏ trống mô tả',
            'image.required'=> 'Không được bỏ trống ảnh',
            'cate_id.required'=> 'Không được bỏ trống loại sách',
            'producer_name.required' => 'Không được bỏ trống nhà xuất bản',
            'author_name.required' => 'Không được bỏ trống tác giả'
        ];
    }
}
