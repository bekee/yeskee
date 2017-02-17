<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\LevelStatus;
use App\MyWallet;
use App\UserLevel;


class LevelActivityController extends Controller
{
	public function unassigned()
	{
		$downlines = UserLevel::where('status', 'pending')->paginate(100);
		return view('admin.downline.unassigned', compact('downlines'));
	}
	
	public function processing()
	{
		$downlines = UserLevel::where('status', 'processing')->paginate(100);
		return view('admin.downline.processing', compact('downlines'));
	}
	
	public function progress()
	{
		/*	$downlines = UserLevel::join('level_statuses', 'level_statuses.user_level_id', '=', 'user_levels.id')
				->where('status', 'progress')->where('left_leg',null)->whereIn('right_leg',null)
				->orderby('user_levels.created_at', 'desc')->paginate(100);
		*/
		$downlines = UserLevel::where('status', 'progress')->orderby('created_at', 'desc')->paginate(100);
		
		return view('admin.downline.progress', compact('downlines'));
	}
	
	public function completed()
	{
		$downlines = UserLevel::where('status', 'completed')->orderby('created_at', 'desc')->paginate(100);
		return view('admin.downline.completed', compact('downlines'));
	}
	
	public function pullToAssign($user_level_id)
	{
		$userLevel = UserLevel::findOrFail($user_level_id);
		$user_id = $userLevel->user_id;
		$downlines = UserLevel::where('status', 'processing')->where('level_id', $userLevel->level->id)->paginate(100);
		return view('admin.downline.pull', compact('downlines', 'user_level_id', 'user_id'));
	}
	
	public function assignToRoot($user_level_id)
	{
		$userLevel = UserLevel::findOrFail($user_level_id);
		$userLevel->status = 'processing';
		$userLevel->update();
		flash('Client ' . $userLevel->user->user->first_name . ' ' . $userLevel->user->user->last_name . ' for level ' . $userLevel->level->name . ' is currently in processing state', 'success');
		return redirect('admin/processing_downlines');
	}
	
	public function assignToLeft($user_id, $user_level_id, $child)
	{
		$userLevel = UserLevel::findOrFail($user_level_id);
		$userLevelChild = UserLevel::findOrFail($child);
		
		if ($user_id == $userLevel->user_id) {
			flash("You cannot assign yourself to yourself", 'danger');
			return redirect()->back();
		}
		$levelStatus = LevelStatus::where('user_level_id', $userLevel->id)->first();
		//return ($userLevel);
		if (empty($levelStatus->left_leg)) {
			$levelStatus->left_leg = $user_id;
			$levelStatus->update();
			
			//pull the child and add parent
			$userStatusChild = LevelStatus::where('user_level_id', $child)->first();
			$userStatusChild->level_status_id = $levelStatus->id;
			$userStatusChild->update();
			$userLevelChild->status = 'processing';
			$userLevelChild->update();
			
			$this->myPay($userLevel);
			$this->payAndUpdateParentLeg($levelStatus, $user_id);
		} else {
			flash('User cannot be assigned to this leg as it is currently in use', 'danger');
			return redirect('admin/processing_downlines');
		}
		if (!empty($levelStatus->left_leg) && (!empty($levelStatus->right_leg))) {
			$userLevel->status = 'progress';
			$userLevel->update();
			flash('Client ' . $userLevel->user->user->first_name . ' ' . $userLevel->user->user->last_name . ' for level ' . $userLevel->level->name . ' is currently in progress state', 'success');
			return redirect('admin/assigned_downlines');
		}
		flash('Client ' . $userLevel->user->user->first_name . ' ' . $userLevel->user->user->last_name . ' for level ' . $userLevel->level->name . ' is currently in processing state', 'success');
		return redirect('admin/processing_downlines');
	}
	
	public function assignToRight($user_id, $user_level_id, $child)
	{
		$userLevel = UserLevel::findOrFail($user_level_id);
		$userLevelChild = UserLevel::findOrFail($child);
		
		if ($user_id == $userLevel->user_id) {
			flash("You cannot assign yourself to yourself", 'danger');
			return redirect()->back();
		}
		$levelStatus = LevelStatus::where('user_level_id', $userLevel->id)->first();
		//return ($levelStatus);
		if (empty($levelStatus->right_leg)) {
			$levelStatus->right_leg = $user_id;
			$levelStatus->update();
			
			//pull the child and add parent
			$userStatusChild = LevelStatus::where('user_level_id', $child)->first();
			$userStatusChild->level_status_id = $levelStatus->id;
			$userStatusChild->update();
			$userLevelChild->status = 'processing';
			$userLevelChild->update();
			
			$this->myPay($userLevel);
			$this->payAndUpdateParentLeg($levelStatus, $user_id);
		} else {
			flash('User cannot be assigned to this leg as it is currently in use', 'danger');
			return redirect('admin/processing_downlines');
		}
		
		if (!empty($levelStatus->left_leg) && (!empty($levelStatus->right_leg))) {
			$userLevel->status = 'progress';
			$userLevel->update();
			flash('Client ' . $userLevel->user->user->first_name . ' ' . $userLevel->user->user->last_name . ' for level ' . $userLevel->level->name . ' is currently in progress state', 'success');
			return redirect('admin/assigned_downlines');
		}
		flash('Client ' . $userLevel->user->user->first_name . ' ' . $userLevel->user->user->last_name . ' for level ' . $userLevel->level->name . ' is currently in processing state', 'success');
		return redirect('admin/processing_downlines');
	}
	
	private function myPay(UserLevel $userLevel_parent)
	{
		
		$wallet = new MyWallet();
		
		$wallet->amount = round($userLevel_parent->level->amount * .33333);
		$wallet->user_id = $userLevel_parent->user_id;
		$wallet->purpose = "Payment for level " . $userLevel_parent->level->name;
		$wallet->save();
	}
	
	private function payAndUpdateParentLeg(LevelStatus $levelStatus, $user_id)
	{
		if (!empty($levelStatus->level_status_id)) {
			$parent = LevelStatus::find($levelStatus->level_status_id);
			if (empty($parent->left_leg1)) {
				$parent->left_leg1 = $user_id;
				$this->myPay($parent->UserLevel->user_id);
			} elseif (empty($parent->left_leg2)) {
				$parent->left_leg2 = $user_id;
				$this->myPay($parent->UserLevel->user_id);
			} elseif (empty($parent->right_leg1)) {
				$parent->right_leg1 = $user_id;
				$this->myPay($parent->UserLevel->user_id);
			} else {
				$parent->right_leg2 = $user_id;
				$this->myPay($parent->UserLevel->user_id);
			}
			$parent->update();
			if (!empty($parent->left_leg1) && !empty($parent->left_leg2) && !empty($parent->right_leg1) && !empty($parent->right_leg2)) {
				$userLevel = UserLevel::find($parent->UserLevel->id);
				$userLevel->status = 'completed';
				$userLevel->update();
			}
			
			
		}
	}
}
