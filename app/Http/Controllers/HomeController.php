<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Job;

class HomeController extends Controller
{
    function index(Request $req)
    {
        $jobList = Job::all();
        
        return view('index')->with('jobList',$jobList);
    }

    function search(Request $req)
    {
        $jobList = Job::where('title', 'like', '%'.$req->key.'%')
                        ->orWhere('company', 'like', '%'.$req->key.'%')
                        ->get();
        
        return view('joblist')->with('jobList',$jobList);
    }
}
