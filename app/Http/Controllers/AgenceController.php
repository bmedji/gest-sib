<?php

namespace App\Http\Controllers;

use App\agence;
use Illuminate\Http\Request;

class AgenceController extends Controller
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
        agence::create([
            'codeagence' => $request['codeagence'],
            'libagence' => $request['libagence'],
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function show(agence $agence)
    {
        return $agence->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function edit(agence $agence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, agence $agence)
    {
        $agence = agence::find($request->id);
        $agence->codeagence = $request->codeagence;
        $agence->libagence = $request->libagence;
        $agence->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function destroy(agence $agence)
    {
        $agence->delete();
        return redirect('/');
    }
}
