<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\HotelController;
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

Route::get('/profile/{id}', [AuthController::class, 'profile']);
Route::post('/editprofile/{id}', [AuthController::class, 'updateprofile']);

//hotel route
Route::post('/createhotel', [HotelController::class, 'store']);
Route::post('/edithotel/{id}', [HotelController::class, 'update']);
Route::delete('/edithotel/{id}', [HotelController::class, 'destroy']);
Route::get('/hotel', [HotelController::class, 'index']);
Route::get('/hotel/{id}', [HotelController::class, 'show']);
Route::get('/roomtypes', [HotelController::class, 'showroom']);
Route::get('/gallery', [HotelController::class, 'gallery']);

});




// roomtype
Route::resource('/roomtype', RoomtypeController::class);