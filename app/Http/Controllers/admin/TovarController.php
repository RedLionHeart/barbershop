<?php

namespace App\Http\Controllers\Admin;

use App\Tovars;
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
            'users'=>Tovars::paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tovars  $tovars
     * @return \Illuminate\Http\Response
     */
    public function show(Tovars $tovars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tovars  $tovars
     * @return \Illuminate\Http\Response
     */
    public function edit(Tovars $tovars)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tovars  $tovars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tovars $tovars)
    {
        //
    }
}
