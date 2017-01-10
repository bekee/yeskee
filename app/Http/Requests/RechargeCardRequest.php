<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RechargeCardRequest extends FormRequest
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
					'number' => 'required|unique:recharge_cards|min:10|numeric',
					'network' => 'required',
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					'number' => 'required|min:10|numeric',
					'network' => 'required',
				];
			}
			default:break;
		}
	}
}
