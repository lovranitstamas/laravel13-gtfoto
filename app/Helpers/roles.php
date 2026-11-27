<?php

if (!function_exists('getTestRoles')) {
  function getTestRoles()
  {
    return config('roles.models.role')::where('slug', '=', 't.role')->first();
  }
}
