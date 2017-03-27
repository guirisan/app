<?php

namespace App\Http\Controllers;

use App\Familia;
use App\Http\Requests\FamiliaRequest;
use Illuminate\Http\Request;

class FamiliaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
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
        $families = auth()->user()->families;
        return view('familia.index', compact('families'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('familia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FamiliaRequest $request)
    {
        $familia = Familia::create(request([
            'nom',
            'nom_altres',
            'descripcio',
            'user_id'
        ]));

        return redirect('/families');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function show(Familia $familia)
    {
        return view('familia.show', compact('familia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function edit(Familia $familia)
    {
        return view('familia.edit', compact('familia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function update(FamiliaRequest $request, Familia $familia)
    {
        $familia['nom'] = $request['nom'];
        $familia['nom_altres'] = $request['nom_altres'];
        $familia['descripcio'] = $request['descripcio'];

        $familia->save();

        return view('familia.show', compact('familia'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Familia $familia)
    {
        Familia::destroy($familia->id);
        return redirect('/families');
    }
}
