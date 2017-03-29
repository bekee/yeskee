<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Requests\OtherSettingRequest;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OtherSettingController extends Controller
{
	public function index()
	{
		$setting = Setting::first();
		
		return view('admin.setting.index', compact('setting'));
	}
	
	public function update($id,OtherSettingRequest $request)
	{
		
		$otherSetting = Setting::first();
		$otherSetting->how_it_works = $request->how_it_works;
		$otherSetting->about_us = $request->about_us;
		$otherSetting->update();
		
		flash("Setting successfully updated", 'success');
		return redirect()->back();
	}
}
