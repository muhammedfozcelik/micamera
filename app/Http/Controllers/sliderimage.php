<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;

class sliderimage extends Controller
{
    public function index(Request $request)
    {
    	return view('slider');


    }
    public function store(Request $request)
    {
    	$slider =new slider();

    	$slider->name = $request->input('name');



    	if ($request->hasfile('image')) {
    		$file=$request->file('image');
    		$extension =$file->getClientOriginalExtension();
    		$filename=time().'.'.$extension;
    		$file->move('uploads/slider/',$filename);
    		$slider->image=$filename;
    	}
    	else {
    		return $request;
    		$slider->image='';
    	}
    	$slider->save();
    	return view('slider')->with('slider',$slider);
    }

    public function display()
    {
    	$sliderresim= slider::all();
    	return view('sliderresimler')->with('sliderresim',$sliderresim);
    }
  

    
    public function edit($id)
    {
        $sliderresim = slider::find($id);
        return view('sliderupdate')->with('sliderresim',$sliderresim);       
    }
    public function update(Request $request,$id)
    {
        $sliderresim = slider::find($id);
        $sliderresim->name=$request->input('name');
        

        if ($request->hasfile('image')) {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/slider/',$filename);
            $sliderresim->image=$filename;
        }
        $sliderresim->save();
        return redirect('/sliderresimler')->with('sliderresim',$sliderresim);
    }
    public function delete($id)
    {
        $sliderresim=slider::find($id);
        $sliderresim->delete();
        return redirect('/sliderresimler')->with('sliderresim',$sliderresim);
    }
}
