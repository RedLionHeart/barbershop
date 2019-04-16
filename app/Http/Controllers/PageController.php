<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return view('index');
    }
    public function price()
    {
        return view('price');
    }
    public function news()
    {
        return view('news.index');
    }
}
