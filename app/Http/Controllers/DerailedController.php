<?php

namespace App\Http\Controllers;

class DerailedController extends Controller
{
	public function suspend()
	{
		return view('derailed.suspend');
	}
	
	public function blocked()
	{
		return view('derailed.blocked');
	}
	public function approved()
	{
		return view('derailed.blocked');
	}
}
