<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $name=User::all();
        // dd($name);
        // $search=$request->search;
        // $name = User::where('name', 'like', '%' . $request->name . '%')->get();
        // return view('users.findusers',  compact('search','name'));
    }

    // public function search(Request $request)
    // {
    //     $name=User::all();
    //     $search=$request->search;
    //     $name=User::where('name','like',$request->name)->get();
    //     //dd($name);

    //     return view('users.findusers', compact('search','name'));

    // }

    /**
     * Show the form for creating a new resource.
     */
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
