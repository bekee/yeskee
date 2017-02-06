<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
	public function index()
	{
		if (Auth::check()) {
			return redirect(Auth::user()->route);
		}
		return view('login');
	}
	
	public function login(Request $request)
	{
		$this->validate($request,
			[
				'email' => 'required',
				'password' => 'required'
			]
		);
	
		//dd(Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'active' => 1], $request['remember']));
		
		if (!Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'active' => 1], $request['remember'])) {
			flash("Invalid Email/Password ", 'danger');
			return redirect()->back()->with(['fail' => 'Login unsuccessful'])->withInput();
		} else {
			if (Auth::user()->route == 'agent') {
				return redirect('agent');
			} elseif (Auth::user()->route == 'dashboard') {
				return redirect('dashboard');
			} elseif (Auth::user()->route == 'admin') {
				return redirect('admin');
			} else {
				flash("Invalid Email/Password ", 'danger');
				Auth::logout();
				return redirect('login')->with(['fail' => 'Login unsuccessful'])->withInput();
			}
		}
	}
	
	public function destroy()
	{
		Auth::logout();
		return redirect('/');
	}
}
