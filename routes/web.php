<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', ['uses' => 'IndexController@index']);
Route::get('signup', ['uses' => 'IndexController@signup']);
Route::post('signup', ['uses' => 'IndexController@store']);
Route::get('login', ['uses' => 'LoginController@index']);
Route::post('login', ['uses' => 'LoginController@login']);

//Contact Us Message
Route::post('contact_us', ['uses' => 'ContactUsController@contact']);

//newsletter
Route::post('newsletter', ['uses' => 'NewsLetterController@store']);

//agent
Route::post('new_agent', ['uses' => 'BecomeAgentController@store']);

//ancillary
Route::get('about', ['uses' => 'AboutUsController@index']);
Route::get('how_it_works', ['uses' => 'HowItWorksController@index']);
Route::get('contact', ['uses' => 'ContactUsController@index']);
Route::get('become_an_agent', ['uses' => 'BecomeAgentController@index']);

Route::group(['middleware' => 'auth'], function () {
	Route::get('logout', ['uses' => 'LoginController@destroy']);
	
	
	Route::group(['namespace' => 'Administrator', 'middleware' => ['role:admin'], 'prefix' => 'admin'], function () {
		Route::get('/', ['uses' => 'AdminController@index']);
		
		//Bank
		Route::get('banks', ['uses' => 'BankController@index']);
		Route::get('bank/{id}/edit', ['uses' => 'BankController@edit']);
		Route::get('r_bank/{id}', ['uses' => 'BankController@destroy']);
		Route::patch('bank/{id}', ['uses' => 'BankController@update']);
		Route::post('bank', ['uses' => 'BankController@save']);
		
		//Cards
		Route::get('recharge_cards', ['uses' => 'RechargeController@index']);
		Route::get('recharge_card/{id}/edit', ['uses' => 'RechargeController@edit']);
		Route::get('r_recharge_card/{id}', ['uses' => 'RechargeController@destroy']);
		Route::get('a_recharge_card/{id}', ['uses' => 'RechargeController@activate']);
		Route::get('d_recharge_card/{id}', ['uses' => 'RechargeController@deactivate']);
		Route::post('recharge_card', ['uses' => 'RechargeController@save']);
		Route::patch('recharge_card/{id}', ['uses' => 'RechargeController@update']);
		
		//Levels
		Route::get('levels', ['uses' => 'LevelController@index']);
		Route::get('new_level', ['uses' => 'LevelController@newLevel']);
		Route::get('level/{id}/edit', ['uses' => 'LevelController@edit']);
		Route::get('r_level/{id}', ['uses' => 'LevelController@destroy']);
		Route::post('level', ['uses' => 'LevelController@save']);
		Route::patch('level/{id}', ['uses' => 'LevelController@update']);
		
		//Message
		Route::get('messages', ['uses' => 'MessageController@index']);
		Route::get('message/{id}/edit', ['uses' => 'MessageController@edit']);
		Route::get('r_message/{id}', ['uses' => 'MessageController@destroy']);
		Route::get('a_message/{id}', ['uses' => 'MessageController@activate']);
		Route::get('d_message/{id}', ['uses' => 'MessageController@deactivate']);
		Route::post('message', ['uses' => 'MessageController@save']);
		Route::patch('message/{id}', ['uses' => 'MessageController@update']);
		
		//Agent
		Route::get('agents', ['uses' => 'AgentController@index']);
		Route::get('agent/{id}/edit', ['uses' => 'AgentController@edit']);
		//	Route::get('r_agent/{id}', ['uses' => 'AgentController@destroy']);
		//	Route::get('a_agent/{id}', ['uses' => 'AgentController@activate']);
		//	Route::get('d_agent/{id}', ['uses' => 'AgentController@deactivate']);
		Route::get('unb_agent/{id}', ['uses' => 'AgentController@unblock']);
		Route::get('b_agent/{id}', ['uses' => 'AgentController@block']);
		Route::get('uns_agent/{id}', ['uses' => 'AgentController@unsuspend']);
		Route::get('s_agent/{id}', ['uses' => 'AgentController@suspend']);
		
		Route::get('unapproved_clients', ['uses' => 'ClientsController@unapproved']);
		Route::get('active_clients', ['uses' => 'ClientsController@active']);
		Route::get('a_approve_client/{id}', ['uses' => 'ClientsController@approveClient']);
		Route::get('blocked_clients', ['uses' => 'ClientsController@blocked']);
		Route::get('suspended_clients', ['uses' => 'ClientsController@suspended']);
		Route::get('a_block_client/{id}', ['uses' => 'ClientsController@block']);
		Route::get('a_suspend_client/{id}', ['uses' => 'ClientsController@suspend']);
		Route::get('a_unsuspend_client/{id}', ['uses' => 'ClientsController@unsuspend']);
		Route::get('a_unblock_client/{id}', ['uses' => 'ClientsController@unblock']);
		
		///Level Activities
		Route::get('unassigned', ['uses' => 'ClientsController@unassigned']);
		
		
		//Deposits
		Route::get('client_deposits', ['uses' => 'ClientDepositController@deposits']);
		Route::get('a_view_payment_detail/{id}', ['uses' => 'ClientDepositController@details']);
		Route::get('a_view_payment_reject/{id}', ['uses' => 'ClientDepositController@approve']);
		Route::get('a_view_payment_approve/{id}', ['uses' => 'ClientDepositController@reject']);
		Route::get('approved_payment', ['uses' => 'ClientDepositController@approved']);
		Route::get('cancelled_deposits', ['uses' => 'ClientDepositController@cancelled']);
		
		
		//DownLine Processing
		Route::get('assigned_downlines', ['uses' => 'LevelActivityController@progress']);
		Route::get('completed_downline', ['uses' => 'LevelActivityController@completed']);
		
		
	});
	
	Route::group(['namespace' => 'Agent', 'middleware' => ['role:agent'], 'prefix' => 'agent'], function () {
		Route::get('/', ['uses' => 'AgentController@index']);
	});
	
	
	Route::group(['namespace' => 'User', 'middleware' => ['role:user'], 'prefix' => 'dashboard'], function () {
		Route::get('/', ['uses' => 'DashboardController@index']);
		Route::get('new_level', ['uses' => 'DashboardController@level']);
		
		Route::get('level/{id}', ['uses' => 'DashboardController@nextAction']);
		Route::post('selected_level', ['uses' => 'DashboardController@saveSelectedLevel'])->name('selected_level');
		
		Route::get('bonus', ['uses' => 'BonusController@index']);
		
		//Pending
		Route::get('pending_level', ['uses' => 'DashboardController@pending']);
		
		//active level
		Route::get('active_level', ['uses' => 'DashboardController@active']);
		
		//my transaction
		Route::get('my_transactions', ['uses' => 'DashboardController@myTransaction']);
		
		//Messages
		Route::get('latest-updates', ['uses' => 'MessageController@index']);
		Route::get('latest-updates/{id}', ['uses' => 'MessageController@readMessage']);
		
		Route::get('profile', ['uses' => 'ProfileController@profile']);
		Route::patch('profile/{id}', ['uses' => 'ProfileController@update']);
		
		
	});
});