<?php

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
//use CastController; //load controller post
use App\Http\Controllers\Controller; //load controller post

// baris kode lain

// Route::resource('cast', CastController::class);

// Route::get('/', function () {
//     return view('casts/index');
// });
// Route::get('/tabel',  function () {
//     return view('tabel');
// });
// Route::get('/datatabel', function () {
//     return view('datatabel');
// });
// Route::get('/cast', function () {
//     return view('cast/index');
// });

Auth::routes();
route::resource('cast', 'CastController');


