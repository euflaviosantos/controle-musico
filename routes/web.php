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
    $dados = array(
        'videos'=>\App\Video::all()
    );
    return view('index', $dados);
});

Auth::routes();

Route::group(['middleware'=>'auth'], function(){
    Route::get('/admin', function(){
        return view('admin.index');
    });
    Route::get('/admin/index', 'HomeController@index');
    Route::resource('/admin/videos', 'VideoController');
    Route::resource('/admin/eventos', 'EventoController');    
});



Route::get('/home', 'HomeController@index')->name('home');
