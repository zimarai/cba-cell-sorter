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
Auth::routes();
Route::get('/', 'SiteController@index')->name('inicio');
Route::get('/agendar', 'AppointmentController@create')->name('agendar');
Route::post('/agendar', 'AppointmentController@store');

Route::get('/cancelar', 'AppointmentController@cancel')->name('cancelar');
Route::post('/cancelar', 'AppointmentController@cancelFind');
Route::post('/confirma-cancelar', 'AppointmentController@cancelConfirmation')->name('confirma-cancelar');

Route::prefix('admin')
->middleware(['auth','role']) // tienen que estar en un arreglo para que funcionen combinados
->group(function () {
  Route::get('/', 'BackendController@index')->name('admin');
  Route::post('/modificar', 'BackendController@modify')->name('modificar');
  Route::post('/modificar-confirmar', 'BackendController@modifyConfirmation')->name('modificar-confirmar');
});

