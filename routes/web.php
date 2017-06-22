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
   // return view('welcome');
    if(Auth::user()){
        return redirect('/home');
    }
    return redirect('/login');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/person', "PersonController@index");



Route::get('/person/create', "PersonController@create");
Route::post('/person/create', "PersonController@postCreate");
Route::post('/person/{id}/delete', "PersonController@postDelete");

Route::get('/person/pdf/{id}', "PDFController@pdfPerson");
Route::get('/person/pdf_announce/{id}', "PDFController@pdfPersonAnnounce");


Route::get('/criminal', "CriminalController@index");
Route::get('/criminal/create', "CriminalController@create");
Route::post('/criminal/create', "CriminalController@postCreate");
Route::post('/criminal/{id}/delete', "CriminalController@postDelete");

Route::get('/criminal/pdf/{id}', "PDFController@pdfCriminal");
Route::get('/criminal/pdf_announce/{id}', "PDFController@pdfCriminalAnnounce");

