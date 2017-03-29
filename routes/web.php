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


Auth::routes();

Route::get('/', ['uses' => 'IndexController@index']);
Route::get('signup', ['uses' => 'IndexController@signup']);
Route::post('signup', ['uses' => 'IndexController@store']);
Route::get('login', ['uses' => 'LoginController@index']);
Route::post('login', ['uses' => 'LoginController@login']);


//Signup Referral
Route::get('account/{code}', ['uses' => 'IndexController@Showreferral']);
Route::post('account}', ['uses' => 'IndexController@referral']);


//Signup Agent
Route::get('myaccount/{code}', ['uses' => 'IndexController@ShowreferralAgent']);
Route::post('myaccount}', ['uses' => 'IndexController@referralAgent']);


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


//Derailed
Route::get('blocked', ['uses' => 'DerailedController@blocked']);
Route::get('suspend', ['uses' => 'DerailedController@suspend']);

Route::group(['middleware' => 'auth'], function () {
	Route::get('logout', ['uses' => 'LoginController@destroy']);
	
	
	Route::group(['namespace' => 'Administrator', 'middleware' => ['role:admin'], 'prefix' => 'admin'], function () {
		Route::get('/', ['uses' => 'AdminController@index']);
		
		//Bank
		Route::get('bank', ['uses' => 'BankController@index']);
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
		
		
		Route::get('other_setting', ['uses' => 'OtherSettingController@index']);
		Route::patch('other_setting/{id}', ['uses' => 'OtherSettingController@update']);
		
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
		
		
		Route::get('referrals', ['uses' => 'ClientsController@referrals']);
		
		//Deposits
		Route::get('client_deposits', ['uses' => 'ClientDepositController@deposits']);
		Route::get('a_view_payment_detail/{id}', ['uses' => 'ClientDepositController@details']);
		Route::get('a_view_payment_reject/{id}', ['uses' => 'ClientDepositController@reject']);
		Route::get('a_view_payment_approve/{id}', ['uses' => 'ClientDepositController@approve']);
		Route::get('approved_payment', ['uses' => 'ClientDepositController@approved']);
		Route::get('cancelled_deposits', ['uses' => 'ClientDepositController@cancelled']);
		
		
		//DownLine Processing
		Route::get('assign_to_root/{id2}', ['uses' => 'LevelActivityController@assignToRoot']);
		Route::get('assign_to_left/{user_id}/{user_level_id}/{child}', ['uses' => 'LevelActivityController@assignToLeft']);
		Route::get('assign_to_right/{user_id}/{user_level_id}/{child}', ['uses' => 'LevelActivityController@assignToRight']);
		Route::get('assign_to/{id1}', ['uses' => 'LevelActivityController@pullToAssign']);
		Route::get('unassigned', ['uses' => 'LevelActivityController@unassigned']);
		Route::get('assigned_downlines', ['uses' => 'LevelActivityController@progress']);
		Route::get('completed_downline', ['uses' => 'LevelActivityController@completed']);
		Route::get('processing_downlines', ['uses' => 'LevelActivityController@processing']);
		
		
		//Bonuses
		
		Route::get('bonus_pending_approval', ['uses' => 'BonusController@pending']);
		Route::get('bonus_approved', ['uses' => 'BonusController@approvedd']);
		Route::get('cancelled_bonuses', ['uses' => 'BonusController@cancelled']);
		Route::get('approve_bonus/{id}', ['uses' => 'BonusController@approve']);
		Route::get('cancel_bonus/{id}', ['uses' => 'BonusController@cancel']);
		
		//Issue Tracker
		Route::get('issue_tracker', ['uses' => 'IssueTrackerController@index']);
		Route::get('read_issue/{issue_header}', ['uses' => 'IssueTrackerController@readIssue']);
		Route::post('reply-request', ['uses' => 'IssueTrackerController@reply']);
		
		//Withdrawal
		Route::get('withdrawal_pending', ['uses' => 'WithdrawalController@pending']);
		Route::get('withdrawal_cancelled', ['uses' => 'WithdrawalController@cancelled']);
		Route::get('withdrawal_approved', ['uses' => 'WithdrawalController@approved']);
		Route::get('withdrawal_pay/{id}', ['uses' => 'WithdrawalController@pay']);
		Route::get('withdrawal_cancel/{id}', ['uses' => 'WithdrawalController@cancel']);
		Route::post('withdrawal_pay/{id}', ['uses' => 'WithdrawalController@payNow']);
		Route::post('withdrawal_cancel/{id}', ['uses' => 'WithdrawalController@cancelNow']);
	});
	
	
	Route::group(['namespace' => 'Agent', 'middleware' => ['role:agent', 'blocked', 'suspend'], 'prefix' => 'agent'], function () {
		
		//Email Confirmation
		Route::get('email_sent', ['uses' => 'EmailController@emailSent']);
		Route::get('email_not_confirmed', ['uses' => 'EmailController@notConfirmed']);
		Route::get('resend_email', ['uses' => 'EmailController@resend']);
		Route::get('confirm_email/{code}', ['uses' => 'EmailController@confirm']);
		
		Route::group(['middleware' => 'agent '], function () {
			Route::get('/', ['uses' => 'AgentController@index']);
		});
	});
	
	Route::group(['namespace' => 'User', 'middleware' => ['role:user', 'blocked', 'suspend'], 'prefix' => 'dashboard'], function () {
		
		//Email Confirmation
		Route::get('email_sent', ['uses' => 'EmailController@emailSent']);
		Route::get('email_not_confirmed', ['uses' => 'EmailController@notConfirmed']);
		Route::get('resend_email', ['uses' => 'EmailController@resend']);
		Route::get('confirm_email/{code}', ['uses' => 'EmailController@confirm']);
		
		
		Route::group(['middleware' => 'email'], function () {
			
			Route::get('profile', ['uses' => 'ProfileController@profile']);
			Route::patch('profile/{id}', ['uses' => 'ProfileController@update']);
			
			Route::group(['middleware' => 'profile'], function () {
				
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
				
				
				//Issue Tracker
				Route::get('my-request/{userLevelId}', ['uses' => 'IssueTrackerController@index']);
				Route::post('my-request', ['uses' => 'IssueTrackerController@send']);
				
				
				//Withdrawals
				Route::get('place_withdrawal', ['uses' => 'WithdrawalController@withdrawal']);
				Route::post('place_withdrawal', ['uses' => 'WithdrawalController@placeOrder']);
				
				//Referrals
				Route::get('my_referrals', ['uses' => 'MyReferralsController@index']);
			});
		});
	});
	
});


