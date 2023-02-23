<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    Route::get('/companies', 'API\CompanyController@index');
    Route::post('/companies', 'API\CompanyController@store');
    Route::get('/companies/{id}', 'API\CompanyController@show');
    Route::put('/companies/{id}', 'API\CompanyController@update');
    Route::delete('/companies/{id}', 'API\CompanyController@destroy');
});

