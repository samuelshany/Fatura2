<?php

namespace App\Http\Controllers;

use App\Models\Cupone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CuponeController extends Controller
{
    function sendCupone(Request $request)
    {
        
        $request->validate(
            [
               
                'name' => 'required ',
                'email' => 'email:rfc,dns',
                
                'value'=>'required',
               
            ]
        );
        $user = User::where('email',$request->email)->first();
        //dd($user->email);
        if($user == null)
        {
            $mess="user not found";
            return view('admin/sendCupone',compact('mess'));
        }
        $cupone = new Cupone();
        $cupone->user_id = $user->id;
        $cupone->value= $request->value;
        $cupone->name=$request->name;
        $cupone->save();
        $details=[
            'body'=>$request->name,
            'value'=>$request->value
        ];
        Mail::to($request->email)->send(new \App\Mail\CuponeMail($details));
        return redirect('/sendCupone');
    }
    function checkCupone(Request $request)
    {
        $cupones = Cupone::where('user_id',Auth::user()->id)->get();
        foreach($cupones as $cupone)
        {
            if($cupone->value = $request->cupone)
            {
                return $cupone->disc;
            }
        }
        return "didnot have one";
    }
}
