<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;


class OwnerController extends Controller
{
    public function index()
    { 
        $ownersFromDB = Owners::all();
        return view('welcome', ['owners' => $articlesFromDb]);
    }

}