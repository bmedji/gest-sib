<?php

namespace App\Http\Controllers;

use App\gestionnaire;
use Illuminate\Http\Request;

class GestionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        gestionnaire::create([
            'matgest' => $request['matgest'],
            'nomprengest' => $request['nomprengest'],
            'agencegest' => $request['agencegest'],
            'idserv' => $request['idserv'],
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\gestionnaire  $gestionnaire
     * @return \Illuminate\Http\Response
     */
    public function show(gestionnaire $gestionnaire)
    {
        return $gestionnaire->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\gestionnaire  $gestionnaire
     * @return \Illuminate\Http\Response
     */
    public function edit(gestionnaire $gestionnaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\gestionnaire  $gestionnaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gestionnaire $gestionnaire)
    {
        $gestionnaire = gestionnaire::find($request->id);
        $gestionnaire->matgest = $request->matgest;
        $gestionnaire->nomprengest = $request->nomprengest;
        $gestionnaire->agencegest = $request->agencegest;
        $gestionnaire->idserv = $request->idserv;
        $gestionnaire->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\gestionnaire  $gestionnaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(gestionnaire $gestionnaire)
    {
        $gestionnaire->delete();
        return redirect('/');
    }
}
