<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\AgentRTController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\DashboardController;
// use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [UserController::class, 'showlogin'])->name('showlogin');
Route::get('/register', [UserController::class, 'showregister'])->name('showregister');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/', [HomeController::class, 'index'])->name('home');



// Route::middleware(['auth', 'isAdmin'])->group(function(){
// admin hotel route
Route::resource('admin/hotel', HotelController::class);
Route::get('admin/hotel/{id}/delete', [HotelController::class, 'destroy'])->name('hotel.destroy');
// admin user route
Route::resource('admin/user', UserController::class);
// admin roomtype route
Route::resource('admin/roomtype', RoomtypeController::class);
Route::get('admin/roomtype/{id}/delete', [RoomtypeController::class, 'destroy'])->name('roomtype.destroy');
// admin gallery route
Route::resource('admin/gallery', GalleryController::class);
Route::get('admin/gallery/{id}/delete', [GalleryController::class, 'destroy'])->name('gallery.destroy');
// });


Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard')->middleware(['auth']);

Route::get('agent/hotelcreate', [AgentController::class, 'createhotel'])->name('hotel.createe')->middleware(['auth', 'agent']);
Route::post('agent/hotelcreate', [AgentController::class, 'storehotel'])->name('hotel.storee')->middleware(['auth', 'agent']);
Route::get('agent/user/{id}', [AgentController::class, 'show'])->name('user.showw')->middleware(['auth', 'agent']);
Route::get('agent/hotel/{id}', [AgentController::class, 'showhotel'])->name('hotel.showw')->middleware(['auth', 'agent']);
Route::get('agent/edit/{id}', [AgentController::class, 'edit'])->name('user.editt')->middleware(['auth', 'agent']);
Route::get('agent/hoteledit/{id}', [AgentController::class, 'edithotel'])->name('hotel.editt')->middleware(['auth', 'agent']);
Route::post('agent/edit/{id}', [AgentController::class, 'update'])->name('user.update')->middleware(['auth', 'agent']);
Route::post('agent/hoteledit/{id}', [AgentController::class, 'updatehotel'])->name('hotel.update')->middleware(['auth', 'agent']);


Route::get('agent/createRT', [AgentRTController::class, 'createroomtypes'])->name('createRT')->middleware(['auth', 'agent']);
Route::post('agent/createRT', [AgentRTController::class, 'storeroomtypes'])->name('storeRT')->middleware(['auth', 'agent']);
Route::get('agent/showRT', [AgentRTController::class, 'showroomtypes'])->name('showRT')->middleware(['auth', 'agent']);
Route::get('agent/editRT/{id}', [AgentRTController::class, 'editroomtypes'])->name('editRT')->middleware(['auth', 'agent']);
Route::post('agent/editRT/{id}', [AgentRTController::class, 'updateroomtypes'])->name('updateRT')->middleware(['auth', 'agent']);
Route::get('agent/deleteRT/{id}/delete', [AgentRTController::class, 'deleteroomtypes'])->name('deleteRT')->middleware(['auth', 'agent']);
Route::get('agent/deletRT/{id}/delete', [AgentRTController::class, 'deleteroomtypes'])->name('deleteRT')->middleware(['isAdmin']);


Route::get('agent/createGL', [GalleryController::class, 'creategallery'])->name('createGL')->middleware(['auth', 'agent']);
Route::post('agent/createGL', [GalleryController::class, 'storegallery'])->name('storeGL')->middleware(['auth', 'agent']);
Route::get('agent/showGL', [GalleryController::class, 'showgallery'])->name('showGL')->middleware(['auth', 'agent']);
Route::get('agent/deletGL/{id}/delete', [GalleryController::class, 'deletegallery'])->name('deleteGL')->middleware(['auth', 'agent']);

