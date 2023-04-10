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

Route::get('/', function () {
    return view('welcome');
});
route::prefix('admin')->middleware('auth')->group(function() {
    route::get('/home', function() {
        return view('home');
    });    
    Route::resource('employees', 'EmployeesController');
    route::get('/employees/{id}/certificaterequest', 'EmployeesController@certificaterequest')->name('employees.certificaterequest');
    route::get('/employees/{id}/vacationrequest', 'EmployeesController@vacationrequest')->name('employees.vacationrequest');
});






