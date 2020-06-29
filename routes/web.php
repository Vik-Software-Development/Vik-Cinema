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
Route::delete('/deletar/sala/{id}','SalaController@destroy')->name('deletarSala');
Route::get('/ver/sala/{id}', 'SalaController@show')->name('verSala');
Route::put('/update/sala/{id}', 'SalaController@update')->name('updateSala');
Route::get('/editar/sala/{id}','SalaController@edit')->name('editarSala');
Route::post('/inserir/Sala','SalaController@store')->name('inserirSala');
Route::get('/cadastrar/sala','SalaController@create')->name('cadastrarSala');
Route::get('/listar/salas','SalaController@index')->name('listarSalas');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/funcionarios', 'FuncionarioController@index')->name('funcionario.index');

Route::get('/funcionarios/create', 'FuncionarioController@create')->name('funcionario.create');
Route::post('/funcionarios/create', 'FuncionarioController@store')->name('funcionario.create.do');

Route::get('/funcionarios/show/{id}', 'FuncionarioController@show')->name('funcionario.show');

Route::get('/funcionarios/edit/{id}', 'FuncionarioController@edit')->name('funcionario.edit');
Route::post('/funcionarios/edit/{id}', 'FuncionarioController@update')->name('funcionario.edit.do');
Route::post('/funcionarios/destroy/{id}', 'FuncionarioController@destroy')->name('funcionario.destroy');
