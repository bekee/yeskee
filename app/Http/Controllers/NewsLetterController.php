<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsLetterRequest;
use App\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
	public function store(NewsLetterRequest $request)
	{
		$email = new NewsLetter();
		$email->email = $request->email;
		$email->save();
		flash('You have successfully subscribed to our newsletter, we will inform you of new services and products');
		return redirect()->back();
	}
}
