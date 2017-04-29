<?php

namespace App\Http\Controllers;

use App\Http\Requests\CultiuRequest;
use App\Cultiu;
use Illuminate\Http\Request;

class CultiuController extends Controller
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
        $cultius = auth()->user()->cultius;
        return view('cultiu.index', compact('cultius'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('cultiu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CultiuRequest $request)
    {
        $cultiu = Cultiu::create(request([
            'user_id', //agafar d'altre puesto
            'parcela_id',
            'planta_id',
            'data_ini',
            'data_fi',
            'descripcio',
        ]));
        //$cultiu->user_id = auth()->user()->id;

        return redirect('/cultius');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cultiu  $cultiu
     * @return \Illuminate\Http\Response
     */
    public function show(Cultiu $cultiu)
    {
        return view('cultiu.show', compact('cultiu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cultiu  $cultiu
     * @return \Illuminate\Http\Response
     */
    public function edit(Cultiu $cultiu)
    {
        return view('cultiu.edit', compact('cultiu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cultiu  $cultiu
     * @return \Illuminate\Http\Response
     */
    public function update(CultiuRequest $request, Cultiu $cultiu)
    {
        $cultiu['user_id'] = auth()->user()->id;
        $cultiu['planta_id'] = $request['planta_id'];
        $cultiu['parcela_id'] = $request['parcela_id'];
        $cultiu['data_ini'] = $request['data_ini'];
        $cultiu['data_fi'] = $request['data_fi'];
        $cultiu['descripcio'] = $request['descripcio'];

        $cultiu->save();

        return view('cultiu.show', compact('cultiu'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cultiu  $cultiu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cultiu $cultiu)
    {
        Cultiu::destroy($cultiu->id);
        return redirect('/cultius');
    }
}
