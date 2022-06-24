<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class oefeningen extends Controller
{
    public function index()
    {
        $response = [
            'success' => true,
            'data'    => oefeningen::All(),
            'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
            'token_type' => 'Bearer'
        ];
        return response()->json($response, 200);
    }
    public function show(Constructor $Constructor)
    {
        $response = [
            'success' => true,
            'data'    =>  $Constructor,
            'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
            'token_type' => 'Bearer'
        ];
        return response()->json($response, 200);
    }
}
