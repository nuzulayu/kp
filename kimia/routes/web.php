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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(); 


//////////////////////////// Admin///////////////// 
Route::get('/login', function(){
	return view('admin.login');
});

Route::get('/c', function(){
	return view('admin.barang.databarang.home');
});

Route::group(['prefix' => 'buku'], function(){
    // Halaman Utama
    Route::get('/all', 'Buku\BukuController@all');
    Route::get('/disini', 'Buku\BukuController@disini');
    Route::get('/disana', 'Buku\BukuController@disana');


    // Disini
    Route::group(['prefix' => 'disini'], function(){
        Route::get('/create', 'Buku\DisiniController@create');
        Route::post('/create/submit','Buku\DisiniController@create_submit');
        Route::get('/edit', 'Buku\DisiniController@edit');
        Route::put('/edit/submit','Buku\DisiniController@edit_submit');
        Route::delete('/delete/{id}', 'Buku\DisiniController@delete')->name('disini.delete');
    });

    //Disana
    Route::group(['prefix' => 'disana'], function(){
        Route::get('/create', 'Buku\DisanaController@create');
        Route::post('/create/submit','Buku\DisanaController@create_submit');
        Route::get('/edit', 'Buku\DisanaController@edit');
        Route::put('/edit/submit','Buku\DisanaController@edit_submit');
        Route::delete('/delete/{id}', 'Buku\DisanaController@delete')->name('disana.delete');
    });
});

Route::group(['prefix' => 'peminjam'], function(){
    Route::get('/', 'Peminjam\PeminjamController@home');
});






