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

Route::get('/', function () {
    return view('login');
})->name('home');
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::post('/signup',[
    'uses' =>'clientController@postsignup',
    'as' =>'sign'
]);
Route::post('/signin',[
    'uses' =>'clientController@postsignin',
    'as' =>'signin'
]);
Route::get('/dashboard', [
    'uses'=>'clientController@dashboard',
    'as'=>'dashboard'
]);
Route::post('/cpost',[
    'uses'=>'postController@createpost',
    'as'=>'cpost'
]);
Route::get('/delete/{post_id}',[
    'uses'=>'postController@delete',
    'as'=>'delete'
]);
Route::get('/logout',[
    'uses'=>'clientController@logout',
    'as'=>'logout'
]);