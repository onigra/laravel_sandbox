<?php

namespace App\Http\Controllers;

use App\Models\Hello;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(): JsonResponse
    {
        $result = Hello::say_hello();
        return response()->json($result);
    }
}
