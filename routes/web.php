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
//if (!App::environment('local')) {
//  URL::forceScheme('https');
//}
Auth::routes();
Route::get('/', 'SiteController@index')->name('inicio');
Route::get('/agendar', 'AppointmentController@create')->name('agendar');
Route::post('/agendar', 'AppointmentController@store');

//Route::middleware('auth:api')->group(function () {
Route::prefix('admin')->middleware('auth')->middleware('role:ADMIN')->group(function () {
  //if (Auth::check())
  Route::get('/dashboard', 'BackendController@index')->name('dashboard');
  //Route::get('dashboard', function () {});
});

Route::get('/flights', function () {
  // Only authenticated users may access this route...
})->middleware('auth');
