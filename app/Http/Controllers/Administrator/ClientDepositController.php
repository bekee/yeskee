<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Payment;
use App\UserLevel;

class ClientDepositController extends Controller
{
	public function deposits()
	{
		$deposits = Payment::where('status', 'pending')->paginate(100);
		return view('admin.payments.deposit', compact('deposits'));
	}
	
	public function approved()
	{
		$approved = Payment::where('status', 'paid')->paginate(100);
		return view('admin.payments.approved', compact('approved'));
	}
	
	public function cancelled()
	{
		$cancelled = Payment::where('status', 'cancelled')->paginate(100);
		return view('admin.payments.cancelled', compact('cancelled'));
	}
	
	public function details($id)
	{
		$payment = Payment::findOrFail($id);
		return view('admin.payments.detail', compact('payment'));
	}
	
	
	public function approve($id)
	{
		$payment = Payment::findOrFail($id);
		$payment->status = 'paid';
		$payment->update();
		
		$userLevel = UserLevel::find();
		$userLevel->status = 'progress';
		$userLevel->update();
		
		
		return redirect('/');
	}
	
	public function reject($id)
	{
		$payment = Payment::findOrFail($id);
		$payment->status = 'cancelled';
		$payment->update('admin/client_deposits');
	}
}
