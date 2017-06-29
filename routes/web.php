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


Route::get('/search', "SearchController@index");
//Route::post('/person/{id}/delete/{keyword}', "SearchController@personDelete");
//Route::post('/criminal/{id}/delete/{keyword}', "SearchController@criminalDelete");
//Route::post('/geenral_place/{id}/delete/{keyword}', "SearchController@generalPlaceDelete");

//Route::get('/afterSave/{name}', "SearchController@afterSavePersonWithName");
//Route::get('/afterSave/{name}/{identity}', "SearchController@afterSavePersonWithIdentity");
//Route::get('/afterSave/{name}/{identity}', "SearchController@after");

Route::get('/person', "PersonController@index");
Route::get('/person/create', "PersonController@create");
Route::post('/person/create', "PersonController@postCreate");
Route::post('/person/{id}/delete', "PersonController@postDelete");

Route::get('/person/pdf/{id}', "PDFController@pdfPerson");
Route::get('/person/pdf_announce/{id}', "PDFController@pdfPersonAnnounce");


Route::get('/general_place', "GeneralPlaceController@index");
Route::get('/general_place/create', "GeneralPlaceController@create");
Route::post('/general_place/create', "GeneralPlaceController@postCreate");
Route::post('/general_place/{id}/delete', "GeneralPlaceController@postDelete");
Route::get('/general_place/{id}/map', "GeneralPlaceController@addMap");
Route::post('/general_place/{id}/map/create', "GeneralPlaceController@postAddMap");
Route::get('/general_place/pdf/{id}', "PDFController@pdfGeneralPlace");
Route::get('/general_place/pdf_announce/{id}', "PDFController@pdfGeneralPlaceAnnounce");
Route::get('/general_place/map', 'GeneralPlaceController@map');



Route::get('/crime_place/create', "CrimePlaceController@create");
Route::post('/crime_place/create', "CrimePlaceController@postCreate");


Route::get('/criminal', "CriminalController@index");
Route::get('/criminal/create', "CriminalController@create");
Route::post('/criminal/create', "CriminalController@postCreate");
Route::post('/criminal/{id}/delete', "CriminalController@postDelete");

Route::get('/criminal/pdf/{id}', "PDFController@pdfCriminal");
Route::get('/criminal/pdf_announce/{id}', "PDFController@pdfCriminalAnnounce");


