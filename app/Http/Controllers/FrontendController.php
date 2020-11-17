<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
Use App\Freelancer;
Use App\Employer;
Use App\User;
Use App\Subcategory;
Use App\Job;
Use App\Location;
Use App\Salary;

Use Auth;


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
	return view('frontend.profile');
	}

	public function shop($value='')
	{
	$employers = Auth::user()->id;
	// dd($employers);	
	return view('frontend.shop',compact('employers'));

	}

	public function about($value='')
	{
	return view('frontend.howitwork');
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

	public function jobdetail($id)
	{
	$job = Job::find($id);
	return view('frontend.jobdetail',compact('job'));
	}

	public function projectform($value='')
	{
	$subcategories = Subcategory::all();
    $categories = Category::all();
    $locations = Location::all();
    $users = User::all();
    $salaries = Salary::all();
    return view('frontend.projectform',compact('users','categories','subcategories','salaries','locations'));
	}
}
