<?php

namespace App\Http\Controllers\User;

use App\Banks;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewUserRequest;
use App\UserBank;
use App\UserDetail;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
	public function profile()
	{
		$banks = Banks::pluck('name', 'id');
		$profile = UserDetail::where('user_id', Auth::user()->id)->first();
		return view('user.profile', compact('profile', 'banks'));
	}
	
	public function update($id, NewUserRequest $request)
	{
		$userDetail = UserDetail::where('user_id', Auth::user()->id)->first();
		$userDetail->other_name = $request->other_name;
		$userDetail->save();
		
		$bank = new UserBank();
		$bank->bank_id = $request->bank_id;
		$bank->user_id = Auth::user()->id;
		$bank->acc_name = $request->acc_name;
		$bank->acc_number = $request->acc_number;
		$bank->save();
		
		flash('Account Successfully updated', 'success');
		redirect('dashboard');
	}
}
