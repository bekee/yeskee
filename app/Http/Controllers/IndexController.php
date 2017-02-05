<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Http\Requests\NewUserReferralRequest;
use App\Http\Requests\NewUserRequest;
use App\RechargeCard;
use App\Role;
use App\User;
use App\UserDetail;
use App\UserReferer;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
	public function index()
	{
		$recharge = RechargeCard::where('active', 1)->where('used', 0)->orderby('created_at', 'desc')->first();
		return view('index2', compact('recharge'));
	}
	
	public function signup()
	{
		return view('signup');
	}
	
	public function Showreferral($code)
	{
		$userDetail = UserDetail::where('code', $code)->first();
		$user_id = $userDetail->user_id;
		
		return view('referral', compact('user_id'));
	}
	
	public function ShowreferralAgent($code)
	{
		$userDetail = Agent::where('code', $code)->first();
		$user_id = $userDetail->user_id;
		
		return view('agent', compact('user_id'));
	}
	
	public function store(NewUserRequest $request)
	{
		$code = $this->checkCode();
		$user = new User();
		$user->email = $request->email;
		$user->active = 1;
		$user->route = 'dashboard';
		$user->password = bcrypt($request->password);
		$user->save();
		
		$role = Role::where('name', 'user')->first();
		$user->attachRole($role);
		
		$userDetail = new UserDetail();
		$userDetail->first_name = $request->first_name;
		$userDetail->last_name = $request->last_name;
		$userDetail->sex = $request->sex;
		$userDetail->phone = $request->mobile;
		$userDetail->hear_us = $request->hear_about_us;
		$userDetail->user_id = $user->id;
		$userDetail->code = $code;
		$userDetail->url = url('/') . "/account/$code";
		$userDetail->save();
		
		$referral = new UserReferer();
		$referral->user_id = $user->id;
		$referral->user_type = 'normal';
		$referral->save();
		
		Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'active' => 1], 1);
		
		return redirect('dashboard');
		
	}
	
	public function referral(NewUserReferralRequest $request)
	{
		
		$code = $this->checkCode();
		$user = new User();
		$user->email = $request->email;
		$user->active = 1;
		$user->route = 'dashboard';
		$user->password = bcrypt($request->password);
		$user->save();
		
		$role = Role::where('name', 'user')->first();
		$user->attachRole($role);
		
		$userDetail = new UserDetail();
		$userDetail->first_name = $request->first_name;
		$userDetail->last_name = $request->last_name;
		$userDetail->sex = $request->sex;
		$userDetail->phone = $request->mobile;
		$userDetail->hear_us = $request->hear_about_us;
		$userDetail->user_id = $user->id;
		$userDetail->code = $code;
		$userDetail->url = env('APP_URL') . "/account/$code";
		$userDetail->save();
		
		
		$referral = new UserReferer();
		$referral->user_id = $user->id;
		$referral->user_type = 'user';
		$referral->referred = $request->code;
		$referral->save();
		
		
		Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'active' => 1], 1);
		
		return redirect('dashboard');
		
	}
	
	public function referralAgent(NewUserReferralRequest $request)
	{
		
		$code = $this->checkCode();
		$user = new User();
		$user->email = $request->email;
		$user->active = 1;
		$user->route = 'dashboard';
		$user->password = bcrypt($request->password);
		$user->save();
		
		$role = Role::where('name', 'user')->first();
		$user->attachRole($role);
		
		$userDetail = new UserDetail();
		$userDetail->first_name = $request->first_name;
		$userDetail->last_name = $request->last_name;
		$userDetail->sex = $request->sex;
		$userDetail->phone = $request->mobile;
		$userDetail->hear_us = $request->hear_about_us;
		$userDetail->user_id = $user->id;
		$userDetail->code = $code;
		$userDetail->url = env('APP_URL') . "/account/$code";
		$userDetail->save();
		
		
		$referral = new UserReferer();
		$referral->user_id = $user->id;
		$referral->user_type = 'agent';
		$referral->agent_id = $request->code;
		$referral->save();
		
		
		Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'active' => 1], 1);
		
		return redirect('dashboard');
		
	}
	
	
	private function checkCode($length = 15)
	{
		$code = str_random($length);
		$userDetail = UserDetail::where('code', $code)->first();
		if (empty($userDetail))
			return $code;
		else
			$this->checkCode();
	}
}

