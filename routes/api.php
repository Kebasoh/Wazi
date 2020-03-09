<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('client', function() {

    return client::all();

});
Route:: get('client/{id}', function($id){
    return client::find($id);
})

Route:: post('client', function(Request $request){
    return client::create ($request->all);
    )
});

Route:: put('client/{id}', function(Request $request,$id){
    $client = client::findorFail($id);
    $client->update($request->all());

    return $client;
});

Route::delete('articles/{id}', function($id){
    client::find($id)->delete();

    return 204;
})
});
