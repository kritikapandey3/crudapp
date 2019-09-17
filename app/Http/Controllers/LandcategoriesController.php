<?php

namespace App\Http\Controllers;

use App\Landcategory;
use App\Landsizeclass;
use Illuminate\Http\Request;

class LandcategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $landcategories = Landcategory::all();

        return view('landcategories.index', compact('landcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('landcategories.create', compact('landcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $landcategory = new LandCategory();
        
        $landcategory->name = $request->name;
        $landcategory->weight = $request->weight;
        $landcategory->publish = $request->publish;

        $landcategory->save();

        return redirect()->route('landcategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Landcategory $landcategory)
    {
        return view('landcategories.show',compact('landcategory'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Landcategory $landcategory)
    {
        return view('landcategories.edit', compact('landcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $landcategories = new Landcategory();

        $landcategories->name = $request->name;
        $landcategories->weight = $request->weight;
        $landcategories->publish = $request->publish;

        $landcategories->save();

        return redirect()->route('landcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Landcategory $landcategory)
    {
        $landcategory->delete();

        return redirect()->route('landcategories.index');
    }
}