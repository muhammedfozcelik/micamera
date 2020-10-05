<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class iletisim extends Controller
{
      public function createForm(Request $request) {
      return view('contact');
    }

     public function ContactUsForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required | email',
            'number'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address' => 'required',
            'kvkk' => 'required'
         ]);

        Contact::create($request->all());

        return back()->with('success', 'Mesajınızı aldık. Bizimle iletişime geçtiğiniz için teşekkür ederiz.');
        
        
}

}
