<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [];

        $method = $this->route()->getActionMethod();

        switch ($this->method()) {
            case 'POST':
                switch ($method) {
                    case 'add':
                        $rules = [
                            'name' => 'required',
                            'email' => 'required|unique:users',
                            'password' => 'required',
                            'phoneNumber' => 'required',
                            'address' => 'required',
                            'birthday' => 'required',
                            'role' => 'required'
                        ];
                        break;

                    case 'edit':
                        $rules = [
                            'name' => 'required',
                            'email' => 'required',
                            'password' => 'required',
                            'phoneNumber' => 'required',
                            'address' => 'required',
                            'birthday' => 'required',
                            'role' => 'required'
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

    public function message(){
        return[
            'name.required'=> 'Không được bỏ trống tên',
            'phoneNumber.required'=>'Không được bỏ trống số điện thoại',
            'email.required'=>'Không được bỏ trống email',
            'email.unique'=>'Email này đã được dùng',
            'address.required'=>'Không được bỏ trống địa chỉ',
            'birthday.required' => 'Không được bỏ trống ngày sinh',
            'role.required'=>'Không được bỏ trống vai trò',
        ];
    }
}
