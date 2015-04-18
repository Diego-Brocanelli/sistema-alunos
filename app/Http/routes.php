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

//home page sistema alunos
$app->get('/', [
    'as' => 'index',
    'uses' => '\App\Http\Controllers\UserController@index',
]);
//pequisa de alunos
$app->get('/alunos/pesquisar', [
    'as' => 'select',
    'uses' => '\App\Http\Controllers\UserController@select',
]);
