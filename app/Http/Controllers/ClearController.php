<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ClearController extends Controller
{
    public function clear(){
           Artisan::call('route:cache');
            return "Кэш очищен.";
        }
}
