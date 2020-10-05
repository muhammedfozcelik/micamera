<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Sentinel;

class logincontroller extends Controller
{
	public function girisyap()
	{
		return view('contact.girisyap');
	}



	public function girisyapma(Request $request)
	{

			$credentials = [
    			'email'    => $request->email,
    			'password' => $request->password
    		];
		



			$user = Sentinel::authenticateAndRemember($credentials);
			if($user=Sentinel::check()){
				$user_type=Sentinel::getUser()->roles()->first()->slug;
				if($user_type=="admin")
				
				return redirect('/contacts');
				
				elseif($user_type=="manager")
				
					return redirect('/kaydol');
				
			} 
			else{
				return redirect()->back()->with('error','oops! email or password not matching');
			}	
	}

	public function cikisyapma(){

	Sentinel::logout();
	return redirect('/girisyap');

	}

	
}
