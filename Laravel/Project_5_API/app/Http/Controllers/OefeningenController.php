<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\oefeningen;

class OefeningenController extends Controller
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
    public function show(oefeningen $oefeningen)
    {
        $response = [
            'success' => true,
            'data'    =>  $oefeningen,
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
            'data'    => oefeningen::create($request->all()),
            'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
            'token_type' => 'Bearer'
        ];
        return response()->json($response, 200);
    }
    public function update(Request $request, oefeningen $oefening)
    {
        $request->user()->currentAccessToken()->delete();
        $oefening->update($request->all());
        $response = [
            'success' => true,
            'data'    =>  $oefening,
            'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
            'token_type' => 'Bearer'
        ];
        return response()->json($response, 200);
    }
    public function destroy(Request $request, oefeningen $oefening,$id)
    {
        oefeningen::find($id)->delete();
        $response = [
            'success' => true,
            'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
            'token_type' => 'Bearer'
        ];
        return response()->json($response, 200);
    }
}
