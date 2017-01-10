<?php

use App\Banks;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$bank = new Banks();
		$bank->name = 'First Bank';
		$bank->save();
		
		$bank = new Banks();
		$bank->name = 'Union Bank';
		$bank->save();
		
		$bank = new Banks();
		$bank->name = 'Guaranty Trust Bank';
		$bank->save();
		
		$bank = new Banks();
		$bank->name = 'United Bank of Africa';
		$bank->save();
		
		$bank = new Banks();
		$bank->name = 'Fidelity Bank';
		$bank->save();
		
		$bank = new Banks();
		$bank->name = 'Diamond Bank';
		$bank->save();
		
		$bank = new Banks();
		$bank->name = 'Skye Bank';
		$bank->save();
		
		$bank = new Banks();
		$bank->name = 'Keystone Bank';
		$bank->save();
		
		$bank = new Banks();
		$bank->name = 'Wema Bank';
		$bank->save();
		
		$bank = new Banks();
		$bank->name = 'First City Monument Bank';
		$bank->save();
		
		$bank = new Banks();
		$bank->name = 'Ecobank Bank';
		$bank->save();
	}
}
