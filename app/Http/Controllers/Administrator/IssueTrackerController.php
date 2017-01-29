<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\LevelMessage;

class IssueTrackerController extends Controller
{
	public function index()
	{
		$messages = LevelMessage::paginate(100)->groupBy('user_level_id');
		return $messages;
		return view('admin.issue');
	}
}
