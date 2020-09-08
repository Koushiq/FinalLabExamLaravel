<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function index()
    {
        return view('login.index');
    }

    function verify(Request $request)
    {
        $data = DB::table('alluser')
                    ->where('username',$request->username)
                    ->where('password',$request->password)
                    ->get();

        

        if(count($data)>0)
        {
            $request->session()->put('username',$request->username);

            if($data[0]->type=="admin")
            {
                $request->session()->put('type',"admin");
            }
            return redirect()->route('home.index');
        }
        else
        {
            $request->session()->flash('msg', 'invalid username/password');
            return redirect()->route('login.index');
        }
    }
}
