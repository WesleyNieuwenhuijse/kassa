<?php

namespace App\Http\Controllers;

use App\SubCategorie;
use Illuminate\Http\Request;

class SubCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subcategory.show');
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
     * @param  \App\SubCategorie  $subCategorie
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategorie $subCategorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategorie  $subCategorie
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategorie $subCategorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategorie  $subCategorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategorie $subCategorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategorie  $subCategorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategorie $subCategorie)
    {
        //
    }
}
