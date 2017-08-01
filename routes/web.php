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

//Route::get('/test', function () {
//    $user = \App\User::find(1);
//
//    $posts = $user->posts;
//
//    foreach($posts as $post){
//        echo $post->id.'<br>';
//        echo $post->body.'<br>';
//    }
//});


Auth::routes();


Route::group(['middleware' => ['auth']], function () {

    Route::get('/', 'HomeController@index')->name('home');

    Route::post ('/createpost', [
        'uses' => 'HomeController@postCreatePost',
        'as' => 'post.create'
    ]);
});