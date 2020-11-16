<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
Use App\Freelancer;
Use App\User;


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
	
	$freelancers=Freelancer::all();
	$categories=Category::all();
	$users = User::all();
	return view('frontend.find_freelancer',compact('freelancers','categories','users'));

	}

	public function freelancerdetail($id)
	{

	$freelancers = Freelancer::find($id);
	return view('frontend.freelancerdetail',compact('freelancers'));
	}

	// public function projectform($value='')
	// {
	// return view('frontend.projectform');
	// }
}
