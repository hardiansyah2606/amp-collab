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
	--Routing Dengan Menambahkan admin pada awal urlnya
	Route::prefix('admin')->group(function(){});
	--Routing Dengan Menambahkan admin pada awal urlnya dan awal foldernya
	Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){});
	-- Routing dengan Middleware
	Route::group(['middleware' => 'auth'], function(){});
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth  
Route::get('/login','Auth\AuthController@login')->name('login');
Route::get('/logout','Auth\AuthController@logout')->name('logout');
Route::post('/postLogin','Auth\AuthController@postLogin')->name('postLogin');
// End Auth

// Session Start
Route::group(['middleware'=>['customAuth']], function(){

	Route::get('/menu','MenuController@index')->name('menu');

	// Route Master Start
	Route::get('/master','MenuController@master')->name('menuMaster');

		// Master User Start
		Route::get('/user','Auth\UserController@index')->name('indexUser');
		Route::post('/user/create','Auth\UserController@store')->name('createUser');
		Route::patch('/user/{id}', 'Auth\UserController@update')->name('user.update');
		Route::delete('/user/delete/{id}', 'Auth\UserController@delete')->name('deleteUser');
		// Master User End

		// Master Divisi Start
		Route::get('/divisi', 'MasterController@divisiIndex')->name('divisi');
		Route::post('/divisi/store', 'MasterController@divisistore')->name('divisi.store');
		Route::patch('/divisi/{iddivisi}', 'MasterController@update')->name('divisi.update');
		Route::delete('/divisi/{iddivisi}', 'MasterController@delete')->name('divisi.delete');
		// Master Divisi End


		// Master Provinsi Start
		Route::get('/provinsi', 'MasterController@provIndex')->name('provinsi');
		Route::post('/provinsi/store', 'MasterController@provinsistore')->name('provinsi.store');
		Route::patch('/provinsi/{idprovinsi}', 'MasterController@updateprov')->name('provinsi.update');
		Route::delete('/provinsi/{idprovinsi}', 'MasterController@deleteprov')->name('provinsi.delete');
		// Master Provinsi End

		// Master Jabatan Start
		Route::get('/jabatan', 'MasterController@jabIndex')->name('jabatan');
		Route::post('/jabatan/store', 'MasterController@jabatanstore')->name('jabatan.store');
		Route::patch('/jabatan/{idjabatan}', 'MasterController@updatejab')->name('jabatan.update');
		Route::delete('/jabatan/{idjabatan}', 'MasterController@deletejab')->name('jabatan.delete');
		// Master Jabatan End

		// Master Mitra  Start
		Route::get('/mitra', 'MasterController@mitIndex')->name('mitra');
		Route::post('/mitra/store', 'MasterController@mitrastore')->name('mitra.store');
		Route::patch('/mitra/{idmitra}', 'MasterController@updatemit')->name('mitra.update');
		Route::delete('/mitra/{idmitra}', 'MasterController@deletemit')->name('mitra.delete');
		// Master Mitra  End

		// Master Bidang Pekerjaan  Start
		Route::get('/bidangpekerjaan', 'MasterController@bidangpekerjaanindex')->name('bidangpekerjaan');
		Route::post('/bidangpekerjaan/store', 'MasterController@bidangpekerjaanstore')->name('bidangpekerjaan.store');
		Route::patch('/bidangpekerjaan/{idbidangpekerjaan}', 'MasterController@bidangpekerjaanupdate')->name('bidangpekerjaan.update');
		Route::delete('/bidangpekerjaan/{idbidangpekerjaan}', 'MasterController@bidangpekerjaandelete')->name('bidangpekerjaan.delete');
		// Master Mitra  End

		// Master Lokasi Kerja  Start
		Route::get('/lokasikerja', 'MasterController@lokasikerjaindex')->name('lokasikerja');
		Route::post('/lokasikerja/store', 'MasterController@lokasikerjastore')->name('lokasikerja.store');
		Route::patch('/lokasikerja/{idLok}', 'MasterController@lokasikerjaupdate')->name('lokasikerja.update');
		Route::delete('/lokasikerja/{idLok}', 'MasterController@lokasikerjadelete')->name('lokasikerja.delete');
		// Master Lokasi Kerja  End

		// Master Bank  Start
		Route::get('/bank', 'MasterController@bankindex')->name('bank');
		Route::post('/bank/store', 'MasterController@bankstore')->name('bank.store');
		Route::patch('/bank/{idBank}', 'MasterController@bankupdate')->name('bank.update');
		Route::delete('/bank/{idBank}', 'MasterController@bankdelete')->name('bank.delete');
		// Master Bank  End

		// Master Vendor  Start
		Route::get('/vendor', 'MasterController@vendorindex')->name('vendor');
		Route::post('/vendor/store', 'MasterController@vendorstore')->name('vendor.store');
		Route::patch('/vendor/{idvendor}', 'MasterController@vendorupdate')->name('vendor.update');
		Route::delete('/vendor/{idvendor}', 'MasterController@vendordelete')->name('vendor.delete');
		// Master Vendor  End

		// Master Karyawan  Start
		Route::get('/karyawan', 'MasterController@karyawanindex')->name('karyawan');
		Route::post('/karyawan/store', 'MasterController@karyawanstore')->name('karyawan.store');
		Route::patch('/karyawan/{idkaryawan}', 'MasterController@karyawanupdate')->name('karyawan.update');
		Route::delete('/karyawan/{idkaryawan}', 'MasterController@karyawandelete')->name('karyawan.delete');
		// Master Karyawan  End
	
	// Route Master End

});
// Session End
		// Route::get('/home', 'HomeController@index')->name('home');
