<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function home(){
    	return view('home');
    }
    public function maincontent(){
    	return view('main');
    }
}
