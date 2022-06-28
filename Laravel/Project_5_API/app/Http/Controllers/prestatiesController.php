<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prestaties;

class prestatiesController extends Controller
{
    public function index()
    {
        $response = [
            'success' => true,
            'data'    => prestaties::All(),
            'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
            'token_type' => 'Bearer'
        ];
        return response()->json($response, 200);
    }
    public function show(prestaties $prestaties)
    {
        $response = [
            'success' => true,
            'data'    =>  $prestaties,
            'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
            'token_type' => 'Bearer'
        ];
        return response()->json($response, 200);
    }
    public function store(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        $response = [
            'success' => true,
            'data'    => prestaties::create($request->all()),
            'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
            'token_type' => 'Bearer'
        ];
        return response()->json($response, 200);
    }
    public function update(Request $request, prestaties $prestaties)
    {
        $request->user()->currentAccessToken()->delete();
        $prestaties->update($request->all());
        $response = [
            'success' => true,
            'data'    =>  $prestaties,
            'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
            'token_type' => 'Bearer'
        ];
        return response()->json($response, 200);
    }
    public function destroy(Request $request, prestaties $prestaties,$id)
    {
        prestaties::find($id)->delete();
        $response = [
            'success' => true,
            'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
            'token_type' => 'Bearer'
        ];
        return response()->json($response, 200);
    }
}
