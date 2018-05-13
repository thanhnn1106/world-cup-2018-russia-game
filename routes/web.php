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
// AUTH ROUTER
Route::group([
    'as'           => 'auth.',
    'middleware'   => 'web'
], function ($router) {
    $router->group([
        'middleware' => ['web'],
    ], function ($router) {
        $router->post('auth/login', [
            'as'   => 'login',
            'uses' => 'Auth\LoginController@login'
        ]);
        $router->get('logout', [
            'as'   => 'logout',
            'uses' => 'Auth\LoginController@logout'
        ]);
    });
});

$router->group([
    'namespace'  => 'Front',
    'as'         => 'front.',
    'middleware' => 'web',
], function ($router) {
    // Do not login
    $router->get('/home', [
        'as' => 'home',
        'uses' => 'HomeController@index'
    ]);
    $router->get('/team', [
        'as' => 'team',
        'uses' => 'HomeController@team'
    ]);
    $router->get('/user-ranking', [
        'as' => 'user_ranking',
        'uses' => 'UserRankingController@index'
    ]);
    $router->get('/matches', [
        'as' => 'matches',
        'uses' => 'MatchesController@index'
    ]);
    $router->get('/group', [
        'as' => 'group',
        'uses' => 'HomeController@group'
    ]);
    $router->get('/result', [
        'as' => 'result',
        'uses' => 'HomeController@result'
    ]);
    // Require login
    $router->group([
        'middleware' => ['auth.front']
    ], function($router) {
        
    });
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
        $router->match(['get', 'post'], 'users/add', [
            'as'   => 'users.add',
            'uses' => 'UsersController@add',
        ]);
        $router->match(['get', 'post'], 'users/edit/{userId}', [
            'as'   => 'users.edit',
            'uses' => 'UsersController@edit',
        ]);
        $router->match(['get', 'post'], 'users/delete/{userId}', [
            'as'   => 'users.delete',
            'uses' => 'UsersController@delete',
        ]);
    });
});

Auth::routes();

Route::get('/', 'Front\HomeController@index')->name('home');
