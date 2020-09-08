<?php

namespace App\Http\Controllers\employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Job;

class EmployerController extends Controller
{
    function index()
    {
        return view('employer.index');
    }
    
    function addJob(Request $req)
    {
        $employerCompany = User::where('username',$req->session()->get('username'))->first()->company;
        return view('employer.addjob')->with('company',$employerCompany);
    }

    function insertJob(Request $req)
    {
        $req->validate([
            'title'=>'required',
            'location'=>'required',
            'salary'=>'required',
        ]);

        $job = new Job();

        $job->recruiter = $req->session()->get('username');
        $job->company = $employerCompany = User::where('username',$req->session()->get('username'))->first()->company;
        $job->title = $req->title;
        $job->location = $req->location;
        $job->salary = $req->salary;

        if($job->save())
        {
            return redirect('/employer/all-job');
        }
        else
        {
            return "something went wrong";
        }

    }


    function allJob(Request $req)
    {
        $jobList = Job::all()->where('recruiter',$req->session()->get('username'));
        
        return view('employer.alljob')->with('jobList',$jobList);
    }

    function editJob($id,Request $req)
    {
        $job = Job::where('id',$id)->where('recruiter',$req->session()->get('username'))->first();

        if($job)
        {
            return view('employer.editjob')->with('job',$job);
        }
        else
        {
            return "something went wrong";
        }
    }
    function updateJob(Request $req)
    {
        $req->validate([
            'title'=>'required',
            'location'=>'required',
            'salary'=>'required',
        ]);

        $job = Job::where('id',$req->id)->where('recruiter',$req->session()->get('username'))->first();

        $job->company = $employerCompany = User::where('username',$req->session()->get('username'))->first()->company;
        $job->title = $req->title;
        $job->location = $req->location;
        $job->salary = $req->salary;

        if($job->save())
        {
            return redirect('/employer/all-job');
        }
        else
        {
            return "something went wrong";
        }
    }

    function removeJob($id, Request $req)
    {
        $job = Job::where('id',$id)->where('recruiter',$req->session()->get('username'))->first();
        if($job)
        {
            return view('employer.deljob')->with('job',$job);
        }
        else
        {
            return "something went wrong";
        }
    }

    function deleteJob(Request $req)
    {
        if(Job::where('id',$req->id)->where('recruiter',$req->session()->get('username'))->delete())
        {
            return redirect('/employer/all-job');
        }
        else
        {
            return "something went wrong";
        }
    }
}
