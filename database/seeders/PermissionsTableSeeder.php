<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		/*
		 * Permission Types
		 *
		 */
    $permissionItems = [
			[
				'name'        => 'test permission',
				'slug'        => 't.permission',
				'description' => 'test permission',
				'model'       => 'Permission',
			],
		];
		
		/*
		 * Add Permission Items
		 *
		 */
		foreach ($permissionItems as $permissionItem) {
			$newPermissionItem = config('roles.models.permission')::where('slug', '=', $permissionItem['slug'])->first();
			if (!$newPermissionItem) {
				$newPermissionItem = config('roles.models.permission')::create([
					'name' => $permissionItem['name'],
					'slug' => $permissionItem['slug'],
					'description' => $permissionItem['description'],
					'model' => $permissionItem['model'],
				]);
			}
		}
	}
}
