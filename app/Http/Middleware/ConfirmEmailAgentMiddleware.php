<?php

namespace App\Http\Middleware;

use App\ConfirmEmail;
use App\Notifications\NewAgent;
use Closure;

class ConfirmEmailAgentMiddleware
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
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
			auth()->user()->notify(new NewAgent($confirmation));
			return redirect()->guest('agent/email_sent');
		} else {
			
			if ($confirmation->confirmed == 1) {
				
				return $next($request);
			} else {
				
				return redirect()->guest('agent/email_not_confirmed');
			}
		}
	}
}
