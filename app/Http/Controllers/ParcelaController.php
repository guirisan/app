<?php

namespace App\Http\Controllers;

use App\Parcela;
use Illuminate\Http\Request;

class ParcelaController extends Controller
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
        $parceles = auth()->user()->parceles;
        return view('parcela.index', compact('parceles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('parcela.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParcelaRequest $request)
    {
        $parcela = Parcela::create(request([
            'user_id',
            'bancal_id',
            'nom',
            'superficie',
            'ocupada',
            'descripcio',
        ]));

        return redirect('/parceles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parcela  $parcela
     * @return \Illuminate\Http\Response
     */
    public function show(Parcela $parcela)
    {
        return view('parcela.show', compact('parcela'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parcela  $parcela
     * @return \Illuminate\Http\Response
     */
    public function edit(Parcela $parcela)
    {
        return view('parcela.edit', compact('$parcela'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parcela  $parcela
     * @return \Illuminate\Http\Response
     */
    public function update(ParcelaRequest $request, Parcela $parcela)
    {
        $parcela['nom'] = $request['nom'];
        $parcela['superficie'] = $request['superficie'];
        $parcela['ocupada'] = $request['ocupada'];
        $parcela['descripcio'] = $request['descripcio'];

        $parcela->save();

        return view('parcela.show', compact('parcela'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parcela  $parcela
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parcela $parcela)
    {
        Parcela::destroy($parcela->id);
        return redirect('/parceles');
    }
}
