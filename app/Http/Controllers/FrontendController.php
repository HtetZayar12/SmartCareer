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
	$subcategories = Subcategory::all();
	return view('frontend.index' ,compact('categories','subcategories'));
	}

	public function profile($value='')
	{
	// $jobs = Job::where('user_id',$user)->get();
	$freelancers=Freelancer::all();
	$employers=Employer::all();
	$user = Auth::user()->id;
	$jobs = Job::where('user_id',$user)->get();
	// return view('frontend.myproject',compact('jobs'));
	// dd($applieds);
	return view('frontend.profile',compact('jobs','user','freelancers','employers'));
	}

	public function project()
	{
	// dd($request);
	$user = Auth::user()->id;
	$jobs = Job::where('user_id',$user)->get();
	// $jobs = Job::find($request->jobid);
	// $jobs->users()->attach($request->userid,['bid'=>$request->bid,'myduration'=>$request->duration,'cover_letter'=>$request->coverletter]);
	// dd($jobs);
	return view('frontend.myproject',compact('jobs'));

	}

	public function editprofile($value='')
	{
	return view('frontend.editprofile');
	}

	public function shop($value='')
	{
	$users = Auth::user()->id;
	$employers = Employer::where('user_id',$users)->get();
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

	$users = User::all();
	return view('frontend.find_freelancer',compact('freelancers','users'));

	}

	public function freelancerdetail($id)
	{
	$user = Auth::user()->id;
	$jobs = Job::where('user_id',$user)->get();
	// dd($jobs);
	$freelancers = Freelancer::find($id);
	return view('frontend.freelancerdetail',compact('jobs','freelancers'));
	}

	public function itembysubcategory($id)
	{
		$mysubcategory = Subcategory::find($id);
		return view('frontend.itembysubcategory',compact('mysubcategory'));

	}

	public function jobbysubcategory($id)
	{
		$myjob = Subcategory::find($id);
		return view('frontend.jobbysubcategory',compact('myjob'));

	}

	public function jobdetail($id)
	{
	$job = Job::find($id);
	return view('frontend.jobdetail',compact('job'));
	}

	// public function apply($id,Request $request)
	// {
	// $jobs = Job::find($id);
	// $jobs->users()->attach($request->userid,['bid'=>$request->bid,'myduration'=>$request->duration,'cover_letter'=>$request->coverletter]);
	// $user = Auth::user()->id;
	// $freelancers=Freelancer::all();
	// $employers=Employer::all();
	// return view('frontend.profile',compact('user','freelancers','employers','jobs'));
	
	// }

	public function projectform($value='')
	{
	$subcategories = Subcategory::all();
    $categories = Category::all();
    $locations = Location::all();
    $salaries = Salary::all();
    $user = Auth::user()->id;
    $employers = Employer::where('user_id',$user)->get();
    // dd($employers);
    return view('frontend.projectform',compact('user','categories','subcategories','salaries','locations','employers'));
	}
}
