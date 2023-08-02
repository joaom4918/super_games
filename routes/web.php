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



Route::get('/',['as'=>"site.home",'uses'=>"HomeController@index"]);
Route::get('admin/games/adicionar',['as'=>"admin.games.adicionar","uses"=>"GamesController@adicionar"]);
Route::post('admin/games/salvar',['as'=>"admin.games.salvar","uses"=>"GamesController@salvar"]);





