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
    return view('accueil');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hotel-room', function () {
    return view('hotel-room');
});

Route::get('/hotels', function () {
    return view('hotels');
});

Route::get('/message', function () {
    return view('message');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/tour-place', function () {
    return view('tour-place');
});

Route::get('/tours', function () {
    return view('tours');
});

Route::get('/voyages', "VoyageController@index");

Route::get('/voyage/{id}', "VoyageController@show");


Route::group(['prefix'=>'admin'],function () {
    Route::get('/', "AdminController@index")->middleware('admin');

    Route::get('voyages/add', "AdminController@create")->middleware('admin');
    Route::post('voyages/add', "AdminController@store")->middleware('admin');

    Route::get('voyages/edit/{id}', "AdminController@edit")->middleware('admin');
    Route::put('voyages/update/{id}', "AdminController@update")->middleware('admin');

    Route::get('voyages/delete/{id}', "AdminController@delete")->middleware('admin');
    Route::delete('voyages/delete/{id}', "AdminController@destroy")->middleware('admin');

});


//alternative routes


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
