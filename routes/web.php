<?php

use Illuminate\Support\Facades\Route;

Route::get('/','AnasayfaController@index')->name('anasayfa');
Route::get('/kategori/{slug_kategoriadi}','KategoriController@index')->name('kategori');

Route::view('/urun','urun');
Route::view('/sepet','sepet');

