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

//Homepage
//Route::get('/', function () {
//    return view('welcome');
//});


//Controller Method
//INDEX
Route::get('/', 'PagesController@weland');
Route::get('/signin', 'PagesController@signin');
Route::post('/Dashboard','loginController@Dashboard');
Route::post('/Dashboard/insert','loginController@insert');
//Route::get('/display','loginController@display');

//About
//Route::get('/about', 'PagesController@about');


/*Without Controller
//About
Route::get('/about', function () {
    return view('pages.about');
});
*/



//Dynamic
/*
Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user '.$name. 'with ID of ' .$id;
});
*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
