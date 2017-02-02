<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\WithdrawalRequest;
use App\MyWithdrawal;

class WithdrawalController extends Controller
{
	public function withdrawal()
	{
		$withdrawals = MyWithdrawal::where('user_id', auth()->user()->id)->orderby('created_at', 'desc')->paginate(100);
		return view('user.withdrawal', compact('withdrawals'));
	}
	
	public function placeOrder(WithdrawalRequest $request)
	{
		if ($request->amount > auth()->user()->mywallet->sum('amount')) {
			flash('You cannot withdraw more than your wallet', 'danger');
			return redirect()->back();
		}
		
		
		$withdrawal = new MyWithdrawal();
		$withdrawal->amount = $request->amount;
		$withdrawal->user_id = auth()->user()->id;
		$withdrawal->response = "Your request for withdrawal of ₦" . $request->amount . " have been received and will be processed within 24hrs, Kindly hold on";
		$withdrawal->save();
		
		flash("Your request for withdrawal of ₦" . $request->amount . "have been received and will be processed within 24hrs, Kindly hold on", 'info');
		return redirect()->back();
	}
}
