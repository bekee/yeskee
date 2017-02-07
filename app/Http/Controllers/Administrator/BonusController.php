<?php

namespace App\Http\Controllers\Administrator;

use App\Bonus;
use App\Http\Controllers\Controller;
use App\MyWallet;

class BonusController extends Controller
{
	public function pending()
	{
		$bonuses = Bonus::where("status", 'unapproved')->paginate(100);
		return view('admin.bonus.pending', compact('bonuses'));
	}
	
	public function approvedd()
	{
		$bonuses = Bonus::where("status", 'approved')->paginate(100);
		return view('admin.bonus.approved', compact('bonuses'));
		
		//return "Hello world";
	}
	
	public function cancelled()
	{
		$bonuses = Bonus::where("status", 'cancelled')->paginate(100);
		return view('admin.bonus.cancelled', compact('bonuses'));
	}
	
	public function approve($id)
	{
		$bonus = Bonus::findOrFail($id);
		$bonus->status = 'approved';
		$bonus->update();
		
		
		$wallet = new MyWallet();
		
		$wallet->amount = $bonus->amount;
		$wallet->user_id = $bonus->user_id;
		
		
		if ($bonus->user_type == 'referral' || $bonus->user_type == 'mine') {
			$wallet->purpose = 'Bonus approved for ' . $bonus->user->user->first_name . ' ' . $bonus->user->user->last_name . ' for Level ' . $bonus->userLevel->level->name;
			flash('Bonus of ₦' . $bonus->amount . ' have been approved for ' . $bonus->user->user->first_name . ' ' . $bonus->user->user->last_name . ' for Level ' . $bonus->userLevel->level->name, 'success');
		} else {
			$wallet->purpose = 'approved for ' . $bonus->user->agent->first_name . ' ' . $bonus->user->agent->last_name . ' for Level ' . $bonus->userLevel->level->name;
			flash('Bonus of ₦' . $bonus->amount . ' have been approved for ' . $bonus->user->agent->first_name . ' ' . $bonus->user->agent->last_name . ' for Level ' . $bonus->userLevel->level->name, 'success');
		}
		$wallet->save();
		return redirect('admin/bonus_approved');
	}
	
	public function cancel($id)
	{
		$bonus = Bonus::findOrFail($id);
		$bonus->status = 'cancelled';
		$bonus->update();
		if ($bonus->user_type == 'referral' || $bonus->user_type == 'mine')
			flash('Bonus of ₦' . $bonus->amount . ' have been cancelled for ' . $bonus->user->user->first_name . ' ' . $bonus->user->user->last_name . ' for Level ' . $bonus->userLevel->level->name, 'danger');
		else
			flash('Bonus of ₦' . $bonus->amount . ' have been cancelled for ' . $bonus->user->agent->first_name . ' ' . $bonus->user->agent->last_name . ' for Level ' . $bonus->userLevel->level->name, 'danger');
		return redirect('admin/cancelled_bonuses');
	}
}
