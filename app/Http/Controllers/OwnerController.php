<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;


class OwnerController extends Controller
{
    public function index()
    { 
        $ownersFromDb = Owner::all();
        return view('welcome', ['banannas' => $ownersFromDb]);
    }


    public function show(Owner $owner)
    {
        return view ('owners/show', ['owner' => $owner]);
    }

    public function create()
    {
        return view("owners/form"); // this loads the form.blade.php
    }

    //     public function createPost()
    // {
    //     return "I am post"; // this is just to check page is working 
    // }

//     // accept the Request object
    // this gives us access to the submitted data
    public function createPost(Request $request)
    {
    // get all of the submitted data
    $data = $request->all();

    // create a new owner, passing in the submitted data
    $owner = Owner::create($data);

    // redirect the browser to the new owner
    return redirect("/owners/{$owner->id}");
    }

}