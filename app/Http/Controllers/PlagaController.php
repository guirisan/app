<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlagaAddPlantaRequest;
use App\Http\Requests\PlagaRequest;
use App\Plaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plagues = auth()->user()->plagues;
        return view('plaga.index',compact('plagues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plaga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlagaRequest $request)
    {
        $plaga = Plaga::create([
            'user_id' => Auth::id(),
            'nom' => request('nom'),
            'nom_cientific' => request('nom_cientific'),
            'descripcio' => request('descripcio'),
            'tractament' => request('tractament'),
        ]);

        return redirect('/plagues');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plaga  $plaga
     * @return \Illuminate\Http\Response
     */
    public function show(Plaga $plaga)
    {
        return view('plaga.show',compact('plaga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plaga  $plaga
     * @return \Illuminate\Http\Response
     */
    public function edit(Plaga $plaga)
    {
        return view('plaga.edit', compact('plaga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plaga  $plaga
     * @return \Illuminate\Http\Response
     */
    public function update(PlagaRequest $request, Plaga $plaga)
    {
        $plaga['nom'] = $request['nom'];
        $plaga['nom_cientific'] = $request['nom_cientific'];
        $plaga['descripcio'] = $request['descripcio'];
        $plaga['tractament'] = $request['tractament'];

        $plaga->save();

        return view('plaga.show', compact('plaga'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plaga  $plaga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plaga $plaga)
    {
        Plaga::destroy($plaga->id);
        return redirect('/plagues');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plaga  $plaga
     * @return \Illuminate\Http\Response
     */
    public function addRemei(Plaga $plaga)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plaga  $plaga
     * @return \Illuminate\Http\Response
     */
    public function storePlanta(PlagaAddPlantaRequest $request, Plaga $plaga)
    {
        //TODO: guardar 'descripcio' si n'hi ha
        $plaga->plantes()->attach($request['planta']); //attach($roleId, ['expires' => $expires]);
        return redirect('/plagues/' . $plaga->id);
    }

}
