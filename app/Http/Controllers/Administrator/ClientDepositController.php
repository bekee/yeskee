<?php

namespace App\Http\Controllers\Administrator;

use App\Bonus;
use App\Http\Controllers\Controller;
use App\Payment;
use App\User;
use App\UserLevel;

class ClientDepositController extends Controller
{
	public function deposits()
	{
		$deposits = Payment::where('status', 'pending')->orderby('created_at', 'desc')->paginate(100);
		return view('admin.payments.deposit', compact('deposits'));
	}
	
	public function approved()
	{
		$approved = Payment::where('status', 'paid')->paginate(100);
		return view('admin.payments.approved', compact('approved'));
	}
	
	public function cancelled()
	{
		$cancelled = Payment::where('status', 'cancelled')->paginate(100);
		return view('admin.payments.cancelled', compact('cancelled'));
	}
	
	public function details($id)
	{
		$payment = Payment::findOrFail($id);
		return view('admin.payments.detail', compact('payment'));
	}
	
	
	public function approve($id)
	{
		$payment = Payment::findOrFail($id);
		$payment->status = 'paid';
		$payment->update();
		
		$userLevel = UserLevel::find($payment->user_level_id);
		$userLevel->status = 'processing';
		$userLevel->update();
		
		$this->myReferral($payment->user_id, $userLevel->id);
		
		return redirect('admin/approved_payment');
	}
	
	public function reject($id)
	{
		$payment = Payment::findOrFail($id);
		$payment->status = 'cancelled';
		$payment->update();
		return redirect('admin/client_deposits');
	}
	
	///To be implemented in the admin section
	private function myReferral($user_id, $userLevelid)
	{
		$user = User::find($user_id);
		$user_level = UserLevel::find($userLevelid);
		$level = $user_level->level;
		
		
		if ($user->referral_paid == false) {
			if (!empty($user->referredBy->referred)) {
				$bonus = new Bonus();
				$bonus->user_level_id = $userLevelid;
				$bonus->user_id = $user->referredBy->referred;
				$bonus->amount = round(($level->discount * $level->amount) / 100, 2);
				$bonus->user_type = 'referral';
				$bonus->status = 'unapproved';
				$bonus->purpose = "My Referral bonus of " . $bonus->amount . " for level " . $level->name;
				$bonus->save();
				
				//Update user as not new
				$user->referral_paid = true;
				$user->update();
				
			}
		}
	}
}
