<?php

namespace App\Http\Controllers;

use App\Freelancer;
use App\User;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all(); 
       return view('frontend.freelanceinfo',compact('users'));
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
        $request->validate([
            'photo' => 'required|mimes:jpeg,png,jpg',
            'description' => 'required|string|max:300',
            'address' => 'required|string|max:50'
        ]);

        if($request->file()) {
 
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // brandimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('itemimg', $fileName, 'public');

            $path = '/storage/'.$filePath;

            $freelancer = new Freelancer;
            $freelancer->photo = $path;
            $freelancer->description = $request->description;
            $freelancer->address = $request->address;
            $freelancer->user_id = $request->userid;
            $freelancer->save();

            // redirect
            return redirect()->route('category.index');
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
        //
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
