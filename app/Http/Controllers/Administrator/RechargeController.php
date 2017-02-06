<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\RechargeCardRequest;
use App\Notifications\NewUser;
use App\RechargeCard;

class RechargeController extends Controller
{
	public function index()
	{
		
		$cards = RechargeCard::paginate(100);
		return view('admin.card.index', compact('cards'));
	}
	
	public function edit($id)
	{
		$card = RechargeCard::findOrFail($id);
		$cards = RechargeCard::paginate(100);
		return view('admin.card.edit', compact('cards', 'card'));
	}
	
	public function save(RechargeCardRequest $request)
	{
		$card = new RechargeCard();
		$card->number = $request->number;
		$card->network = $request->network;
		$card->message = $request->message;
		$card->active = empty($request->active == "on") ? 0 : 1;
		$card->save();
		flash('Recharge card ' . $card->number . ' for ' . $card->network . ' network successfully created', 'success');
		return redirect('admin/recharge_cards');
	}
	
	public function update($id, RechargeCardRequest $request)
	{
		$card = RechargeCard::findOrFail($id);
		$card->number = $request->number;
		$card->message = $request->message;
		$card->network = $request->network;
		$card->active = empty($request->active == "on") ? 0 : 1;
		$card->used = empty($request->used == "on") ? 0 : 1;
		$card->update();
		flash('Recharge card ' . $card->number . ' for ' . $card->network . ' network successfully updated', 'success');
		return redirect('admin/recharge_cards');
	}
	
	public function deactivate($id)
	{
		
		$card = RechargeCard::findOrFail($id);
		$card->active = 0;
		$card->update();
		flash('Recharge card ' . $card->number . ' for ' . $card->network . ' network successfully unpublished', 'success');
		return redirect()->back();
	}
	
	public function activate($id)
	{
		$card = RechargeCard::findOrFail($id);
		$card->active = 1;
		$card->update();
		flash('Recharge card ' . $card->number . ' for ' . $card->network . ' network successfully published', 'success');
		return redirect()->back();
	}
	
	public function destroy($id)
	{
		$card = RechargeCard::findOrFail($id);
		flash('Recharge card ' . $card->number . ' for ' . $card->network . ' network successfully deleted', 'success');
		$card->delete();
		return redirect()->back();
	}
}
