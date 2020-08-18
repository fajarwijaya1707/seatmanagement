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

Route::get('/admin', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'DashboardController@index')->name('home');

Route::get('/mahasiswa','MahasiswaController@index');

Route::post('/mahasiswa/create','MahasiswaController@create');

Route::get('/mahasiswa/search','MahasiswaController@search');

Route::get('/mahasiswa/{id}/edit','MahasiswaController@edit');

Route::get('/mahasiswa/hapus/{id}','MahasiswaController@hapus');

Route::get('/kursi/edit/{id}','TamuController@edit');

Route::get('/kursi/update/{id}','TamuController@update');

Route::get('/kursi/hapus/{id}','TamuController@hapus');

Route::get('/kursi/create','TamuController@create');

Route::post('/mahasiswa/{id}/update','MahasiswaController@update');

Route::get('/hadir','TamuController@index');

Route::get('/log','TamuController@log');

Route::get('/booking','TamuController@booking');

Route::get('/checkin','TamuController@checkin');

Route::get('/checkintamu','TamuController@checkin');

Route::get('/kursi', 'KursiController@tambahkursi');

Route::post('/kursi/update', 'KursiController@cek');

Route::post('/kursi/checkin', 'KursiController@checkin');

Route::get('/awal', 'KursiController@awal');

Route::get('/', 'KursiController@masuk');

Route::get('/awalhp', 'KursiController@awalhp');

Route::get('/lokasi', 'KursiController@lokasi');

Route::get('/scan', 'KursiController@scan');

Route::get('/scanhp', 'KursiController@scanhp');

Route::get('/test', 'KursiController@print');

Route::get('/kursi/print', 'KursiController@print');

Route::get('/tamu', 'TamuController@tamubooking');

Route::get('/bookingsukses', 'TamuController@tamusukses');

Route::get('/rule', 'TamuController@rule');

Route::get('/jumlah', 'TamuController@jumlah');

Route::get('/updatejumlah', 'TamuController@updatejumlah');

Route::get('/hapustamu', 'TamuController@hapustamu');

Route::get('/cetakhadir', 'TamuController@cetakhadir');

Route::get('/segmen', 'SettingController@segmen');

Route::get('/segmen/create', 'SettingController@createsegmen');

Route::get('/segmen/edit/{id}','SettingController@editsegmen');

Route::get('/segmen/update/{id}','SettingController@updatesegmen');

Route::get('/segmen/hapus/{id}','SettingController@hapussegmen');

Route::get('/baris', 'SettingController@baris');

Route::get('/baris/create', 'SettingController@createbaris');

Route::get('/baris/edit/{id}','SettingController@editbaris');

Route::get('/baris/update/{id}','SettingController@updatebaris');

Route::get('/baris/hapus/{id}','SettingController@hapusbaris');

Route::get('/fakultas', 'SettingController@fakultas');

Route::get('/fakultas/create', 'SettingController@createfakultas');

Route::get('/fakultas/edit/{id}','SettingController@editfakultas');

Route::get('/fakultas/update/{id}','SettingController@updatefakultas');

Route::get('/fakultas/hapus/{id}','SettingController@hapusfakultas');

Route::get('/prodi', 'SettingController@prodi');

Route::get('/prodi/create', 'SettingController@createprodi');

Route::get('/prodi/edit/{id}','SettingController@editprodi');

Route::get('/prodi/update/{id}','SettingController@updateprodi');

Route::get('/prodi/hapus/{id}','SettingController@hapusprodi');
