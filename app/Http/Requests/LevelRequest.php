<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LevelRequest extends FormRequest
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
		switch($this->method())
		{
			case 'GET':
			case 'DELETE':
			{
				return [];
			}
			case 'POST':
			{
				return [
					'name' => 'required|unique:levels|min:3',
					'amount' => 'required|numeric',
					'discount' => 'required_if:discounted,on|numeric',
					'set_users' => 'required_if:discounted,on',
					'referred_discount' => 'required_if:referral,on|numeric',
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					'name' => 'required|min:3',
					'amount' => 'required|numeric',
					'discount' => 'required_if:discounted,on|numeric',
					'set_users' => 'required_if:discounted,on',
					'referred_discount' => 'required_if:referral,on|numeric',
				];
			}
			default:break;
		}
	}
}
