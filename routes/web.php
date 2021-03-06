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

Route::middleware('role:admin')->group(function () {
	Route::resource('category','CategoryController');
	Route::resource('subcategory','SubcategoryController');
	Route::resource('salary','SalaryController');
	Route::resource('location','LocationController');
});

//Frontend
Route::middleware('role:employer')->group(function () {
	Route::get('postproject', 'FrontendController@projectform')->name('projectform');
	Route::get('shop', 'FrontendController@shop')->name('shoppage');
	Route::get('myproject', 'FrontendController@project')->name('project');

});
Route::resource('job','JobController');

Route::resource('job','JobController');


//Employer And Freelancer
Route::resource('employer','EmployerController');
Route::resource('freelancer','FreelancerController');

Route::get('signin', 'FrontendController@signin')->name('signinpage');
Route::get('signup', 'FrontendController@signup')->name('signuppage');
Route::get('/', 'FrontendController@home')->name('mainpage');
Route::get('profile', 'FrontendController@profile')->name('profilepage');
Route::get('editprofile', 'FrontendController@editprofile')->name('editprofilepage');

Route::get('about', 'FrontendController@about')->name('aboutpage');
Route::get('projectform', 'FrontendController@projectform')->name('projectform');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('user','UserController');

Route::get('find', 'FrontendController@find_freelancer')->name('freelancerpage');
Route::get('freelancerdetail/{id}','FrontendController@freelancerdetail')->name('freelancerdetail');

Route::get('itembysubcategory/{id}','FrontendController@itembysubcategory')->name('itembysubcategory');
Route::get('jobbysubcategory/{id}','FrontendController@jobbysubcategory')->name('jobbysubcategory');
Route::get('jobdetail/{id}','FrontendController@jobdetail')->name('jobdetail');

// Route::get('subtract/{id}', 'EmployerController@subtract')->name('employer.subtract');
Route::get('detail/{id}', 'JobController@detail')->name('job.detail');
Route::post('confirm/{id}', 'JobController@confirm')->name('job.confirm');
Route::post('delete/{id}', 'JobController@delete')->name('job.delete');
Route::post('applied_detail', 'FrontendController@applied_detail')->name('applied_detail');



