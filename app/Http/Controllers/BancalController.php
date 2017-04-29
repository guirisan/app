<?php

namespace App\Http\Controllers;

use App\Bancal;
use App\Http\Requests\BancalRequest;
use Illuminate\Http\Request;

class BancalController extends Controller
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
        $bancals = auth()->user()->bancals;
        return view('bancal.index', compact('bancals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('bancal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BancalRequest $request)
    {
        $bancal = Bancal::create(request([
            'user_id',
            'nom',
            'superficie',
            'descripcio',
        ]));

        return redirect('/bancals');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bancal  $bancal
     * @return \Illuminate\Http\Response
     */
    public function show(Bancal $bancal)
    {
        return view('bancal.show', compact('bancal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bancal  $bancal
     * @return \Illuminate\Http\Response
     */
    public function edit(Bancal $bancal)
    {
        return view('bancal.edit', compact('bancal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bancal  $bancal
     * @return \Illuminate\Http\Response
     */
    public function update(BancalRequest $request, Bancal $bancal)
    {
        $bancal['nom'] = $request['nom'];
        $bancal['superficie'] = $request['superficie'];
        $bancal['descripcio'] = $request['descripcio'];

        $bancal->save();

        return view('bancal.show', compact('bancal'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bancal  $bancal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bancal $bancal)
    {
        Bancal::destroy($bancal->id);
        return redirect('/bancals');
    }
}
