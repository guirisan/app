<?php

namespace App\Http\Controllers;

use App\Http\Requests\RemeiRequest;
use App\Remei;
use Illuminate\Http\Request;

class RemeiController extends Controller
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
        $remeis = auth()->user()->remeis;
        return view('remei.index',compact('remeis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('remei.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RemeiRequest $request)
    {
        $remei = Remei::create(request([
            'user_id',
            'nom',
            'nom_cientific',
            'descripcio',
            'preparacio',
            'aplicacio',
        ]));

        return redirect('/remeis');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Remei  $remei
     * @return \Illuminate\Http\Response
     */
    public function show(Remei $remei)
    {
        return view('remei.show',compact('remei'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Remei  $remei
     * @return \Illuminate\Http\Response
     */
    public function edit(Remei $remei)
    {
        return view('remei.edit', compact('remei'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Remei  $remei
     * @return \Illuminate\Http\Response
     */
    public function update(RemeiRequest $request, Remei $remei)
    {
        $remei['nom'] = $request['nom'];
        $remei['nom_cientific'] = $request['nom_cientific'];
        $remei['descripcio'] = $request['descripcio'];
        $remei['preparacio'] = $request['preparacio'];
        $remei['aplicacio'] = $request['aplicacio'];

        $remei->save();

        return view('remei.show', compact('remei'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Remei  $remei
     * @return \Illuminate\Http\Response
     */
    public function destroy(Remei $remei)
    {
        Remei::destroy($remei->id);
        return redirect('/remeis');
    }
}
