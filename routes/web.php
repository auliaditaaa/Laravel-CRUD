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

Route::get('/hai', function () {
	echo "aku ngantuk";   
});

Route::get('/beras', function () {
	return view('nasi');    
});
// pakai controller
Route::get('/terong', 'CapungController@index');

Route::get('/brokoli', 'CapungController@index');

Route::get('/brokoli/dewa', 'CapungController@siti');

// sekarang bikin route untuk customer
Route::get('/Customer', 'CustomerController@index');

Route::get('/Supplier', 'SupplierController@index');

// // bikin route untuk add customer
// Route::get('/Customer', 'CustomerController@create');

// // untuk store dari cust0mer
// Route::get('/Customer/store', 'CustomerController@store');

Route::resource('Customer', 'CustomerController');
Route::resource('Supplier', 'SupplierController');


Route::get('/Employee', 'EmployeeController@index');
Route::get('/Employee', 'EmployeeController@create');
Route::resource('Employee', 'EmployeeController');