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
// Route::delete('/deletar/sessão/{id}','SessaoController@destroy')->name('deletarSessao');
// Route::get('/ver/sessão/{id}','SessaoController@show')->name('verSessao');
// Route::put('/update/sessão/{id}','SessaoController@update')->name('updateSessao');
// Route::get('/editar/sessão/{id}','SessaoController@edit')->name('editarSessao');
// Route::post('/inserir/sessão','SessaoController@store')->name('inserirSessao');
// Route::get('/cadastrar/sessão','SessaoController@create')->name('cadastrarSessao');
// Route::get('/listar/sessões','SessaoController@index')->name('listarSessoes');
// Route::delete('/deletar/filme/{id}','FilmeController@destroy')->name('deletarFilme');
// Route::get('/ver/filme/{id}', 'FilmeController@show')->name('verFilme');
// Route::put('/update/filme/{id}','FilmeController@update')->name('updateFilme');
// Route::get('/editar/filme/{id}','FilmeController@edit')->name('editarFilme');
// Route::post('/inserir/filme','FilmeController@store')->name('inserirFilme');
// Route::get('/cadastrar/filme','FilmeController@create')->name('cadastrarFilme');
// Route::get('/listar/filmes','FilmeController@index')->name('listarFilmes');
// Route::delete('/deletar/sala/{id}', 'SalaController@destroy')->name('deletarSala');
// Route::get('/ver/sala/{id}', 'SalaController@show')->name('verSala');
// Route::put('/update/sala/{id}', 'SalaController@update')->name('updateSala');
// Route::get('/editar/sala/{id}', 'SalaController@edit')->name('editarSala');
// Route::post('/inserir/Sala', 'SalaController@store')->name('inserirSala');
// Route::get('/cadastrar/sala', 'SalaController@create')->name('cadastrarSala');
// Route::get('/listar/salas', 'SalaController@index')->name('listarSalas');
Route::get('/', function () {
    return view('welcome');
})->name('/');
Route::resource('sessaos', 'SessaoController');
Route::resource('filmes', 'FilmeController');
Route::resource('salas', 'SalaController');
Route::resource('funcionarios', 'FuncionarioController');
Route::resource('bilhetes', 'BilheteController')->except(['edit', 'update']);

//Admin e Login
Route::get('/admin', 'AuthController@dashboard')->middleware('auth.login')->name('admin.dashboard');
Route::get('/login', 'AuthController@formLogin')->middleware('auth.login')->name('login');
Route::post('/login', 'AuthController@login')->name('login.do');
Route::get('/logout', 'AuthController@logout')->name('logout');
//*************/
