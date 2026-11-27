<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TestController extends Controller
{
  /**
   * Simple response
   *
   * @return JsonResponse
   */
  public function simpleResponse(): JsonResponse
  {
    return response()->json([
      'data' => 'ok'
    ], 200);
  }
}
