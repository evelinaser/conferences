<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view(view: 'home.index');
    }

    public function contact()
    {
        return view(view: 'home.contact');
    }
}
