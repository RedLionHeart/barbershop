<?php

namespace App\Http\Controllers\Admin;

use App\Tovars;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TovarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tovars.index',[
            'tovars' => Tovars::orderBy('title','desc')->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tovars.create',[
            'tovar'    => [],
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
        $tovar = Tovars::create($request->all());

        if($request->input('categories')){
            $tovar->categories()->attach($request->input('categories'));
        }


        return redirect()->route('admin.tovars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tovars  $tovars
     * @return \Illuminate\Http\Response
     */
    public function show(Tovars $tovars)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tovars  $tovars
     * @return \Illuminate\Http\Response
     */
    public function edit(Tovars $tovars)
    {
        return view('admin.tovars.edit',[
        'tovars' => $tovars,
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'delimiter'  => ''
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tovars  $tovars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tovars $tovars)
    {

        $tovars->update($request->except('slug'));

        $tovars->categories()->detach();
        if($request->input('categories')) {
            $tovars->categories()->attach($request->input('categories'));
        }
        return redirect()->route('admin.tovars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tovars  $tovars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tovars $tovars)
    {
        $tovars->categories()->detach();

        $tovars -> delete();
        return redirect()->route('admin.tovars.index');
    }
}
