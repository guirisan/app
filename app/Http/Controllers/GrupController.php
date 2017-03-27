<?php

namespace App\Http\Controllers;

use App\Grup;
use App\Http\Requests\GrupRequest;
use Illuminate\Http\Request;

class GrupController extends Controller
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
        $grups = auth()->user()->grups;
        return view('grup.index', compact('grups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GrupRequest $request)
    {
        $grup = Grup::create(request([
            'nom',
            'nom_altres',
            'descripcio',
            'user_id'
        ]));

        return redirect('/grups');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grup  $grup
     * @return \Illuminate\Http\Response
     */
    public function show(Grup $grup)
    {
        return view('grup.show', compact('grup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grup  $grup
     * @return \Illuminate\Http\Response
     */
    public function edit(Grup $grup) 
    {
        return view('grup.edit',compact('grup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grup  $grup
     * @return \Illuminate\Http\Response
     */
    public function update(GrupRequest $request, Grup $grup)
    {
        $grup['nom'] = $request['nom'];
        $grup['nom_altres'] = $request['nom_altres'];
        $grup['descripcio'] = $request['descripcio'];

        $grup->save();

        return view('grup.show', compact('grup'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grup  $grup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grup $grup)
    {
        Grup::destroy($grup->id);
        return redirect('/grups');
    }
}
