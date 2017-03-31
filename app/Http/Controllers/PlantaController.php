<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Planta;
use App\Image;
use App\Http\Requests\PlantaRequest;

class PlantaController extends Controller
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
        $plantes = auth()->user()->plantes;
        return view('planta.index', compact('plantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request //TODO update
     * @return \Illuminate\Http\Response
     */
    public function store(PlantaRequest $request)
    {
        $planta = Planta::create(request([
            'nom',
            'nom_cientific',
            'descripcio',
            'sembra_ini',
            'sembra_fi',
            'sembra',
            'cultiu',
            'collita',
            'user_id',
            'grup_id',
            'familia_id'
        ]));

        return redirect('/plantes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function show(Planta $planta)
    {
        return view('planta.show', compact('planta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function edit(Planta $planta)
    {
        return view('planta.edit', compact('planta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request NOT****************
     * @param  \App\Planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function update(PlantaRequest $request, Planta $planta)
    {
        $planta['nom'] = $request['nom'];
        $planta['nom_cientific'] = $request['nom_cientific'];
        $planta['descripcio'] = $request['descripcio'];
        $planta['sembra_ini'] = $request['sembra_ini'];
        $planta['sembra_fi'] = $request['sembra_fi'];
        $planta['sembra'] = $request['sembra'];
        $planta['cultiu'] = $request['cultiu'];
        $planta['collita'] = $request['collita'];
        $planta['grup_id'] = $request['grup_id'];
        $planta['familia_id'] = $request['familia_id'];

        $planta->save();

        return view('planta.show', compact('planta'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Planta $planta)
    {
        Planta::destroy($planta->id);
        return redirect('/plantes');
    }
}
