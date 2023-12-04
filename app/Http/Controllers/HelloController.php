<?php

namespace App\Http\Controllers;

use App\Models\Hello;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $result = $request->has('name') === true ?
            Hello::say_hello($request->input('name')) :
            Hello::say_hello();

        return response()->json($result);
    }
}
