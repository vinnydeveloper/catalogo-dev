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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Listar os devs na tela
Route::get('/devs', 'DevController@index');
// exebir o form de cadastro do dev
Route::get('/dev/cadastro', 'DevController@viewForm');
//cadastrar o dev no banco
Route::post('/dev/cadastro', 'DevController@create');
// exibir form de cadastro da skill
Route::get('/skill/cadastro', 'SkillController@viewForm');
// cadastrar skill no banco
Route::post('/skill/cadastro', 'SkillController@create');

