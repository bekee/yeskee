<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\IssueHeader;

class IssueTrackerController extends Controller
{
	public function index()
	{
		$issueHeaders = IssueHeader::orderBy('created_at', 'desc')->paginate(100);
		
		return view('admin.issue.index', compact('issueHeaders'));
	}
}
