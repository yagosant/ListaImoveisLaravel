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

/* Route::get('/', function () { return view('welcome');}); */

Route::get('/',['as' => 'imoveis.index','uses'=>'ImovelController@index']);
Route::get('/imoveis/adicionar',['as' => 'imoveis.adicionar','uses'=>'ImovelController@adicionar']);
Route::post('/imoveis/salvar',['as' => 'imoveis.salvar','uses'=>'ImovelController@salvar']);
Route::get('/imoveis/editar/{id}',['as' => 'imoveis.editar','uses'=>'ImovelController@editar']);
Route::put('/imoveis/atualizar/{id}',['as' => 'imoveis.atualizar','uses'=>'ImovelController@atualizar']);
Route::get('/imoveis/deletar/{id}',['as' => 'imoveis.deletar','uses'=>'ImovelController@deletar']);
Route::get('/imoveis/detalhe/{id}',['as' => 'imoveis.detalhe','uses'=>'ImovelController@detalhe']);
