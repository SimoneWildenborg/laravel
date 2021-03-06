<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $lopers = \App\Loper::all();
        
        return view('lopers.index', compact('lopers'));
    }

    public function create()
    {
        return view('lopers.create');

    }

    public function store(Request $request)
    {
        $loper = new \App\Loper;

        


        $loper->name = $request->input('name');
        $loper->email = $request->input('email');
        $loper->distance = $request->input('distance');
        $loper->save();

        $lopers = \App\Loper::all();
        return redirect('/lopers');
        //return view('lopers.index', ['lopers' => $lopers]);
        // $request()->all();

    }

    public function destroy($id){
        $loper = \App\Loper::find($id)->delete();
        return redirect('lopers');
    }


}
