<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\SubCategorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $allCategory = Categorie::all()->pluck('name', 'id');

        return view('subcategory.create', compact('allCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lastId = DB::table('subcategories')->pluck('id')->last();
        $newSubCategory = new SubCategorie();
        $newSubCategory->id = $lastId +1;
        $newSubCategory->name= $request['name'];
        $newSubCategory->save();
        return redirect('subcategory');
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
