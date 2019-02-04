<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $lopers = \App\Loper::all();
        
        return view('lopers.index', ['lopers' => $lopers]);
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
        return view('lopers.index', ['lopers' => $lopers]);
        // $request()->all();
    }




}
