<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/index', function () {
    return view('index');

});






Route::get('/inst','InstitutionController@index');
Route::get('inst/create','InstitutionController@create')->name('inst.create');
Route::post('inst/store','institutionController@store')->name('inst.store');
Route::get('/inst/edit/{id}', 'InstitutionController@edit')->name('inst.edit');
Route::post('/inst/update/{id}', 'InstitutionController@update')->name('inst.update');
Route::get('/inst/show','InstitutionController@show')->name('inst.show');
Route::get('inst/delete/{id}','InstitutionController@destroy')->name('inst.delete');




Route::get('/emp','EmployeeController@index');
Route::get('/employees/create','EmployeeController@create')->name('employees.create');
Route::post('employees/store','EmployeeController@store')->name('employees.store');
Route::get('/employees/edit/{id}', 'EmployeeController@edit')->name('employees.edit');
Route::post('/employees/update/{id}', 'EmployeeController@update')->name('employees.update');
Route::get('/employees/show','EmployeeController@show')->name('employees.show');
Route::get('employees/delete/{id}','EmployeeController@destroy')->name('employees.delete');



Route::get('/type','TypeController@index');
Route::get('type/create','TypeController@create')->name('type.create');
Route::post('type/store','TypeController@store')->name('type.store');
Route::get('/type/edit/{id}', 'TypeController@edit')->name('type.edit');
Route::post('/type/update/{id}','TypeController@update')->name('type.update');
Route::get('/type/show','TypeController@show')->name('type.show');
Route::get('type/delete/{id}','TypeController@destroy')->name('type.delete');


Route::get('/sec','SectiontController@index');
Route::get('section/create','SectiontController@create')->name('section.create');
Route::post('section/store','SectiontController@store')->name('section.store');
Route::get('/section/edit/{id}','SectiontController@edit')->name('section.edit');
Route::post('/section/update/{id}','SectiontController@update')->name('section.update');
Route::get('/section/show','SectiontController@show')->name('section.show');
Route::get('section/delete/{id}','SectiontController@destroy')->name('section.delete');


Route::get('/sec','JobController@index');
Route::get('job/create','JobController@create')->name('job.create');
Route::post('job/store','JobController@store')->name('job.store');
Route::get('/job/edit/{id}', 'JobController@edit')->name('job.edit');
Route::post('/job/update/{id}','JobController@update')->name('job.update');
Route::get('/job/show','JobController@show')->name('job.show');
Route::get('job/delete/{id}','JobController@destroy')->name('job.delete');



/*Route::get('/del','delegatecontroller@index');
Route::get('/dcreate','delegatecontroller@create');
Route::post('/dstore','delegatecontroller@store');
Route::post('/dshow','delegatecontroller@show');
*/




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
