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
Route::get('maintenance', 'MaintenanceController@index');


// You can also use auth middleware to prevent unauthenticated users
Route::group(['middleware' => 'auth'], function () {
    // Route::get('/home', 'HomeController@index')->name('home');
    Route::get('beranda', 'HomeController@index')->name('home')->middleware('verified');
    Route::get('akses_pengguna', 'RoleController@index')->name('role')->middleware('verified');
    Route::post('akses_pengguna/simpan', 'RoleController@simpan')->name('role.simpan')->middleware('verified');
    Route::get('akses_pengguna/{id}', 'RoleController@show')->name('role.detail')->middleware('verified');
    Route::post('akses_pengguna/update', 'RoleController@update')->name('role.update')->middleware('verified');
    
    Route::get('kategori', 'KategoriController@index')->name('kategori')->middleware('verified');
    Route::post('kategori/simpan', 'KategoriController@create')->name('kategori.simpan')->middleware('verified');
    Route::get('kategori/{id}', 'KategoriController@show')->name('kategori.detail')->middleware('verified');
    Route::get('kategori/detail/{id}', 'KategoriController@showDetail')->name('kategori.showDetail')->middleware('verified');
    Route::post('kategori/update', 'KategoriController@update')->name('kategori.update')->middleware('verified');

    Route::get('pengguna', 'PenggunaController@index')->name('pengguna')->middleware('verified');
    Route::get('pengguna/{id}', 'PenggunaController@show')->name('pengguna.detail')->middleware('verified');
    Route::post('pengguna/simpan', 'PenggunaController@simpan')->name('pengguna.simpan')->middleware('verified');
    Route::post('pengguna/update', 'PenggunaController@update')->name('pengguna.update')->middleware('verified');
    
    Route::get('profile', 'ProfileController@index')->name('profile')->middleware('verified');

    Route::get('portal', 'PortalController@index')->name('portal')->middleware('verified');
    Route::post('portal/simpan', 'PortalController@simpan')->name('portal.simpan')->middleware('verified');
    
    Route::get('item', 'ItemController@index')->name('item')->middleware('verified');
    Route::post('item/simpan', 'ItemController@simpan')->name('item.simpan')->middleware('verified');
    Route::post('item/update', 'ItemController@update')->name('item.update')->middleware('verified');
    Route::get('item/{kode_barang}', 'ItemController@barcode')->middleware('verified');
    Route::get('item/detail/{kode_barang}', 'ItemController@show')->middleware('verified');
    Route::get('item/edit/{kode_barang}', 'ItemController@edit')->middleware('verified');
    Route::post('item/cetak_barcode', 'ItemController@downloadBarcode')->name('item.cetakBarcode')->middleware('verified');
    // Route::get('profile', function () {
    //     return view('profile.index');
    // });
    Route::get('maintenance/maintenance', 'MaintenanceController@index_maintenance')->name('maintenance')->middleware('verified');
    Route::post('maintenance/simpan', 'MaintenanceController@simpan')->name('maintenance.simpan')->middleware('verified');
    Route::post('maintenance/update', 'MaintenanceController@update')->name('maintenance.update')->middleware('verified');
    Route::get('maintenance/edit/{id}', 'MaintenanceController@edit')->middleware('verified');
    Route::get('maintenance/delete/{id}', 'MaintenanceController@delete')->middleware('verified');
    // cart
    Route::resource('cart', 'CartController')->middleware('verified');
    Route::patch('kosongkan/{id}', 'CartController@kosongkan')->middleware('verified');
    // cart detail
    Route::resource('cartdetail', 'CartDetailController')->middleware('verified');

    Route::get('curriculum', 'CVController@index')->name('cv')->middleware('verified');
    Route::get('{any}', 'QovexController@index');
});

// Route::domain('pulsa.localhost:8000')->group(function () {
//     Route::get('/', 'HomeController@index')->name('home');
// });