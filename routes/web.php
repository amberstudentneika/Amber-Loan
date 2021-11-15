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

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', '\App\Http\Controllers\LandingController@landing')->name('landing');
Route::get('/login/employee','\App\Http\Controllers\LoginController@login')->name('login');

Route::middleware(['Auth'])->group(function () {
    Route::get('/dashboard/request/view','\App\Http\Controllers\LoanRequestController@viewLoanRequest')->name('viewLoanRequest');
    Route::get('/dashboard/interview/view','\App\Http\Controllers\InterviewScheduleController@viewInterviewSchedule')->name('viewInterviewSchedule');
    Route::get('/dashboard/loan','\App\Http\Controllers\LoanController@view')->name('viewLoan');
});

Route::get('/home/apply','\App\Http\Controllers\LoanRequestController@loanRequest')->name('loanRequest');
Route::get('/home/loanrequirements','\App\Http\Controllers\LoanController@loanRequirement')->name('loanRequirement');
Route::get('/home/contactus','\App\Http\Controllers\LoanController@contactUs')->name('contactUs');
