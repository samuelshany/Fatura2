<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    function loginHandel(Request $request)
    {
        $credentials = array('email' => $request->email, 'password' => $request->password);

        if (Auth::attempt($credentials)) {
       
      if(Auth::user()->is_admin == 1)
      {
        return redirect('/addCategory');
      }
       return redirect('/market');
        
    } else {
        $mess = 'error diffrent username or password ';
        return view('login', compact('mess'));
    }
    }
    function registerHandel(Request $request)
    {
        $request->validate(
            [
               
                'name' => 'required ',
                'email' => 'email:rfc,dns|unique:users',
                
                'password'=>'required',
               
            ]
        );
        $user = new User();
        $user->name=$request->name;
        $user->email= $request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect('/');

    }
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    
}
