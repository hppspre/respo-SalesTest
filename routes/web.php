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



# Get the data
Route::get('/','App\Http\Controllers\fetchDataController@index')->name('/');
Route::get('index','App\Http\Controllers\fetchDataController@index')->name('index');

# Add a new salesRep
Route::get('add-new','App\Http\Controllers\newSalesRepController@index')->name('add-new');
Route::post('add-new-salesRep','App\Http\Controllers\newSalesRepController@addNewSalesPerson')->name('add-new-salesRep');

#update sales persons info
Route::get('get-salesRep-data','App\Http\Controllers\updateSalesRepController@getupdateSalesPersonData')->name('get-salesRep-data');
Route::post('update-salesRep','App\Http\Controllers\updateSalesRepController@updateSalesRepData')->name('update-salesRep');


#drop data
Route::get('drop-sales-person','App\Http\Controllers\updateSalesRepController@dropSalesPerson')->name('drop-sales-person');

