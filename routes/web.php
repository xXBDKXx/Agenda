<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[\App\http\Controllers\LoginUsuario::class,'Login']);
Route::get('/cadastrar',[\App\http\Controllers\cadastrarUsuario::class,'cadastrar']);
Route::get('/home',[\App\http\Controllers\homeControl::class,'Home']);
Route::post('/cadastrar/salvar',[\App\Http\Controllers\cadastrarUsuario::class,'store']);
Route::post('/check',[\App\Http\Controllers\LoginUsuario::class,'check']);