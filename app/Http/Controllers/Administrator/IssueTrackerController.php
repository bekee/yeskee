<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\IssueTrackerRequest;
use App\IssueHeader;
use App\LevelMessage;

class IssueTrackerController extends Controller
{
	public function index()
	{
		$issueHeaders = IssueHeader::orderBy('created_at', 'desc')->paginate(100);
		
		return view('admin.issue.index', compact('issueHeaders'));
	}
	
	public function readIssue($issueHeader)
	{
		$Header = IssueHeader::findOrFail($issueHeader);
		$messages = LevelMessage::where('issue_header_id', $Header->id)->get();
		return view('admin.issue.issue', compact('messages', 'Header'));
	}
	
	public function reply(IssueTrackerRequest $request)
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
		$message->receiver_id = auth()->user()->id;
		//$message->receiver_id = User::first()->id;
		$message->save();
		
		return redirect()->back();
	}
}
