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
Route::get('admin/games/lista_jogos',['as'=>"admin.games.lista_jogos","uses"=>"GamesController@lista_jogos"]);
Route::get('admin/games/excluir_game/{id}',['as'=>"admin.games.excluir_game","uses"=>"GamesController@excluir_game"]);
Route::get('admin/games/editar_game/{id}',['as'=>"admin.games.editar_game","uses"=>"GamesController@editar_game"]);
Route::put('admin/games/atualizar_game/{id}',['as'=>"admin.games.atualizar_game","uses"=>"GamesController@atualizar_game"]);
Route::get('admin/games/descricao/{id}',['as'=>"admin.games.descricao","uses"=>"GamesController@descricao"]);
#########################

Route::get('listas/lista_super_nintendo',['as'=>"listas.lista_super_nintendo","uses"=>"GamesController@lista_super_nintendo"]);
Route::get('listas/lista_mega_drive',['as'=>"listas.lista_mega_drive","uses"=>"GamesController@lista_mega_drive"]);
Route::get('listas/lista_nes',['as'=>"listas.lista_nes","uses"=>"GamesController@lista_nes"]);
Route::get('listas/lista_master_system',['as'=>"listas.lista_master_system","uses"=>"GamesController@lista_master_system"]);






