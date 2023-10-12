<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('index');
    }

    public function airports(){
        return view('airports');
    }

    public function bloggrid(){
        return view('blog-grid');
    }

    public function blogdetails(){
        return view('blog-details');
    }

    public function blogclassic(){
        return view('blog-classic');
    }

    public function find(){
        return view('find');
    }

    public function book(){
        return view('book');
    }

    public function confirmbooking(){
        return view('confirmbooking');
    }


}
