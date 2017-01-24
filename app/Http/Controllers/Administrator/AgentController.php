<?php

namespace App\Http\Controllers\Administrator;

use App\Agent;
use App\Http\Controllers\Controller;
use App\User;

class AgentController extends Controller
{
	public function index()
	{
		$agents = Agent::paginate(100);
		return view('admin.agent.index', compact('agents'));
	}
	
	public function unblock($id)
	{
		$agent = Agent::findOrFail($id);
		$user = User::findOrFail($agent->user_id);
		$user->block = 1;
		$user->update();
		return redirect()->back();
	}
	
	public function block($id)
	{
		$agent = Agent::findOrFail($id);
		$user = User::findOrFail($agent->user_id);
		$user->block = 0;
		$user->update();
		return redirect()->back();
	}
	
	public function suspend($id)
	{
		$agent = Agent::findOrFail($id);
		$user = User::findOrFail($agent->user_id);
		$user->suspend = 1;
		$user->update();
		return redirect()->back();
	}
	
	public function unsuspend($id)
	{
		$agent = Agent::findOrFail($id);
		$user = User::findOrFail($agent->user_id);
		$user->suspend = 0;
		$user->update();
		return redirect()->back();
	}
}
