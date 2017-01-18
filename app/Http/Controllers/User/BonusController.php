<?php

namespace App\Http\Controllers\User;

use App\Bonus;
use App\Http\Controllers\Controller;

class BonusController extends Controller
{
	public function index()
	{
		$bonuses = Bonus::where('user_id', auth()->user()->id)->paginate(50);
		return view('user.bonus', compact('bonuses'));
	}
}
