<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewUserRequest extends FormRequest
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
		switch ($this->method()) {
			case 'GET':
			case 'DELETE': {
				return [];
			}
			case 'POST': {
				return [
					'first_name' => 'required|min:2|max:50',
					'last_name' => 'required|min:2|max:50',
					'email' => 'required|unique:users|min:2|max:50',
					'sex' => 'required',
					'mobile' => 'required',
					'read_policy' => 'required',
					'password' => 'required|min:5|max:15|confirmed',
					'password_confirmation' => 'required|min:5|max:15',
				];
			}
			case 'PUT':
			case 'PATCH': {
				return [
					
					'bank_id' => 'numeric',
					'acc_name' => 'required|min:2|max:50',
					'acc_number' => 'required',
				];
			}
			default:
				break;
		}
	}
}