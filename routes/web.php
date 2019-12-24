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
//Route::get('book', 'BookController@index');
Route::resource('book', 'BookController');
Route::get('/', function () {
    return view('welcome');
});
Route::get('menu', 'menuController@index');
Route::get('response', 'ResponseController@index');
Route::post('response', 'ResponseController@index');
Route::resource('rest', 'RestController');
Route::get('display', 'DisplayController@index');
Route::get('blades', 'bladeController@index');

Route::get('validation', 'validationController@index');
Route::post('validation', 'validationController@post');

Route::get('usedb', 'usedbController@index');
Route::post('usedb/insert', 'usedbController@insert');
Route::post('usedb/update', 'usedbController@update');
Route::get('usedb/delete', 'usedbController@delete');

Route::get('cookie', 'CookieController@index');
Route::post('cookie', 'CookieController@post');

Route::get('test', function () {
    return view('test');
});
Route::get('/cookie_test', function (\Illuminate\Http\Request $request) {

    $response = response()->view("cookie_test");
    if($request->input("form_type") === "cookie_update"){
        #$response->withCookie(cookie()->forever('search_default', $request->input("food")));
        $response->cookie(cookie()->forever("search_default",$request->input("food")));
    }
    return $response;

})->name("cookie_test");