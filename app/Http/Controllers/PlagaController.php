<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlagaRequest;
use App\Plaga;
use Illuminate\Http\Request;

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
        $plaga = Plaga::create(request([
            'user_id',
            'nom',
            'nom_cientific',
            'descripcio',
            'tractament',
        ]));

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
        Planta::destroy($plaga->id);
        return redirect('/plantes');
    }
}
