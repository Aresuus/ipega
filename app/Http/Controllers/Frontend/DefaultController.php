<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DefaultController extends Controller
{
    public function index()
    {
        return view('index');
    }   
    
    public function manual()
    {
        return view('manual');
    }
    
    public function contact()
    {
        return view('contact');
    }
}
