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
}
