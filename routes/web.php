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
	$r->get('/installation', ["uses" => "FrontController@portfolio_installations", "as" => "installation_page"]);
	$r->get('/sculpt_perfs', ["uses" => "FrontController@portfolio_sculpt_perfs", "as" => "sculptings_perforations_page"]);
	$r->get('/page/ogoni', ["uses" => "FrontController@portfolio_page_ogoni", "as" => "ogoni_page"]);
	$r->get('/page/biography_of_the_forgotten', ["uses" => "FrontController@portfolio_page_bio_of_forgotten", "as" => "bio_of_forgotten_page"]);
	$r->get('/page/isimagodo', ["uses" => "FrontController@portfolio_page_isimagodo", "as" => "isimagodo_page"]);
	$r->get('/page/prayer_room', ["uses" => "FrontController@portfolio_page_prayer_room", "as" => "prayer_room_page"]);
});
Route::get('/blog', ["uses" => "FrontController@about", "as" => "blog_page"]);
