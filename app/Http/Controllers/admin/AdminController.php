<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class AdminController extends Controller
{
    function index()
    {
        return view('admin.index');
    }
    
    function addEmployer()
    {
        return view('admin.addemp');
    }

    function insertEmployer(Request $req)
    {
        $req->validate([
            'username'=>'required|unique:usersf',
            'name'=>'required',
            'company'=>'required',
            'contactno'=>'required',
            'password'=>'required|min:4',
        ]);

        $user = new User();

        $user->username = $req->username;
        $user->name = $req->name;
        $user->company = $req->company;
        $user->contactno = $req->contactno;
        $user->password = $req->password;
        $user->type = 'employer';

        if($user->save())
        {
            return redirect('/admin/all-employer');
        }
        else
        {
            return "something went wrong";
        }

    }
    function allEmployer()
    {
        $employerList = User::all()->where('type','employer');
        
        return view('admin.allemp')->with('employerList',$employerList);
    }

    function editEmployer($id)
    {
        $user = User::find($id);

        if($user)
        {
            return view('admin.editemp')->with('employer',$user);
        }
        else
        {
            return "something went wrong";
        }
    }
    function updateEmployer(Request $req)
    {
        $req->validate([
            'username'=>"required|unique:usersf,username,$req->id",
            'name'=>'required',
            'company'=>'required',
            'contactno'=>'required',
            'password'=>'required|min:4',
        ]);

        $user = User::find($req->id);

        $user->username = $req->username;
        $user->name = $req->name;
        $user->company = $req->company;
        $user->contactno = $req->contactno;
        $user->password = $req->password;
        $user->type = 'employer';

        if($user->save())
        {
            return redirect('/admin/all-employer');
        }
        else
        {
            return "something went wrong";
        }

    }

    function removeEmployer($id)
    {
        $res = User::find($id);
        if($res)
        {
            return view('admin.delemp')->with('employer',$res);
        }
        else
        {
            return "something went wrong";
        }
    }

    function deleteEmployer(Request $req)
    {
        if(User::destroy($req->id))
        {
            return redirect('/admin/all-employer');
        }
        else
        {
            return "something went wrong";
        }
    }
}
