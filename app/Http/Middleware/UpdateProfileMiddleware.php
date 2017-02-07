<?php

namespace App\Http\Middleware;

use App\UserBank;
use Closure;
use Illuminate\Support\Facades\Auth;

class UpdateProfileMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
	    $account = UserBank::where('user_id', Auth::user()->id)->first();
	    if (empty($account)) {
		    flash('Update your profile', 'info');
		    return redirect()->guest('dashboard/profile');
	    }
	
	    return $next($request);
    }
}
