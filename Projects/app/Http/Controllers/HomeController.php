<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function hotro()
    {
        return view('home.hotro');
    }
    public function chinhsach ()
    {
        return view('home.chinhsach');
    }
    public function abouts ()
    {
        return view('home.abouts');
    }
}
