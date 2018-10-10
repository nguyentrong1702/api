<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('jwt.auth')->get('users', function(Request $request) {
//     return auth()->user();
// });

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::get('register', 'UserController@getRegister');
    Route::post('register', 'UserController@register');

    Route::get('login', 'UserController@getLogin');
    Route::post('login', 'UserController@login');

});







// Route::resource('/users', 'UserApiController');


