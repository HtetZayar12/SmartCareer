<?php

namespace App\Http\Controllers;

use App\Job;
use App\Category;
use App\Subcategory;
use App\Location;
use App\User;
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
        $subcategories = Subcategory::all();
        $categories = Category::all();
        $locations = Location::all();
        $users = User::all();
        return view('frontend.projectform',compact('categories', 'subcategories','locations','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'skill_one' => 'required|string',
        //     'skill_two' => 'required|string',
        //     'skill_two' => 'required|string',
        //     'closedate' => 'required',
        //     'duration' =>  'required',
        //     'dur_type' =>  'required',
        //     'category' =>  'required',
        //     'subcategory' =>  'required',
        //     'location' =>  'required',
        //     'message' => 'required|string|max:255',
        // ]);

        // $job = new Job;
        // $job->name = $request->name;
        // $job->skill_one = $request->name;
        // $job->skill_two = $request->name;
        // $job->skill_three = $request->name;
        // $job->closedate = $request->name;
        // $job->duration = $request->name;
        // $job->message = $request->name;
        // $job->category_id = $request->category;
        // $job->subcategory_id = $request->subcategory;
        // $job->locatioon_id = $request->location;
        // $job->user_id = $request->user;
        // $job->save();



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        
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
