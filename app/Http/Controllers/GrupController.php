<?php

namespace App\Http\Controllers;

use App\Grup;
use Illuminate\Http\Request;

class GrupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grups = Grup::all();
        return view('grup.index', compact('grups'));
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
     * @param  \App\Grup  $grup
     * @return \Illuminate\Http\Response
     */
    public function show(Grup $grup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grup  $grup
     * @return \Illuminate\Http\Response
     */
    public function edit(Grup $grup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grup  $grup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grup $grup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grup  $grup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grup $grup)
    {
        //
    }
}
