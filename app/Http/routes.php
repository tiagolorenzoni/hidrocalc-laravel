<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', 'PagesController@index'); //Acesso principal

/* Route::get('/Aba_UHBC', 'PrototipoController@uhbc_aba'); //Acesso calculos
  Route::get('/Leituras_UHBC', 'PrototipoController@uhbc_leitura'); //Acesso
  Route::get('/Formulario_UHBC', 'PrototipoController@uhbc_formulario'); //Acesso
  Route::get('/Graficos', 'PrototipoController@uhbc_grafico'); //Acesso
 */

//Rotas chamadas GET para UHBC

Route::get('UHBC/cota_uhbc', 'Cota_volume_uhbcController@index');
Route::post('UHBC/cota_uhbc/buscar', 'Cota_volume_uhbcController@buscar');

Route::get('UHBC/turbinada_uhbc', 'Vazao_turbinada_uhbcController@index');
Route::get('UHBC/vertida_uhbc', 'Vazao_vertida_uhbcController@index');
Route::get('UHBC/sanitaria_uhbc', 'Vazao_sanitaria_uhbcController@index');

Route::get('UHBC/vertida', 'Vazao_vertida_uhbcController@todos');

//Rotas chamadas POST para UHBC
Route::get('UHBC/dados_uhbc', 'Dados_uhbcController@all');
Route::get('UHBC/criar', 'Dados_uhbcController@create');
Route::post('UHBC/inserir', 'Dados_uhbcController@store');
Route::get('UHBC/detalhar/{id_bc}', 'Dados_uhbcController@show');
Route::get('UHBC/edita/{id_bc}', 'Dados_uhbcController@edit');
Route::post('UHBC/edita/{id_bc}', 'Dados_uhbcController@update');
Route::get('UHBC/deletar/{id_bc}', 'Dados_uhbcController@destroy');


/* exemplos de verbos HTTP
 * Route::get($uri, $callback); */

//Rotas Padrão
Route::get('/', function() {
    return View::make('home');
});
Route::get('/login', function() {
    return View::make('login');
});

//Rotas para teste
Route::get('/forms', function() {
    return View::make('form');
});
Route::get('/tables', function() {
    return View::make('table');
});
