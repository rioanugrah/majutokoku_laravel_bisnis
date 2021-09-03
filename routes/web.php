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

// Route::get('/', function () {
//     // return 'test';
//     return view('/auth/login');
//     // return redirect('index');
// });

Auth::routes(['verify' => true]);

Route::get('logout', 'QovexController@logout');

Route::get('pages-login', 'QovexController@index');
Route::get('pages-login-2', 'QovexController@index');
Route::get('pages-register', 'QovexController@index');
Route::get('pages-register-2', 'QovexController@index');
Route::get('pages-recoverpw', 'QovexController@index');
Route::get('pages-recoverpw-2', 'QovexController@index');
Route::get('pages-lock-screen', 'QovexController@index');
Route::get('pages-lock-screen-2', 'QovexController@index');
Route::get('pages-404', 'QovexController@index');
Route::get('pages-500', 'QovexController@index');
Route::get('pages-maintenance', 'QovexController@index');
Route::get('pages-comingsoon', 'QovexController@index');
Route::post('login-status', 'QovexController@checkStatus');

Route::get('/', 'FrontendController@index');


// You can also use auth middleware to prevent unauthenticated users
Route::group(['middleware' => 'auth'], function () {
    // Route::get('/home', 'HomeController@index')->name('home');
    Route::get('beranda', 'HomeController@index')->name('home');
    Route::get('akses_pengguna', 'RoleController@index')->name('role');
    Route::post('akses_pengguna/simpan', 'RoleController@simpan')->name('role.simpan');
    Route::get('akses_pengguna/{id}', 'RoleController@show')->name('role.detail');
    Route::post('akses_pengguna/update', 'RoleController@update')->name('role.update');
    
    Route::get('kategori', 'KategoriController@index')->name('kategori');
    Route::post('kategori/simpan', 'KategoriController@create')->name('kategori.simpan');
    Route::get('kategori/{id}', 'KategoriController@show')->name('kategori.detail');
    Route::get('kategori/detail/{id}', 'KategoriController@showDetail')->name('kategori.showDetail');
    Route::post('kategori/update', 'KategoriController@update')->name('kategori.update');

    Route::get('pengguna', 'PenggunaController@index')->name('pengguna');
    Route::get('pengguna/{id}', 'PenggunaController@show')->name('pengguna.detail');
    Route::post('pengguna/simpan', 'PenggunaController@simpan')->name('pengguna.simpan');
    Route::post('pengguna/update', 'PenggunaController@update')->name('pengguna.update');
    
    Route::get('profile', 'ProfileController@index')->name('profile');

    Route::get('portal', 'PortalController@index')->name('portal');
    Route::post('portal/simpan', 'PortalController@simpan')->name('portal.simpan');
    
    Route::get('item', 'ItemController@index')->name('item');
    Route::post('item/simpan', 'ItemController@simpan')->name('item.simpan');
    Route::post('item/update', 'ItemController@update')->name('item.update');
    Route::get('item/{kode_barang}', 'ItemController@barcode');
    Route::get('item/detail/{kode_barang}', 'ItemController@show');
    Route::get('item/edit/{kode_barang}', 'ItemController@edit');
    Route::post('item/cetak_barcode', 'ItemController@downloadBarcode')->name('item.cetakBarcode');
    // Route::get('profile', function () {
    //     return view('profile.index');
    // });

    // cart
    Route::resource('cart', 'CartController');
    Route::patch('kosongkan/{id}', 'CartController@kosongkan');
    // cart detail
    Route::resource('cartdetail', 'CartDetailController');

    Route::get('curriculum', 'CVController@index')->name('cv');
    Route::get('{any}', 'QovexController@index');
});

// Route::domain('pulsa.localhost:8000')->group(function () {
//     Route::get('/', 'HomeController@index')->name('home');
// });