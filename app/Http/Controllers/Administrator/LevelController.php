<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\LevelRequest;
use App\Level;

class LevelController extends Controller
{
	public function index()
	{
		$active_levels = Level::where('active', 1)->orderby('amount','asc')->get();
		$inactive_levels = Level::where('active', 0)->orderby('amount','asc')->get();
		return view('admin.level.index', compact('active_levels', 'inactive_levels'));
	}
	
	public function edit($id)
	{
		$level = Level::findOrFail($id);
		return view('admin.level.edit', compact('level'));
	}
	
	public function newLevel()
	{
		
		return view('admin.level.new');
	}
	
	public function save(LevelRequest $request)
	{
		$level = new Level();
		$level->name = $request->name;
		$level->amount = $request->amount;
		$level->active = $request->active == 'on' ? 1 : 0;
		$level->discounted = $request->discounted == 'on' ? 1 : 0;
		if ($request->discounted == 'on') {
			$request->discounted = 'on' ? 1 : 0;
			$level->discount = $request->discount;
			$level->set_users = $request->set_users;
		}
		if ($request->referral == 'on') {
			$request->referral = 'on' ? 1 : 0;
			$level->referred_discount = $request->referred_discount;
		}
		$level->save();
		flash('Level ' . $level->name . ' successfully created', 'success');
		return redirect('admin/levels');
	}
	
	public function update($id, LevelRequest $request)
	{
		
		$level = Level::findOrFail($id);
		$level->name = $request->name;
		$level->amount = $request->amount;
		$level->active = $request->active == 'on' ? 1 : 0;
		$level->discounted = $request->discounted == 'on' ? 1 : 0;
		if ($request->discounted == 'on') {
			$level->discounted = $request->discounted == 'on' ? 1 : 0;
			$level->discount = $request->discount;
			$level->set_users = $request->set_users;
		}
		if ($request->referral == 'on') {
			$level->referral = $request->referral == 'on' ? 1 : 0;
			$level->referred_discount = $request->referred_discount;
		}
		$level->update();
		flash('Level ' . $level->name . ' successfully updated', 'success');
		return redirect('admin/levels');
	}
	
	public function destroy($id)
	{
		$level = Level::findOrFail($id);
		
		if (empty($level->userLevel)) {
			flash('Level ' . $level->name . ' successfully deleted', 'success');
			$level->delete();
		}
		flash('Level ' . $level->name . ' is currently in use', 'danger');
		return redirect('admin/levels');
	}
}
