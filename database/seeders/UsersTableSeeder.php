<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		$testRoles = getTestRoles();

		/*
		 * Add Users
		 *
		 */
		if (config('roles.models.defaultUser')::where('email', '=', 'tamas198601@gmail.com')->first() === null) {
			$newUser = config('roles.models.defaultUser')::create([
				'name' => 'Admin',
				'email' => 'tamas198601@gmail.com',
				'password' => bcrypt('.7894ilt:Agtfoto'),
			]);
			
			$newUser->attachRole($testRoles);
			/*foreach ($permissionsXXX as $permission) {
					$newUser->attachPermission($permission);
			}*/
		}
		
		if (config('roles.models.defaultUser')::where('email', '=', 'gtfotoz@gmail.com')->first() === null) {
			$newUser = config('roles.models.defaultUser')::create([
				'name' => 'GT',
				'email' => 'gtfotoz@gmail.com',
				'password' => bcrypt('gtfotoBeni15'),
			]);
			
			$newUser->attachRole($testRoles);
		}
		
	}
}
