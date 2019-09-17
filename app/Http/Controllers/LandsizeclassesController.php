<?php

namespace App\Http\Controllers;

use App\Landsizeclass;
use App\Landcategory;
use Illuminate\Http\Request;

class LandsizeclassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $landsizeclasses = Landsizeclass::all();

        return view('landsizeclasses.index', compact('landsizeclasses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $landsizeclasses = Landcategory::get();
        return view('landsizeclasses.create', compact('landsizeclasses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $landsizeclasses = new Landsizeclass();

        $landsizeclasses->name = $request->name;
        $landsizeclasses->weight = $request->weight;
        $landsizeclasses->publish = $request->publish;
        $landsizeclasses->landcategory_id = $request->landcategory_id;

        $landsizeclasses->save();

        return redirect()->route('landsizeclasses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('landsizeclasses.show',compact('landsizeclasses'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request)
    {
        $landsizeclasses = Landcategory::get();
        return view('landsizeclasses.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $landsizeclasses = new Landsizeclass();

        $landsizeclasses->name = $request->name;
        $landsizeclasses->weight = $request->weight;
        $landsizeclasses->publish = $request->publish;
        $landsizeclasses->landcategory_id = $request->landcategory_id;

        $landsizeclasses->save();

        return redirect()->route('landsizeclasses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Landsizeclass $landsizeclass)
    {
        $landsizeclass->delete();

        return redirect()->route('landsizeclasses.index');
    }
}