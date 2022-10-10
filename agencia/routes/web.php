<?php

use Illuminate\Support\Facades\Route;

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
 
//Ruta de Página Princial - Inicio
Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});

//Rutas para visualizar CRUD de los elementos
Route::resource('cities','App\Http\Controllers\CityController');
Route::resource('hotels','App\Http\Controllers\HotelController');
Route::resource('guides','App\Http\Controllers\GuideController');
Route::resource('transports','App\Http\Controllers\TransportController');
Route::resource('packages','App\Http\Controllers\PackageController');
Route::resource('users','App\Http\Controllers\UserController');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
