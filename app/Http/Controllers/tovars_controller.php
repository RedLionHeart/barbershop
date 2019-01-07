<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tovars_controller extends Controller
{
    public function shop(){
        return view('shop.catalog');
    }
    public function item(){
        return view('shop.item');
    }
}
