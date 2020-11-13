<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
