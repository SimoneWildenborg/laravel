<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
   {
    return view('welcome',[
        'tasks' => ['Go to the store',
        'Go to the market',
        'Go to work']
    ]);
   }

    public function ind()
   {
    return view('ind');
   }

    public function school()
   {
    return view('school');
   }
}