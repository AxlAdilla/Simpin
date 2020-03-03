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


Route::get('/simpin', function () {
    return view('simpin');
});

Route::namespace('Simpin\UI\Web\Controllers')->group(function () {    
    Route::middleware('check.login')->group(function(){
        Route::middleware('check.jabatan:admin')->group(function(){
        
            //Home
            Route::get('/','Admin\HomeController@index')->name('dashboard');
            Route::get('/range/{range}','Admin\HomeController@index_range')->name('dashboard_range');

            // Pendaftaran Anggota
            Route::get('pendaftaran','Admin\PendaftaranController@index')
            ->name('pendaftaran_index');
            Route::get('pendaftaran/print','Admin\PendaftaranController@index_print')
            ->name('pendaftaran_index_print');
            Route::get('pendaftaran/range/{range}/print','Admin\PendaftaranController@index_range_print')
            ->name('pendaftaran_index_range_print');
            Route::get('pendaftaran/range/{range}','Admin\PendaftaranController@index_range')
            ->name('pendaftaran_index_range');
            Route::get('pendaftaran/create','Admin\PendaftaranController@create')
            ->name('pendaftaran_create');
            Route::get('pendaftaran/{id}/range/{range}','Admin\PendaftaranController@show_range')
            ->name('pendaftaran_show_range');
            Route::get('pendaftaran/{id}','Admin\PendaftaranController@show')
            ->name('pendaftaran_show');
            Route::delete('pendaftaran/{id}','Admin\PendaftaranController@destroy')
            ->name('pendaftaran_destroy');
            Route::post('pendaftaran/{id}/edit','Admin\PendaftaranController@update')
            ->name('pendaftaran_update');
            Route::get('pendaftaran/{id}/edit','Admin\PendaftaranController@edit')
            ->name('pendaftaran_edit');
            Route::post('pendaftaran','Admin\PendaftaranController@store')
            ->name('pendaftaran_store');
            
            //Buat Simpanan
            Route::get('simpanan','Admin\BuatSimpananController@index')
            ->name('simpanan_index');
            Route::get('simpanan/print','Admin\BuatSimpananController@index_print')
            ->name('simpanan_index_print');
            Route::get('simpanan/range/{range}','Admin\BuatSimpananController@index_range')
            ->name('simpanan_index_range');
            Route::get('simpanan/range/{range}/print','Admin\BuatSimpananController@index_range_print')
            ->name('simpanan_index_range_print');
            Route::get('simpanan/create','Admin\BuatSimpananController@create')
            ->name('simpanan_create');
            Route::get('simpanan/{id}','Admin\BuatSimpananController@show')
            ->name('simpanan_show');
            Route::delete('simpanan/{id}','Admin\BuatSimpananController@destroy')
            ->name('simpanan_destroy');
            Route::put('simpanan/{id}','Admin\BuatSimpananController@update')
            ->name('simpanan_update');
            Route::get('simpanan/{id}/edit','Admin\BuatSimpananController@edit')
            ->name('simpanan_edit');
            Route::post('simpanan','Admin\BuatSimpananController@store')
            ->name('simpanan_store');
            
            //Buat Pinjaman
            Route::get('pinjaman','Admin\BuatPinjamanController@index')
            ->name('pinjaman_index');
            Route::get('pinjaman/range/{range}','Admin\BuatPinjamanController@index_range')
            ->name('pinjaman_index_range');
            Route::get('pinjaman/print','Admin\BuatPinjamanController@index_print')
            ->name('pinjaman_index_print');
            Route::get('pinjaman/range/{range}/print','Admin\BuatPinjamanController@index_range_print')
            ->name('pinjaman_index_range_print');
            Route::get('pinjaman/create','Admin\BuatPinjamanController@create')
            ->name('pinjaman_create');
            Route::get('pinjaman/{id}','Admin\BuatPinjamanController@show')
            ->name('pinjaman_show');
            Route::delete('pinjaman/{id}','Admin\BuatPinjamanController@destroy')
            ->name('pinjaman_destroy');
            Route::put('pinjaman/{id}','Admin\BuatPinjamanController@update')
            ->name('pinjaman_update');
            Route::get('pinjaman/{id}/edit','Admin\BuatPinjamanController@edit')
            ->name('pinjaman_edit');
            Route::get('pinjaman/{id}/bayar','Admin\BuatPinjamanController@bayar')
            ->name('pinjaman_bayar');
            Route::post('pinjaman/{id}/bayar','Admin\BuatPinjamanController@bayar_store')
            ->name('pinjaman_bayar_store');
            Route::post('pinjaman','Admin\BuatPinjamanController@store')
            ->name('pinjaman_store');

            //Buat Jaminan
            Route::get('jaminan','Admin\BuatJaminanController@index')
            ->name('jaminan_index');
            Route::get('jaminan/range/{range}','Admin\BuatJaminanController@index_range')
            ->name('jaminan_index_range');
            Route::get('jaminan/create','Admin\BuatJaminanController@create')
            ->name('jaminan_create');
            Route::get('jaminan/{id}','Admin\BuatJaminanController@show')
            ->name('jaminan_show');
            Route::delete('jaminan/{id}','Admin\BuatJaminanController@destroy')
            ->name('jaminan_destroy');
            Route::put('jaminan/{id}','Admin\BuatJaminanController@update')
            ->name('jaminan_update');
            Route::get('jaminan/{id}/edit','Admin\BuatJaminanController@edit')
            ->name('jaminan_edit');
            Route::post('jaminan','Admin\BuatJaminanController@store')
            ->name('jaminan_store');
            
            //BuatCicilan
            Route::get('cicilan','Admin\BuatCicilanController@index')
            ->name('cicilan_index');
            Route::get('cicilan/range/{range}','Admin\BuatCicilanController@index_range')
            ->name('cicilan_index_range');
            Route::get('cicilan/create','Admin\BuatCicilanController@create')
            ->name('cicilan_create');
            Route::get('cicilan/{id}','Admin\BuatCicilanController@show')
            ->name('cicilan_show');
            Route::delete('cicilan/{id}','Admin\BuatCicilanController@destroy')
            ->name('cicilan_destroy');
            Route::put('cicilan/{id}','Admin\BuatCicilanController@update')
            ->name('cicilan_update');
            Route::get('cicilan/{id}/edit','Admin\BuatCicilanController@edit')
            ->name('cicilan_edit');
            Route::post('cicilan','Admin\BuatCicilanController@store')
            ->name('cicilan_store');

            //Akun
            Route::get('akun','Admin\AkunController@index')
            ->name('akun_index');
            Route::get('akun/range/{range}','Admin\AkunController@index_range')
            ->name('akun_index_range');
            Route::get('akun/create','Admin\AkunController@create')
            ->name('akun_create');
            Route::get('akun/{id}','Admin\AkunController@show')
            ->name('akun_show');
            Route::delete('akun/{id}','Admin\AkunController@destroy')
            ->name('akun_destroy');
            Route::put('akun/{id}','Admin\AkunController@update')
            ->name('akun_update');
            Route::get('akun/{id}/edit','Admin\AkunController@edit')
            ->name('akun_edit');
            Route::post('akun','Admin\AkunController@store')
            ->name('akun_store');
            
            Route::get('akun/{id}/password','Admin\AkunController@password')
            ->name('akun_password');
            Route::get('akun/{id}/jabatan','Admin\AkunController@jabatan')
            ->name('akun_jabatan');
            Route::put('akun/{id}/password','Admin\AkunController@password_update')
            ->name('akun_password_update');
            Route::put('akun/{id}/jabatan','Admin\AkunController@jabatan_update')
            ->name('akun_jabatan_update');
        });
        Route::middleware('check.jabatan:manajer')->prefix('manajer')->name('manajer.')->group(function(){
            //Home
            Route::get('/','Manajer\HomeController@index')->name('dashboard');
            Route::get('/range/{range}','Manajer\HomeController@index_range')->name('dashboard_range');

            // Pendaftaran Anggota
            Route::get('pendaftaran','Manajer\PendaftaranController@index')
            ->name('pendaftaran_index');
            Route::get('pendaftaran/print','Manajer\PendaftaranController@index_print')
            ->name('pendaftaran_index_print');
            Route::get('pendaftaran/range/{range}/print','Manajer\PendaftaranController@index_range_print')
            ->name('pendaftaran_index_range_print');
            Route::get('pendaftaran/range/{range}','Manajer\PendaftaranController@index_range')
            ->name('pendaftaran_index_range');
            Route::get('pendaftaran/{id}','Manajer\PendaftaranController@show')
            ->name('pendaftaran_show');
            Route::get('pendaftaran/{id}/range/{range}','Manajer\PendaftaranController@show_range')
            ->name('pendaftaran_show_range');
            
            //Buat Simpanan
            Route::get('simpanan','Manajer\BuatSimpananController@index')
            ->name('simpanan_index');
            Route::get('simpanan/print','Manajer\BuatSimpananController@index_print')
            ->name('simpanan_index_print');
            Route::get('simpanan/range/{range}','Manajer\BuatSimpananController@index_range')
            ->name('simpanan_index_range');
            Route::get('simpanan/range/{range}/print','Manajer\BuatSimpananController@index_range_print')
            ->name('simpanan_index_range_print');
            
            //Buat Pinjaman
            Route::get('pinjaman','Manajer\BuatPinjamanController@index')
            ->name('pinjaman_index');
            Route::get('pinjaman/range/{range}','Manajer\BuatPinjamanController@index_range')
            ->name('pinjaman_index_range');
            Route::get('pinjaman/print','Manajer\BuatPinjamanController@index_print')
            ->name('pinjaman_index_print');
            Route::get('pinjaman/range/{range}/print','Manajer\BuatPinjamanController@index_range_print')
            ->name('pinjaman_index_range_print');
            Route::get('pinjaman/{id}','Manajer\BuatPinjamanController@show')
            ->name('pinjaman_show');

            Route::get('akun/{id}/password','Manajer\AkunController@password')
            ->name('akun_password')->middleware('check.id');
            Route::put('akun/{id}/password','Manajer\AkunController@password_update')
            ->name('akun_password_update');
        });
    });

    //Login
    Route::get('login',function(){
        return view('login');
    })->name('login');
    Route::post('login','LoginController@login')->name('login_post');
    Route::get('/logout','LoginController@logout')->name('logout');

});
