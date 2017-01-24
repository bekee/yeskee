<?php

namespace App\Http\Controllers\User;

use App\Bonus;
use App\Http\Controllers\Controller;
use App\Http\Requests\FileUploadRequest;
use App\Level;
use App\LevelStatus;
use App\Payment;
use App\User;
use App\UserBank;
use App\UserLevel;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
	public function index()
	{
		$transactions = UserLevel::where('user_id', Auth::user()->id)->where('status', 'progress')->paginate(20);
		$account = UserBank::where('user_id', Auth::user()->id)->first();
		if (empty($account)) {
			flash('Update your profile', 'danger');
			return redirect('dashboard/profile');
		}
		
		return view('user.index', compact('transactions'));
	}
	
	
	public function level()
	{
		$levels = Level::where('active', 1)->get();
		return view('user.level', compact('levels'));
	}
	
	public function nextAction($id)
	{
		$level = Level::findOrFail($id);
		return view('user.action', compact('level'));
	}
	
	public function saveSelectedLevel(FileUploadRequest $request)
	{
		$path = $request->file('teller')->store(Auth::user()->id, 'teller');
		
		$userLevel = new UserLevel();
		$userLevel->user_id = Auth::user()->id;
		$userLevel->level_id = $request->selected;
		$userLevel->status = 'pending';
		$userLevel->save();
		
		$levelStatus = new LevelStatus();
		$levelStatus->user_level_id = $userLevel->id;
		$levelStatus->save();
		
		$payment = new Payment();
		$payment->user_level_id = $userLevel->id;
		$payment->amount = $userLevel->level->amount;
		$payment->user_id = Auth::user()->id;
		$payment->image = $path;
		$payment->type = $request->payment_type;
		$payment->status = 'pending';
		$payment->save();
		
		$this->myNewUserBonus($userLevel->level_id, $userLevel->id);
		
		flash('Level have successfully been created, Payment will be confirmed within 24 hrs');
		
		return redirect('dashboard/pending_level');
	}
	
	public function pending()
	{
		$transactions = UserLevel::where('user_id', Auth::user()->id)->where('status', 'pending')->paginate(20);
		$account = UserBank::where('user_id', Auth::user()->id)->first();
		if (empty($account)) {
			flash('Update your profile', 'danger');
			return redirect('dashboard/pending_level');
		}
		
		return view('user.pending', compact('transactions'));
	}
	
	public function myTransaction()
	{
		$transactions = UserLevel::where('user_id', Auth::user()->id)->where('status', 'completed')->paginate(20);
		$account = UserBank::where('user_id', Auth::user()->id)->first();
		if (empty($account)) {
			flash('Update your profile', 'danger');
			return redirect('dashboard/profile');
		}
		
		return view('user.transaction', compact('transactions'));
	}
	
	public function active()
	{
		$transactions = UserLevel::where('user_id', Auth::user()->id)->where('status', 'progress')->paginate(20);
		$account = UserBank::where('user_id', Auth::user()->id)->first();
		if (empty($account)) {
			flash('Update your profile', 'danger');
			return redirect('dashboard/profile');
		}
		
		return view('user.active', compact('transactions'));
	}
	
	private function myNewUserBonus($level_id, $userLevelid)
	{
		$level = Level::find($level_id);
		
		if ($level->discounted == true) {
			if (auth()->user()->new_user == true) {
				$bonus = new Bonus();
				$bonus->user_level_id = $userLevelid;
				$bonus->user_id = auth()->user()->id;
				$bonus->amount = round(($level->discount * $level->amount) / 100, 2);
				$bonus->user_type = 'mine';
				$bonus->status = 'unapproved';
				$bonus->purpose = "My first level bonus of " . $bonus->amount . " for level " . $level->name;
				$bonus->save();
				
				//Update user as not new
				$user = User::findOrFail(auth()->user()->id);
				$user->new_user = false;
				$user->update();
				
			}
		}
	}
	
	///To be implemented in the admin section
	private function myReferral($level_id, $userLevelid)
	{
		$level = Level::find($level_id);
		
		
		if (auth()->user()->referral_paid == false) {
			$bonus = new Bonus();
			$bonus->user_level_id = $userLevelid;
			$bonus->user_id = auth()->user()->id;
			$bonus->amount = round(($level->discount * $level->amount) / 100, 2);
			$bonus->user_type = 'referral';
			$bonus->status = 'unapproved';
			$bonus->purpose = "My Referral bonus of " . $bonus->amount . " for level " . $level->name;
			$bonus->save();
			
			//Update user as not new
			$user = User::findOrFail(auth()->user()->id);
			$user->referral_paid = true;
			$user->update();
			
			
		}
	}
}
