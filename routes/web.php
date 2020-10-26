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
    return view('welcome');
});

Auth::routes();

Route::get('/', function () {
    return redirect('/fr');
});

Route::get('/home', 'HomeController@index');

Route::put('/home', 'HomeController@update');

Route::put('/home/create', 'HomeController@create');

Route::get('fr/', 'welcomeController@index');

Route::resource('fr/welcome', 'welcomeController');

Route::resource('fr/research_axes', 'AxeController');

Route::resource('fr/members', 'MemberController');

Route::resource('fr/research_projects', 'ProjectController');

Route::resource('fr/scientific_events', 'EventController');

Route::resource('fr/equipments', 'EquipmentController');

Route::resource('fr/publications', 'PublicationController');

Route::resource('fr/contact', 'InfoController');



Route::get('en/', 'EnPagesController@WelcomeIndex');

Route::get('en/research_axes', 'EnPagesController@AxeIndex');

Route::get('en/members', 'EnPagesController@MemberIndex');

Route::get('en/members/{id}', 'EnPagesController@MemberShow')->where('id','[0-9]+');

Route::get('en/research_projects', 'EnPagesController@ProjectIndex');

Route::get('en/research_projects/{id}', 'EnPagesController@ProjectShow')->where('id','[0-9]+');

Route::get('en/scientific_events', 'EnPagesController@EventIndex');

Route::get('en/scientific_events/{id}', 'EnPagesController@EventShow')->where('id','[0-9]+');

Route::get('en/equipments', 'EnPagesController@EquipmentIndex');

Route::get('en/publications', 'EnPagesController@PublicationIndex');

Route::get('en/publications/{id}', 'EnPagesController@PublicationShow')->where('id','[0-9]+');

Route::get('en/contact', 'EnPagesController@InfoIndex');

Auth::routes(compact('choix'));

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
