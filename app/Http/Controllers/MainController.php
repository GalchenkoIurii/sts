<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        echo 'home';
    }

    public function about()
    {
        echo 'about';
    }

    public function blog()
    {
        echo 'blog';
    }

    public function careers()
    {
        echo 'careers';
    }

    public function contacts()
    {
        echo 'contacts';
    }

    public function portfolio()
    {
        echo 'portfolio';
    }
}
