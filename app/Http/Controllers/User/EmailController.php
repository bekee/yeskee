<?php

namespace App\Http\Controllers\User;

use App\ConfirmEmail;
use App\Http\Controllers\Controller;
use App\Notifications\NewUser;
use App\User;

class EmailController extends Controller
{
	public function emailSent()
	{
		return view('confirmation.email_sent');
	}
	
	public function notConfirmed()
	{
		return view('confirmation.email_not_confirmed');
	}
	
	public function resend()
	{
		$id = auth()->user()->id;
		$confirmation = ConfirmEmail::where('user_id', $id)->first();
		
		if (empty($confirmation)) {
			$key = \Config::get('app.key');
			$confirmation_code = hash_hmac('sha256', str_random(40), $key);
			
			$confirmation = new ConfirmEmail();
			$confirmation->user_id = auth()->user()->id;
			$confirmation->confirmation_code = $confirmation_code;
			$confirmation->save();
		}
		
		auth()->user()->notify(new NewUser($confirmation));
		return redirect('dashboard/email_sent');
	}
	
	public function confirm($code)
	{
		$confirmation = ConfirmEmail::where('confirmation_code', $code)->first();
		
		if (auth()->user()->id == $confirmation->user->id) {
			if (!empty($confirmation)) {
				$confirmation->confirmed = 1;
				$confirmation->update();
				$user = User::find(auth()->user()->id);
				$user->email_confirm = 1;
				$user->save();
				flash('You have successfully confirmed your email', 'success');
				return redirect('dashboard');
			}
		}
		flash('We were unable to confirm your email', 'danger');
		return redirect('dashboard/email_not_confirmed');
	}
}
