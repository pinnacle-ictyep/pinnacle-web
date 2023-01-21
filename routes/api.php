<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\HotelController;
use App\Http\Controllers\Api\GalleryController;
use App\Http\Controllers\Api\RoomtypeController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::group(['middleware'=> 'auth:sanctum'], function (){

Route::get('/profile/{id}', [AuthController::class, 'edit']);
Route::post('/editprofile/{id}', [AuthController::class, 'update']);

//hotel route
Route::get('/hotel', [HotelController::class, 'index']);
Route::get('/hotel/{id}', [HotelController::class, 'show']);

//roomtypes route
Route::get('/roomtype', [RoomtypeController::class, 'index']);

//gallery route
Route::get('/gallery', [GalleryController::class, 'index']);

});