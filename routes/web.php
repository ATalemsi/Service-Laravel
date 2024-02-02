<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/service')->name('service.')->controller(ServiceController::class)->group(function (){
     Route::get('/','index')->name('index');
     Route::get('/new','create')->name('create');
     Route::post('/new','store');
     Route::get('/{service}','show')->where([
         'service'=>'[a-z0-9\-]+'
     ])->name('show');


});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
