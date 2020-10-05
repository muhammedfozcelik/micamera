<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;


class icerikcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icerik=article::all();
        return view('icerik',['icerik'=>$icerik,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icerik=article::all();
        return view('icerik',['icerik'=>$icerik,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $icerik = new article();
        $icerik->title=$request->input('title');
        $icerik->content=$request->input('content');
        $icerik->save();
        return redirect('/icerik');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    { 
       
        $icerik=article::all();
        return view('icerik',['icerik'=>$icerik,'icerik'=>$icerik,'layout'=>'show']);
    }
    






    
    public function edit($id)
    {
        $article= article::find($id);
        $icerik=article::all();
        return view('icerik',['icerik'=>$icerik,'article'=>$article,'layout'=>'edit']);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $icerik = article::find($id);
        $icerik->title=$request->input('title');
        $icerik->content=$request->input('content');
        $icerik->save();
        return redirect('/icerik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $icerik=article::find($id);
        $icerik->delete();
        return redirect('icerik.icerik');
    }
}
