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
    return view('frontend/signin');
});
Route::get('/signup', function () {
    return view('frontend/signup');
});

//For Backend
Route::resource('category','CategoryController');
Route::resource('subcategory','SubcategoryController');
Route::resource('salary','SalaryController');
Route::resource('location','LocationController');
