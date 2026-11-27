<?php

return [
	
	/*
	|--------------------------------------------------------------------------
	| Package Connection
	|--------------------------------------------------------------------------
	|
	| You can set a different database connection for this package. It will set
	| new connection for models Role and Permission. When this option is null,
	| it will connect to the main database, which is set up in database.php
	|
	*/
	
	'connection' => env('ROLES_DATABASE_CONNECTION', null),
	'rolesTable' => env('ROLES_ROLES_DATABASE_TABLE', 'roles'),
	'roleUserTable' => env('ROLES_ROLE_USER_DATABASE_TABLE', 'role_user'),
	'permissionsTable' => env('ROLES_PERMISSIONS_DATABASE_TABLE', 'permissions'),
	'permissionsRoleTable' => env('ROLES_PERMISSION_ROLE_DATABASE_TABLE', 'permission_role'),
	'permissionsUserTable' => env('ROLES_PERMISSION_USER_DATABASE_TABLE', 'permission_user')

];
