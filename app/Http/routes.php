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

Route::get('/', function () {
    return view('home');
});
Route::get('/about2', 'MemberController@show');
//
//Route::get('/news', function(){
//    return view('news');
//});

Route::get('/services', function(){
    return view('services');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/faq', function(){
    return view('faq');
});
Route::get('/memberDetail/{id}', 'MemberController@memberDetails');
Route::get('/a1', function(){
    return view('aboutDetailed1');
});
Route::get('/a2', function(){
    return view('aboutDetailed2');
});
Route::get('/a3', function(){
    return view('aboutDetailed3');
});

Route::get('/mydoc', function(){
    return view('mydoc');
});
//
//Route::get('/admin',  'AdminController@manage');
//Route::post('/admin','AdminController@add');

Route::post('/contactMe','PostsController@contactSend');
Route::post('/deleteMember', ['middleware' => 'auth', 'uses' =>  'MemberController@delete']);
Route::post('/editMember', ['middleware' => 'auth', 'uses' =>  'AdminController@editMember']);
Route::get('/newMember',  ['middleware' => 'auth', 'uses' => 'MemberController@index']);
Route::post('/addMember', ['middleware' => 'auth', 'uses' => 'MemberController@add']);
Route::post('/editedMember', ['middleware' => 'auth', 'uses' => 'MemberController@editedMember']);
Route::post('/passChange','AdminController@changePassword');
Route::post('/deleteCategory', ['middleware' => 'auth', 'uses' => 'AdminController@deleteCategory']);
Route::post('/createTag', ['middleware' => 'auth', 'uses' => 'AdminController@addTag']);
Route::post('/deleteTag', ['middleware' => 'auth', 'uses' => 'AdminController@deleteTag']);
Route::post('/joinTag', ['middleware' => 'auth', 'uses' => 'AdminController@joinTag']);
Route::post('/deletePost', ['middleware' => 'auth', 'uses' => 'AdminController@deletePost']);
Route::post('/editPost', ['middleware' => 'auth', 'uses' => 'AdminController@editPost']);
Route::post('/editedPost', ['middleware' => 'auth', 'uses' => 'PostsController@editedPost']);
Route::get('/admin', ['middleware' => 'auth', 'uses' =>  'AdminController@manage']);
Route::post('/admin',['middleware' => 'auth', 'uses' => 'AdminController@add']);
Route::get('/news', 'PostsController@index');
Route::get('/news/create', ['middleware' => 'auth', 'uses' => 'PostsController@create']);
Route::get('/news/category/{id}', 'PostsController@categoryShow');
Route::get('/news/tags/{id}', 'PostsController@tagShow');
Route::get('/news/{id}', 'PostsController@show');
Route::post('/news', 'PostsController@store');

// Authentication routes...
Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('/auth/register', 'Auth\AuthController@getRegister');
Route::post('/auth/register', 'Auth\AuthController@postRegister');


//Password Reset
// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');


//===============================================================//
//                JSON API CALLS
//===============================================================//
Route::get('/getAllPosts', 'PostsController@getAllPosts');
Route::get('/getAllCategories', 'PostsController@getAllCategories');
Route::get('/getPost/{id}', 'PostsController@getPost');
Route::get('/getTags', 'PostsController@getTags');
Route::get('/getCategoryPost/{id}', 'PostsController@getCategoryPost');
Route::get('/getTagPost/{id}', 'PostsController@getTagPost');