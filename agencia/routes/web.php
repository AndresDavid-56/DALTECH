<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\StripeController;

  
use App\Http\Controllers\DropDownController;

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
//DropwDown
Route::get('dropdown', [DropDownController::class, 'index']);
Route::get('dropdown2', [DropDownController::class, 'index2']);
Route::post('api/fetch-guide', [DropdownController::class, 'fetchGuide']);
Route::post('api/fetch-transport', [DropdownController::class, 'fetchTransport']);
Route::post('api/fetch-hotel', [DropdownController::class, 'fetchHotel']);

 
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

//Paypal
$ruta = base64_encode('paypal_finish');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
route::get('createpaypal',[PaypalController::class,'createpaypal'])->name('createpaypal');
route::get('processPaypal',[PaypalController::class,'processPaypal'])->name('processPaypal');
route::get('processSuccess',[PaypalController::class,'processSuccess'])->name('processSuccess');
route::get('processCancel',[PaypalController::class,'processCancel'])->name('processCancel');
Route::get('cGF5cGFsX2ZpbmlzaA0KDQo=', function () {
    return view('paypal_finish');})->name('paypal_finish');
});


//Stripe
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
route::get('createpaypal',[StripeController::class,'stripe']);
route::post('createpaypal',[StripeController::class,'stripePost'])->name('stripe.post');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/city_choose', function () {
        return view('city_choose');
    })->name('city_choose');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/package_choose', 'App\Http\Controllers\PackageController@showAll' ,function () {
        return view('package_choose');
    })->name('package_choose');
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
        return view('dash.index');
    })->name('dashboard');
});