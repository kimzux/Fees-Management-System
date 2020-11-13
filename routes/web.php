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
    return view('auth.login');
});
// Route::get('/userdashboard', function () {
//     return view('user.userdashboard');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');
Route::get('/user', 'UserController@index')->name('user');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/admission', 'AdmissionController@index')->name('admission');
Route::get('/studentsearch', 'SearchStudentController@index')->name('search');
Route::get('/fees', 'FeeController@index')->name('fee');
Route::get('/branch', 'BranchController@index')->name('branch');
Route::get('/batch', 'BatchController@index')->name('batch');
Route::get('/academic_year', 'AcademicYearController@index')->name('academic year');
Route::get('/check_payment', 'CheckPaymentController@index')->name('check_payment');
Route::get('/check_due', 'CheckDueAmountController@index')->name('check_due');
Route::get('/userdashboard', 'UserDashboardController@show');
// Route::get('/profile', 'UserDashboardController@userprofile');
Route::post('/admission', 'StudentsController@store');
Route::post('/batch', 'BatchController@store');
Route::post('/admission', 'StudentsController@import');
// Route::resource('branches', 'BranchesController');
// Route::resource('concession', 'ConcessionController');
// Route::resource('fees', 'feesController');
// Route::resource('payment', 'PaymentController');
// Route::resource('department', 'DepartmentController');
// Route::resource('refund', 'RefundController');
