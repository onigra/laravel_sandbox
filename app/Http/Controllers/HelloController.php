<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(['foo' => 'bar']);
    }
}
