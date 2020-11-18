<?php

namespace App\Http\Controllers;

use App\Freelancer;
use App\User;
use Illuminate\Http\Request;
use App\Subcategory;


class FreelancerController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $freelancers = Freelancer::all();
        $users = User::all();
        $subcategories = Subcategory::all();
        return view('frontend.freelanceinfo',compact('freelancers','users','subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|mimes:jpeg,png,jpg',
            'description' => 'required|string|min:50',
            'address' => 'required|string|max:50',
            "subcategory" => "required",
        ]);

        if($request->file()) {
 
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // brandimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('userimg', $fileName, 'public');

            $path = '/storage/'.$filePath;

            $freelancer = new Freelancer;
            $freelancer->photo = $path;
            $freelancer->description = $request->description;
            $freelancer->address = $request->address;
            $freelancer->user_id = $request->user_id;
            $freelancer->subcategory_id = $request->subcategory;

            $freelancer->save();

            // redirect

            return redirect()->route('mainpage');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function show(Freelancer $freelancer)
    {
        // $freelancers = Freelancer::find($freelancer->id);
        // return view('frontend.freelancerdetail',compact('freelancers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function edit(Freelancer $freelancer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Freelancer $freelancer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Freelancer $freelancer)
    {
        //
    }
}
