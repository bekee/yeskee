<?php

namespace App\Http\Controllers\Administrator;

use App\Banks;
use App\Http\Controllers\Controller;
use App\Http\Requests\BankRequest;
use Illuminate\Support\Facades\Auth;

class BankController extends Controller
{
	public function index()
	{
		$banks = Banks::paginate(20);
		return view('admin.bank.index', compact('banks'));
	}
	
	public function edit($id)
	{
		$bank = Banks::findOrFail($id);
		$banks = Banks::paginate(20);
		return view('admin.bank.edit', compact('banks', 'bank'));
	}
	
	public function save(BankRequest $request)
	{
		$bank = new Banks();
		$bank->name = $request->name;
		$bank->save();
		flash($request['name'] . ' successfully save', 'success');
		return redirect(Auth::user()->route . '/bank');
	}
	
	public function update($id, BankRequest $request)
	{
		$bank = Banks::findOrFail($id);
		$bank->name = $request->name;
		$bank->update();
		flash($request['name'] . ' successfully updated', 'success');
		return redirect(Auth::user()->route . '/bank');
	}
	
	public function destroy($id)
	{
		$bank = Banks::findOrFail($id);
		
		if (!empty($bank->client))
			flash($bank->name . ' cannot be deleted', 'danger');
		else {
			flash($bank->name . ' successfully deleted', 'success');
			$bank->delete();
		}
		return redirect()->back();
	}
}
