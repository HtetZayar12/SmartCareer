<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
Use App\Freelancer;
Use App\User;
use App\Subcategory;
use App\Job;
use App\Employer;
use Auth;


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
	$categories=Category::all();
	return view('frontend.index' ,compact('categories'));
	}

	public function profile($value='')
	{
	$users= User::all();
	$freelancers=Freelancer::all();
	$employers=Employer::all();
	return view('frontend.profile',compact('users','freelancers','employers'));
	}

	public function editprofile($value='')
	{
	return view('frontend.editprofile');
	}

	public function shop($value='')
	{
	return view('frontend.shop');
	}

	public function about($value='')
	{
	return view('frontend.howitwork');
	}	

	public function find_freelancer($value='')
	{
	
	$freelancers=Freelancer::all();

	$users = User::all();
	return view('frontend.find_freelancer',compact('freelancers','users'));

	}

	public function freelancerdetail($id)
	{

	$jobs = Job::find($id);
	$freelancers = Freelancer::find($id);
	return view('frontend.freelancerdetail',compact('jobs','freelancers'));
	}

	public function itembysubcategory($id)
	{
		$mysubcategory = Subcategory::find($id);
		return view('frontend.itembysubcategory',compact('mysubcategory'));
	}
}
