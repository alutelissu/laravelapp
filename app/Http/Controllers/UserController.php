<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
   
    
    public function login(Request $request){

        $user = User::where(['email'=>$request->email] )->first();
        
        $inputPass = $request->password;
        $dbpass = $user->password;
         //return $inputPass;
        if(!$user || !Hash::check($inputPass, $dbpass)){
            return redirect(route('login'))->with('successMsg','Wrong Email or Password');

        }
        else{
            $request->session()->put('user',$user);
            return redirect('/');
        }
    }


}
