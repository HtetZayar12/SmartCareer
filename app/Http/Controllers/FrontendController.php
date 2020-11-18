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
	$employers = Auth::user()->id;
	return view('frontend.shop',compact('employers'));
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
