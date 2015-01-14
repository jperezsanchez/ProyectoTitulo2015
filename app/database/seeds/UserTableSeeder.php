<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		User::create(array(
			'username' => 'admin',
			'email' => 'admin@admin.com',
			'name' => 'administrador',
			'password' => Hash::make('admin')
		));
	}

}
