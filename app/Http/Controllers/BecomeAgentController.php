<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Http\Requests\AgentRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BecomeAgentController extends Controller
{
 public function index(){
 	return view('ancillary.become_an_agent');
 }
	
	public function store(AgentRequest $request)
	{
		$code = $this->checkCode();
		$user = new User();
		$user->email = $request->email;
		$user->active = 1;
		$user->route = 'agent';
		$user->password = bcrypt($request->password);
		$user->save();
		
		$role = Role::where('name','agent')->first();
		$user->attachRole($role);
		
		$userDetail = new Agent();
		$userDetail->first_name = $request->first_name;
		$userDetail->last_name = $request->last_name;
		$userDetail->phone = $request->mobile;
		$userDetail->why_agent = $request->why_agent;
		$userDetail->user_id = $user->id;
		$userDetail->code = $code;
		$userDetail->url = env('APP_URL') . "/myaccount/$code";
		$userDetail->save();
		
		
		Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'active' => 1], 1);
		
		return redirect('agent');
		
	}
	private function checkCode($length = 15)
	{
		$code = str_random($length);
		$userDetail = Agent::where('code', $code)->first();
		if (empty($userDetail))
			return $code;
		else
			$this->checkCode();
	}
}
