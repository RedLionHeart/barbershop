<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index',[
            'products' => Product::orderBy('title','desc')->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create',[
            'product'    => [],
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'delimiter'  => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());

        if($request->input('categories')){
            $product->categories()->attach($request->input('categories'));
        }


        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
//    public function edit(products $products)
//    {
//        return view('admin.products.edit',[
//        'products' => $products,
//            'categories' => Category::with('children')->where('parent_id', 0)->get(),
//            'delimiter'  => ''
//        ]);
//    }
    public function edit($id)
    {
        $products = product::where('id', $id)->first();
        return view('admin.products.edit',[
            'product' => $products,
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'delimiter' => ''
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {

        $product->update($request->except('slug'));

        $product->categories()->detach();
        if($request->input('categories')) {
            $product->categories()->attach($request->input('categories'));
        }
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $products)
    {
        $products->categories()->detach();

        $products -> delete();
        return redirect()->route('admin.products.index');
    }
}
