<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssueHeader extends Model
{
	public function userLevel()
	{
		return $this->belongsTo(UserLevel::class);
	}
	
	public function issueTracker()
	{
		return $this->hasMany(LevelMessage::class, 'issue_header_id');
	}
}
