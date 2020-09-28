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

Route::post('/send_message', 'ContactController@sendMessage');
Route::post('/contact', 'ContactController@contact');

Route::get('/posts/{locale}', 'PostController@getPosts');
Route::get('/posts/{id}/{locale}', 'PostController@viewPost');

Route::get('/categories/{id}/{locale}', 'PostController@getPostByCatId');
Route::get('/categories/{locale}', 'PostController@getCategories');

Route::get('/treners/{locale}', 'VueController@allTreners');
Route::post('/search_trener/{key}', 'VueController@searchTrener');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
