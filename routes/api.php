<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CookieController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/cookies",[CookieController::class,'get_cookies']);
Route::post("/cookies",[CookieController::class,'create_cookie']);

Route::get("/test-cookies", function() {
    return response()->json([
        'message'=> 'Cookies List API'
    ]);
});