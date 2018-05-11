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

//Route::get('/', function () {
//    return view('welcome');
//});


// FRONT ROUTER
Route::group([
    'as'           => 'front.',
    'middleware'   => 'web'
], function ($router) {

    // Do not login
    $router->get('/home', [
        'as'   => 'home',
        'uses' => 'Front\HomeController@index'
    ]);
    $router->get('/team', [
        'as'   => 'team',
        'uses' => 'Front\HomeController@team'
    ]);
    $router->get('/point-table', [
        'as'   => 'point_table',
        'uses' => 'Front\HomeController@pointTable'
    ]);
    $router->get('/fixture', [
        'as'   => 'fixture',
        'uses' => 'Front\HomeController@fixture'
    ]);
    $router->get('/group', [
        'as'   => 'group',
        'uses' => 'Front\HomeController@group'
    ]);
    $router->get('/result', [
        'as'   => 'result',
        'uses' => 'Front\HomeController@result'
    ]);
});


// ADMIN ROUTER
Route::group([
    'namespace'    => 'Admin',
    'prefix'       => 'cpanel',
    'as'           => 'admin.',
    'middleware'   => 'web'
], function ($router) {
    // Authentication Routes...
    $router->get('login', 'AuthController@showLoginForm')->name('login');
    $router->post('login', 'AuthController@login');
    $router->get('logout', 'AuthController@logout')->name('logout');

    $router->group([
        'middleware' => ['auth.admin'],
    ], function ($router) {
        $router->get('/', [
            'as'   => 'dashboard',
            'uses' => 'DashBoardController@index',
        ]);
        $router->get('/matches', [
            'as'   => 'matches',
            'uses' => 'MatchController@index',
        ]);
        $router->match(['get', 'post'], 'matches/edit/{matchId}', [
            'as'   => 'matches.edit',
            'uses' => 'MatchController@edit',
        ]);
        $router->match(['get', 'post'], 'matches/delete/{matchId}', [
            'as'   => 'matches.delete',
            'uses' => 'MatchController@delete',
        ]);
        $router->get('/users', [
            'as'   => 'users',
            'uses' => 'UsersController@index',
        ]);
    });
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
