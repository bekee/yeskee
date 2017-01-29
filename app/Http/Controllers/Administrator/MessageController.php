<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;
use App\Message;
use App\MyMessageLog;
use App\User;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
	public function index()
	{
		$messages = Message::paginate(50);
		return view('admin.message.index', compact('messages'));
	}
	
	public function edit($id)
	{
		$message = Message::findOrFail($id);
		$messages = Message::paginate(50);
		return view('admin.message.edit', compact('messages', 'message'));
	}
	
	public function save(MessageRequest $request)
	{
		$message = new Message();
		$message->message = $request->message;
		$message->title = $request->title;
		$message->published = $request->published == 'on' ? 1 : 0;
		$message->save();
		
		if ($message->published == 1)
			$this->callMessage($message);
		flash('Message created and posted', 'success');
		return redirect(Auth::user()->route . '/messages');
	}
	
	public function update($id, MessageRequest $request)
	{
		$message = Message::findOrFail($id);
		$message->message = $request->message;
		$message->title = $request->title;
		$message->published = $request->published == 'on' ? 1 : 0;
		$message->save();
		
		if ($message->published == 1)
			$this->callMessage($message);
		flash('Message created and posted', 'success');
		return redirect(Auth::user()->route . '/messages');
	}
	
	private function callMessage($message)
	{
		$users = User::where('route', '!=', 'admin')->get();
		foreach ($users as $user) {
			if ($this->checkUserMessage($message, $user) == false) {
				$this->postMessage($message, $user);
			}
		}
	}
	
	private function checkUserMessage($message, $user)
	{
		$checkMessageTest = MyMessageLog::where('user_id', $user->id)->where('message_id', $message->id)->first();
		if (empty($checkMessageTest))
			return true;
		else
			return false;
	}
	
	private function postMessage($message, $user)
	{
		$message = new MyMessageLog();
		$message->user_id = $user->id;
		$message->message_id = $message->id;
		$message->status = 'unread';
		$message->save();
	}
	
	public function destroy($id)
	{
		$message = Message::findOrFail($id);
		$message->delete();
		flash('Message successfully deleted', 'success');
		return redirect(Auth::user()->route . '/messages');
	}
	
	public function activate($id)
	{
		$message = Message::findOrFail($id);
		$message->published = 1;
		$message->update();
		$this->callMessage($message);
		flash('Message successfully published', 'success');
		return redirect(Auth::user()->route . '/messages');
		
	}
	
	public function deactivate($id)
	{
		$message = Message::findOrFail($id);
		$message->published = 0;
		$message->update();
		$this->callMessage($message);
		flash('Message successfully unpublished', 'success');
		return redirect(Auth::user()->route . '/messages');
		
	}
}
