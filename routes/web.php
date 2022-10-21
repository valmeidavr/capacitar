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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cadastrar', 'HomeController@cadastrar')->name('cadastrar');
Route::post('/cadastrar/store', 'HomeController@cadastrar_salvar')->name('cadastrar-salvar');
Route::get('/agendamento','AgendamentoController@index')->name('agendamento-index');
Route::post('/agendar','AgendamentoController@agendar')->name('agendar');
Route::get('/call_setores/{id}', 'AgendamentoController@call_setores')->name('call-setores');
Route::get('/logout',function(){
    Auth::logout();
    return redirect('/login');
});