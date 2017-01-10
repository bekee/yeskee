<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$admin = new Role();
		$admin->name = 'admin';
		$admin->display_name = 'User Administrator'; // optional
		$admin->description = 'User is allowed to manage and edit other users'; // optional
		$admin->save();
		
		$permission = Permission::all();
		$admin->attachPermissions($permission);
		
		
		$agent = new Role();
		$agent->name = 'agent';
		$agent->display_name = 'Agent'; // optional
		$agent->description = 'Agent seeks new users'; // optional
		$agent->save();
		
		$agent->attachPermissions($permission);
		
		$user = new Role();
		$user->name = 'user';
		$user->display_name = 'User'; // optional
		$user->description = 'User runs main activities on the platform'; // optional
		$user->save();
		
		$user->attachPermissions($permission);
	}
}
