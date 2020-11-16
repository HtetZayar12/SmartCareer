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


//For Backend
Route::resource('category','CategoryController');
Route::resource('subcategory','SubcategoryController');
Route::resource('salary','SalaryController');
Route::resource('location','LocationController');

//Frontend

Route::resource('job','JobController');

//Employer And Freelancer
Route::resource('employer','EmployerController');
Route::resource('freelancer','FreelancerController');

Route::get('signin', 'FrontendController@signin')->name('signinpage');
Route::get('signup', 'FrontendController@signup')->name('signuppage');
Route::get('/', 'FrontendController@home')->name('mainpage');
Route::get('profile', 'FrontendController@profile')->name('profilepage');
Route::get('shop', 'FrontendController@shop')->name('shoppage');
Route::get('about', 'FrontendController@about')->name('aboutpage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('user','UserController');



Route::get('find', 'FrontendController@find_freelancer')->name('freelancerpage');
// Route::get('postproject', 'FrontendController@projectform')->name('projectform');


