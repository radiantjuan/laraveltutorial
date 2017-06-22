<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    //

	public function __construct()
	{
		$this->middleware('guest')->except(['destroy']);
	}

    public function create(){
    	
    	return view('sessions.create');
    }

    public function store(){

        $email = request('email');
        $password = request('password');

    	if (!Auth::attempt(['email' => $email, 'password' => $password])) {
    		return back()->withErrors(['mali tanga!']);
    	}

    	return redirect()->home();

    }

    public function destroy(){
    	auth()->logout();
    	return redirect()->home();
    }
}
