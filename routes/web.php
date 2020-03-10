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

// Route::get('/', function () {
//     //return view('welcome');
//     return 'hello world';
// });
// Route::get('/', 'PagesController@index');
// Route::get('/availability', 'PagesController@available');
// Route::get('/create', 'PagesController@create_content');
// Route::get('create', 'PagesController@create_content');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('client', function() {

//     return client::all();

// });
// Route:: get('client/{id}', function($id){
//     return client::find($id);
// });

// Route::post('client', function(Request $request){
//     return client::create ($request->all);
    
// });

// Route:: put('client/{id}', function(Request $request,$id){
//     $client = client::findorFail($id);
//     $client->update($request->all());

//     return $client;
// });

// Route::delete('articles/{id}', function($id){
//     client::find($id)->delete();

//     return 204;
// });

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'wazi'], function () use ($router) {
    Route::get('client', 'clientController@index');
    Route::get('client/{client}', 'clientController@show');
    Route::post('client', 'clientController@store');
    Route::put('client/{client}', 'clientController@update');
    Route::delete('client/{client}', 'clientController@delete');
    Route::post('register/{client}', 'Auth\RegisterController@register');
});