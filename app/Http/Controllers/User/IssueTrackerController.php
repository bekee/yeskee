<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\IssueTrackerRequest;
use App\IssueHeader;
use App\LevelMessage;

class IssueTrackerController extends Controller
{
	public function index($userLevel)
	{
		$messages = LevelMessage::where('user_level_id', $userLevel)->get();
		return view('user.issue', compact('messages', 'userLevel'));
	}
	
	public function send(IssueTrackerRequest $request)
	{
		$issueHeader = IssueHeader::where('user_level_id', $request->tracker)->first();
		if (empty($issueHeader)) {
			$issueHeader = new IssueHeader();
			$issueHeader->user_level_id = $request->tracker;
			$issueHeader->save();
		}
		
		
		$message = new LevelMessage();
		$message->comment = $request->message;
		$message->issue_header_id = $issueHeader->id;
		$message->user_level_id = $request->tracker;
		$message->sender_id = auth()->user()->id;
		//$message->receiver_id = User::first()->id;
		$message->save();
		
		return redirect()->back();
	}
}
