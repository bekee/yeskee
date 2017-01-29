<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IssueTrackerRequest extends FormRequest
{
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
					'message' => 'required|min:2',
					'tracker' => 'required|numeric',
				];
			}
			case 'PUT':
			case 'PATCH': {
				return [
				
				];
			}
			default:
				break;
		}
	}
}
