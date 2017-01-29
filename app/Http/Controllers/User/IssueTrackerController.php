<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\IssueTrackerRequest;
use App\LevelMessage;
use App\User;

class IssueTrackerController extends Controller
{
	public function index($userLevel)
	{
		$messages = LevelMessage::where('user_level_id', $userLevel)->get();
		return view('user.issue', compact('messages', 'userLevel'));
	}
	
	public function send(IssueTrackerRequest $request)
	{
		$message = new LevelMessage();
		$message->comment = $request->message;
		$message->user_level_id = $request->tracker;
		$message->sender_id = auth()->user()->id;
		//$message->receiver_id = User::first()->id;
		$message->save();
		
		return redirect()->back();
	}
}
