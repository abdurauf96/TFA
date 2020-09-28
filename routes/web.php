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

Route::get('/', 'IndexController@index');

Route::get('/lang/{locale}', function($locale){
	session(['locale'=>$locale]);
	return back();
});

Route::get('/jobs', 'IndexController@jobs');

Route::get('/posts/{category?}/{slug?}', 'PostController@posts');
Route::get('/post/{slug}', 'PostController@view');

// Route::get('/posts/{any?}', function() {
// 	return view('allPosts');
//  })->where('any', '.*')->name('posts');
//  Route::get('/category/{any?}', function() {
// 	return view('allPosts');
//  })->where('any', '.*');
 
Route::get('/treners', 'IndexController@treners');
Route::get('/education', 'IndexController@education');
Route::get('/aboutUs', 'IndexController@aboutUs');
Route::get('/students', 'IndexController@students');
Route::get('/media', 'IndexController@media')->name('media');
Route::get('/contact', 'IndexController@contact');
Route::get('/faq', 'IndexController@faq')->name('faq');
Route::get('/subscribe', 'IndexController@subscribe')->name('subscribe');

Route::post('/send_resume', 'ContactController@send_resume')->name('send_resume');

//ajax
Route::post('/get_job', 'ContactController@getJob');
Route::post('/get_faq', 'ContactController@getFaq');
Route::post('/get_student', 'ContactController@getStudent');
Route::post('/get_trener', 'ContactController@getTrener');
Route::post('/getStudentsByAge', 'ContactController@getStudentsByAge');
Route::post('/getTrenersByAge', 'ContactController@getTrenersByAge');
Route::post('/getFeature', 'ContactController@getFeature');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
