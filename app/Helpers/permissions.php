<?php

if (!function_exists('getTestPermissions')) {
  function getTestPermissions()
  {
    return config('roles.models.permission')
      ::where('slug', '=', 't.permission')
      ->get();
  }
}
