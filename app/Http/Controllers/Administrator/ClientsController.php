<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\User;

class ClientsController extends Controller
{
	public function unapproved()
	{
		$clients = User::where('route', 'dashboard')->where('approved', 0)->paginate(100);
		return view('admin.clients.unapproved', compact('clients'));
	}
	
	public function active()
	{
		$clients = User::where('route', 'dashboard')->where('approved', 1)->where('blocked', 0)->where('suspend', 0)->paginate(100);
		return view('admin.clients.approved', compact('clients'));
	}
	
	public function suspended()
	{
		$clients = User::where('route', 'dashboard')->where('suspend', 1)->paginate(100);
		return view('admin.clients.suspended', compact('clients'));
	}
	
	public function blocked()
	{
		$clients = User::where('route', 'dashboard')->where('blocked', 1)->paginate(100);
		return view('admin.clients.blocked', compact('clients'));
	}
	
	public function approveClient($id)
	{
		$clients = User::findOrFail($id);
		$clients->approved = 1;
		$clients->update();
		return redirect()->back();
	}
	
	public function block($id)
	{
		$clients = User::findOrFail($id);
		$clients->blocked = 1;
		$clients->update();
		return redirect()->back();
	}
	public function unblock($id)
	{
		$clients = User::findOrFail($id);
		$clients->blocked = 0;
		$clients->update();
		return redirect()->back();
	}
	
	public function suspend($id)
	{
		$clients = User::findOrFail($id);
		$clients->suspend = 1;
		$clients->update();
		return redirect()->back();
	}
	
	public function unsuspend($id)
	{
		$clients = User::findOrFail($id);
		$clients->suspend = 0;
		$clients->update();
		return redirect()->back();
	}
	
	public function unassigned(){
		
	}
}
