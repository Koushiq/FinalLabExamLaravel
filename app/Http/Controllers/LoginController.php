<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class LoginController extends Controller
{
    function index(Request $req)
    {
        if($req->session()->has('username'))
        {
            // if($req->session()->get('type') == 'admin')
            // {
            //     return redirect('/admin');
            // }
            // else
            // {
            //     return redirect('/employer');
            // }
            return redirect('/');
        }
        else
        {
            return view('login');
        }
    }

    function entry(Request $req)
    {
        $cred =  new User();

        $user = $cred->where('username',$req->username)->where('password',$req->password)->get();
        
        if(count($user)>0)
        {
            $req->session()->put('username',$user[0]['username']);
            if($user[0]['type']=='admin')
            {
                $req->session()->put('type','admin');
                // return redirect('/admin');
            }
            else
            {
                $req->session()->put('type','employer');
                // return redirect('/employer');
            }
            return redirect('/');

        }
        else
        {
            return "not found";
        }
    }
}
