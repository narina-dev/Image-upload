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
    return view('welcome');
 });
Route::view('upload',"upload");
Route::view('display',"display");
Route::post('/ImageUpload','testController@upload')->name('ImageUpload');
Route::get('/DisplayImages','testController@displayImages');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/avatar', 'Profile\ProfileController@profile');

Route::post('/profile','Profile\ProfileController@update_avatar');


 require __DIR__ . '/profile/profile.php';


