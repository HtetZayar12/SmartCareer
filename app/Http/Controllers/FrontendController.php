<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;


class FrontendController extends Controller
{
	
	public function signin($value='')
	{
	return view('frontend.signin');
	}

	public function signup($value='')
	{
	return view('frontend.signup');
	}

	public function home($value='')
	{
	return view('frontend.index');
	}

	public function profile($value='')
	{
	return view('frontend.profile');
	}	

	public function find_freelancer($value='')
	{
	$categories=Category::all();
	return view('frontend.find_freelancer',compact('categories'));

	}

	// public function projectform($value='')
	// {
	// return view('frontend.projectform');
	// }
}
