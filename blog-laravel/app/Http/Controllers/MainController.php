<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class MainController extends Controller
{

    public function home()
    {
        return view('post');
        return view('about');
        return view('contact');
        return view('post');

    }
   
}

?>