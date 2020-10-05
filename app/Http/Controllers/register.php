<?php

namespace App\Http\Controllers;
use Request;
use Sentinel;
use Illuminate\Support\Facades\Input;

class register extends Controller
{
    public function girisyap()
    {
    	return view('contact.girisyap');
    }


    public function store(Request $request)
    { 
    	$credentials = [
		    'email'    =>Request::get('email'),
		    'mobile'=>Request::get('mobile'),
		    'password' => Request::get('password'),
		    'first_name'=>Request::get('first_name'),
		    'last_name'=>Request::get('last_name')
];

		$user = Sentinel::registerAndActivate($credentials);
        $role=Sentinel::findRoleById(1);
        $role->users()->attach($user);

		return back()->with('success','kaydolma başarılı');

    }
    



	

    public function kaydol()
    {
    	return view('contact.kaydol');
    }


}
	