<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/courtClerkHome',function(){return view('courtClerkHome');});
Route::get('/sysAdminHome',function(){return view('sysAdminHome');});

Route::get('/editCitation',function(){return view('editCitation');});
Route::get('/createCitation',function(){return view('createCitation');});

Route::get('/viewCitation',function(){return view('viewCitation');});
Route::get('/viewSummary',function(){return view('viewSummary');});
Route::get('/viewPoliceOfficerManual',function(){return view('viewPoliceManual');});
Route::get('/viewCourtPersonnelManual',function(){return view('viewCourtPersonnelManual');});


Route::get('/viewCitationCourtClerk',function(){return view('viewCitationCourtClerk');});
Route::get('/viewClerk',function(){return view('viewClerk');});
Route::get('/editCitationCourtClerk',function(){return view('editCitationCourtClerk');});
Route::get('/editCitationSysAdmin',function(){return view('editCitationSysAdmin');});
Route::get('/createAccount',function(){return view('sysAdminCreateAccount');});

Route::get('/viewSummaryOffender',function(){return view('viewSummaryOffender');});
Route::get('/pay',function(){return view('pay');});

Route::get('/policeOfficer',function(){return view('policeOfficerManual');});
Route::get('/courtPersonnel',function(){return view('courtPersonnelManual');});
Route::get('/sysAdmin',function(){return view('sysAdminManual');});
Route::get('/roles',function(){return view('roles');});

