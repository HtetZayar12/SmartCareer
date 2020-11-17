<?php

namespace App\Http\Controllers;

use App\Employer;
use App\User;
use App\Subcategory;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employers = Employer::all();
        $users = User::all();
        $subcategories = Subcategory::all();
        return view('frontend.employerinfo',compact('employers','users','subcategories'));
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
        // dd($request);

        $request->validate([
            'photo' => 'required|mimes:jpeg,png,jpg',
            'description' => 'required|string|min:50',
            'address' => 'required|string|max:50',
        ]);

        if($request->file()) {
 
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // brandimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('userimg', $fileName, 'public');

            $path = '/storage/'.$filePath;

            $employer = new Employer;
            $employer->photo = $path;
            $employer->description = $request->description;
            $employer->address = $request->address;
            $employer->coin = $request->coin;
            $employer->user_id = $request->userid;
            $employer->save();

            // redirect
            return redirect()->route('mainpage');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function show(Employer $employer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function edit(Employer $employer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employer $employer)
    {
        // dd($request);
        $employer = Employer::find($employer->id);
        $employer->coin += $request->coin;
        $employer->save();

        return redirect()->route('mainpage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employer $employer)
    {
        //
    }
}
