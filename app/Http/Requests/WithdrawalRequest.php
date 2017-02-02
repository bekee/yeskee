<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WithdrawalRequest extends FormRequest
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
					'amount' => 'required|numeric',
				];
			}
			case 'PUT':
			case 'PATCH': {
				return [
					'amount' => 'required|numeric',
				];
			}
			default:
				break;
		}
	}
}
