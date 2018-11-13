<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
    	if(Auth::check()){
    		return redirect()->back();
    	}
    	return view('login/index');
    }

    public function setLogin(Request $request)
    {
    	$email = $request->email;
    	$password = $request->password;
    	if (Auth::attempt(['email' => $email, 'password' => $password, 'level' => 0])) {
		   return redirect()->route('index');
		}else{
			return redirect()->back();
		}


    }

    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('getLogin');
    }
}
