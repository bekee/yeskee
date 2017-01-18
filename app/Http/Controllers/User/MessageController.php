<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Message;

class MessageController extends Controller
{
	public function index()
	{
		$messages = Message::paginate();
		
		return view('user.message', compact('messages'));
	}
	
	public function readMessage($id)
	{
		$message = Message::findOrFail($id);
		
		return view('user.read', compact('message'));
	}
}
