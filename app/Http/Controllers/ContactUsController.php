<?php

namespace App\Http\Controllers;

use App\Contacts;
use App\Http\Requests\ContactRequest;

class ContactUsController extends Controller
{
	public function index()
	{
		return view('ancillary.contact_us');
	}
	
	public function contact(ContactRequest $request)
	{
		
		$contactMessage = new Contacts();
		$contactMessage->name = $request->name;
		$contactMessage->email = $request->email;
		$contactMessage->subject = $request->subject;
		$contactMessage->comment = $request->comment;
		$contactMessage->save();
		flash('Message Sent', 'success');
		
		return redirect()->back();
	}
}