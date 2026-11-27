<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		/*
		 * Role Types
		 *
		 */
    $roleItems = [
			/*
			[
				'name' => 'Admin',
				'slug' => 'admin',
				'description' => 'Admin Role',
				'level' => 5,
			],
			[
				'name' => 'User',
				'slug' => 'user',
				'description' => 'User Role',
				'level' => 1,
			],
			[
				'name' => 'Unverified',
				'slug' => 'unverified',
				'description' => 'Unverified Role',
				'level' => 0,
			],
			*/
			// own
			[
				'name'        => 'test role',
				'slug'        => 't.role',
				'description' => 'test role',
				'level'       => 0,
			],
		];
		
		/*
		 * Add Role Items
		 *
		 */
		foreach ($roleItems as $roleItem) {
			$newRoleItem = config('roles.models.role')::where('slug', '=', $roleItem['slug'])->first();
			if (!$newRoleItem) {
				$newRoleItem = config('roles.models.role')::create([
					'name' => $roleItem['name'],
					'slug' => $roleItem['slug'],
					'description' => $roleItem['description'],
					'level' => $roleItem['level'],
				]);
			}
		}
	}
}
