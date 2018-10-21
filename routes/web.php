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
    
Route::group(['middleware' => ['web']], function (){
    
    //strona główna
    Route::get("/", "InfoController@index");

    //strona kontakt
    Route::get("/contact", "InfoController@contact");

    //sciezki dla kontrolera info
    Route::get('/info', 'InfoController@indexLastMovie');
    Route::get('/info/movies', 'InfoController@indexMovies');
    Route::get('/info/actors', 'InfoController@indexActors');
    Route::get('/info/show/movie/{id}', 'InfoController@showMovie');
    Route::get('/info/show/actor/{id}', 'InfoController@showActor');
    // ścieżka dla admina
    Route::get('/admin', 'InfoController@admin');
    
    Route::get('/home', 'HomeController@index')->name('home');
    Auth::routes();
});

//SEKCJA ADMIN

//kontrolery zasobów

Route::group(['middleware' => ['web']], function (){

    Route::prefix('admin')->group(function () {
        Route::resource('actors', 'Admin\ActorController');
        Route::resource('movies', 'Admin\MovieController');
        Route::resource('clients', 'Admin\ClientController');
        Route::resource('employers', 'Admin\EmployerController');
    });
});









