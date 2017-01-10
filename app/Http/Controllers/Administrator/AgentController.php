<?php

namespace App\Http\Controllers\Administrator;

use App\Agent;
use App\Http\Controllers\Controller;

class AgentController extends Controller
{
	public function index()
	{
		$agents = Agent::paginate(100);
		return view('admin.agent.index', compact('agents'));
	}
}
