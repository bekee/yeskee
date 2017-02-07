<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\UserReferer;

class MyReferralsController extends Controller
{
	public function index()
	{
		$referrals = UserReferer::where('referred', auth()->user()->id)->paginate(50);
		return view('user.referrals', compact('referrals'));
	}
}
