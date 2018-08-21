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

Route::get('/', ["uses" => "FrontController@index", "as" => "home_page"]);
Route::get('/about', ["uses" => "FrontController@about", "as" => "about_page"]);
Route::get('/contact', ["uses" => "FrontController@contact", "as" => "contact_page"]);
Route::post('/contact', ["uses" => "ContactController@sendMessage"]);
Route::group(['prefix' => 'portfolio'], function($r){
	$r->get('/', ['uses' => "FrontController@portfolio", "as" => "portfolio_page"]);
	$r->get('/drawing', ["uses" => "FrontController@portfolio_drawings", "as" => "drawings_page"]);
	$r->get('/paintings', ["uses" => "FrontController@portfolio_paintings", "as" => "paintings_page"]);
	$r->get('/installations', ["uses" => "FrontController@portfolio_installation", "as" => "installations_page"]);
});
Route::get('/blog', ["uses" => "FrontController@about", "as" => "blog_page"]);
