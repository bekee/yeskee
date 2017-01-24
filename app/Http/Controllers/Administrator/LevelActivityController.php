<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\UserLevel;

class LevelActivityController extends Controller
{
	public function unassigned()
	{
		
		return view();
	}
	
	public function progress()
	{
		$downlines = UserLevel::where('status', 'progress')->paginate(100);
		return view('admin.downline.progress', compact('downlines'));
	}
	
	public function completed()
	{
		$downlines = UserLevel::where('status', 'completed')->paginate(100);
		return view('admin.downline.completed', compact('downlines'));
	}
}
