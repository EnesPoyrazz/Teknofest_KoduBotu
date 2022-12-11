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

Route::get('/', function() {
    return view('home');
});
Route::get('/girisyap', function(){
    return view("giris");
});
Route::get('/kayitol', function(){
    return view('kayit');
});
Route::get('/uyeler', function(){
    return view('uyeler');
});
Route::get('/Anasayfa', function(){
    return view("home");
});
Route::get('/projeler', function(){
    return view("projeler");
});
Route::get('/hakkimizda', function(){
    return view("hakkimizda");
});
Route::get('projeler/proje1', function(){
    return view("proje1tanitim");
});