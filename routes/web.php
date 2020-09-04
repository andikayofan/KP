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

Route::get('/', function () {
    return view('DsUtama');
});

Route::get('/DsUtama', function () {
    return view('DsUtama');
});

Route::get('/pemesanan', function () {
    return view('Pemesanan');
});

Route::get('/persetujuan', function () {
    return view('Persetujuan');
});

Route::get('/disetujui', function () {
    return view('Disetujui');
});

Route::get('/bdisetujui', function () {
    return view('Bdisetujui');
});

Route::get('/inputmaster', function () {
    return view('Inputmaster');
});

Route::get('/datastok', function () {
    return view('Databarang');
});
Route::get('/penerimaanb', function () {
    return view('Penerimaanb');
});

Route::get('/inputvendor', function () {
    return view('Inputvendor');
});

Route::get('/datavendor', function () {
    return view('Datavendor');
});

// Route::get('/', 'pagescontroller@DsUtama');

Route::group(['prefix'=>'vendor','as'=>'vendor.'], function(){
    Route::get('/index','VendorController@index')->name('index');
    Route::post('/store','VendorController@store')->name('store');
});