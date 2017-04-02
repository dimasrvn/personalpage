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
  // === SELECT ===
  $blogs = DB::table('blog')->limit(4)->orderBy('id', 'DESC')->get();
  $sliders = DB::table('slider')->limit(4)->orderBy('id', 'DESC')->get();
  //debug
  //dd($sliders);
  return view('welcome', ['blogs' => $blogs, 'sliders' =>$sliders]);

});

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{id}', 'BlogController@show');
