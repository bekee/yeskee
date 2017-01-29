<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserReferer extends Model
{
	//get the Actual through the parent ID User who's referral code was used
	public function referredParentUser()
	{
		return $this->belongsTo(User::class, 'referred');
	}
	
	//get the Parent User who's referral code was used
	public function referredParentOfUser()
	{
		return $this->belongsTo(User::class, 'user_id');
	}
	
	//get the Agent who's referral code was used
	public function referredAgent()
	{
		return $this->belongsTo(User::class, 'agent');
	}
}
