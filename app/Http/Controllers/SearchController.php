<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Product;
use App\ProductFilter\ProductFilter;
use Illuminate\Support\Facades\Input;


class SearchController extends Controller
{
    public static function filter(Request $request) {
//        $products = ProductFilter::applyFiltersToQuery($request, $builder);

        if($request->has('1')){
            $req = Input::get('1');
            $products = Product::whereIn('category_id', $req)
                ->paginate(6);

        }

        if($request->has('search')) {
            $products = Product::where('title', 'LIKE', '%'.$request->input('search').'%')
                ->orWhere('description', 'LIKE', '%'.$request->input('search').'%')->paginate(6);

        }

        return view('front.search-result', compact('products'));
    }
}
