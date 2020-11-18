<?php

namespace App\Http\Controllers;

use App\Job;
use App\Category;
use App\Subcategory;
use App\Location;
use App\User;
use App\Salary;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $salaries = Salary::all();
        return view('frontend.find_job',compact('jobs','categories','subcategories','salaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $subcategories = Subcategory::all();
        // $categories = Category::all();
        // $locations = Location::all();
        // $users = User::all();
        // $salaries = Salary::all();
        // return view('frontend.projectform',compact('users','categories','subcategories','salaries','locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'skill_one' => 'required|string',
            'skill_two' => 'required|string',
            'skill_two' => 'required|string',
            'closedate' => 'required',
            'duration' =>  'required',
            'dur_type' =>  'required',
            'category' =>  'required',
            'subcategory' =>  'required',
            'location' =>  'required',
            'salary' => 'required',
            'message' => 'required|string|max:255',
        ]);

        $job = new Job;
        $job->name = $request->name;
        $job->skill_one = $request->skill_one;
        $job->skill_two = $request->skill_two;
        $job->skill_three = $request->skill_three;
        $job->closedate = $request->closedate;
        $job->duration = $request->duration;
        $job->description = $request->message;
        $job->salary_id = $request->salary;
        $job->subcategory_id = $request->subcategory;
        $job->location_id = $request->location;
        $job->user_id = $request->user;
        $job->save();

        return redirect()->route('job.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        // $job = Job::find($job->id);
        // return view('frontend.jobdetail',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
