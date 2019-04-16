<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductViewController extends Controller
{
public function shop(){
    $products = Product::paginate(9);
    return view('shop.catalog',compact('products'));
}

public function showitemforslug($slug){
    $product = Product::where('slug',$slug)->firstOrFail();

    return view('shop.item',compact('product'));
}


}
