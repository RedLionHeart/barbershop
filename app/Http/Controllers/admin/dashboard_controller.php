<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboard_controller extends Controller
{
    public function dashboard(){
        return view('admin.index');
    }

}