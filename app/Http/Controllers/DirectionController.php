<?php

namespace App\Http\Controllers;

use App\direction;
use Illuminate\Http\Request;

class DirectionController extends Controller
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
        direction::create([
            'codedir' => $request['codedir'],
            'libelledir' => $request['libelledir'],
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function show(direction $direction)
    {
        return $direction->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function edit(direction $direction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, direction $direction)
    {
        $direction = direction::find($request->id);
        $direction->codedir = $request->codedir;
        $direction->libelledir = $request->libelledir;
        $direction->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function destroy(direction $direction)
    {
        $direction->delete();
        return redirect('/');
    }
}
