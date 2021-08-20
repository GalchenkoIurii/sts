<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('home');
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

    public function news()
    {
        echo 'news';
    }

    public function portfolio()
    {
        echo 'portfolio';
    }
}
