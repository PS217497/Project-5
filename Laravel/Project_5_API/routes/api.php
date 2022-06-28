<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\prestatiesController;
use App\Http\Controllers\OefeningenController;
use App\Http\Controllers\AuthenticationController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/publicoefeningen',[OefeningenController::class,'publicindex']);
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('profile', function(Request $request) {
        return auth()->user();
    });
    Route::apiResource('oefeningen', OefeningenController::class);
    Route::apiResource('prestaties', prestatiesController::class);
    Route::apiResource('users', AuthenticationController::class);

    Route::post('/logout', [AuthenticationController::class, 'logout']);
});
Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found'], 404);
});
