<?php

namespace App\Http\Controllers;

use App\Tasca;
use Illuminate\Http\Request;

class TascaController extends Controller
{
    /**
     * Requires user to be autenticated to call this controller.
     */    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
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
     * @param  \App\Tasca  $tasca
     * @return \Illuminate\Http\Response
     */
    public function show(Tasca $tasca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tasca  $tasca
     * @return \Illuminate\Http\Response
     */
    public function edit(Tasca $tasca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tasca  $tasca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tasca $tasca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tasca  $tasca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tasca $tasca)
    {
        //
    }
}
