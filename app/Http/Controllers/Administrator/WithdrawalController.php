<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\WithdrawalAdminRequest;
use App\MyWallet;
use App\MyWithdrawal;

class WithdrawalController extends Controller
{
	public function pending()
	{
		$withdrawals = MyWithdrawal::where('status', 'pending')->orderby('created_at', 'asc')->paginate(200);
		return view('admin.withdrawal.pending', compact('withdrawals'));
		
	}
	
	public function cancelled()
	{
		$withdrawals = MyWithdrawal::where('status', 'cancelled')->orderby('created_at', 'desc')->paginate(200);
		return view('admin.withdrawal.cancelled', compact('withdrawals'));
		
	}
	
	public function approved()
	{
		$withdrawals = MyWithdrawal::where('status', 'approved')->orderby('created_at', 'desc')->paginate(200);
		return view('admin.withdrawal.approved', compact('withdrawals'));
		
	}
	
	public function pay($payId)
	{
		$withdrawal = MyWithdrawal::findOrFail($payId);
		return view('admin.withdrawal.pay', compact('withdrawal'));
	}
	public function cancel($payId)
	{
		$withdrawal = MyWithdrawal::findOrFail($payId);
		return view('admin.withdrawal.cancel', compact('withdrawal'));
	}
	
	public function payNow($payId, WithdrawalAdminRequest $request)
	{
		$withdrawal = MyWithdrawal::findOrFail($payId);
		$withdrawal->response = $request->comment;
		$withdrawal->status = 'approved';
		$withdrawal->update();
		
		$wallet = new MyWallet();
		$wallet->amount = round($withdrawal->amount * (-1));
		$wallet->user_id = $withdrawal->user_id;
		$wallet->purpose = $withdrawal->response;
		$wallet->save();
		
		flash("Payment have successfully been made", 'success');
		return redirect('admin/withdrawal_pending');
	}
	
	public function cancelNow($payId, WithdrawalAdminRequest $request)
	{
		$withdrawal = MyWithdrawal::findOrFail($payId);
		$withdrawal->response = $request->comment;
		$withdrawal->status = 'cancelled';
		$withdrawal->update();
		
		flash("Payment was unable to complete", 'danger');
		return redirect('admin/withdrawal_cancelled');
	}
	
	
}
