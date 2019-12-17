<?php

namespace App\Http\Controllers;

use App\type_service;
use Illuminate\Http\Request;

class TypeServiceController extends Controller
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
        type_service::create([
            'idtypeserv' => $request['idtypeserv'],
            'libtypserv' => $request['libtypserv'],
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\type_service  $type_service
     * @return \Illuminate\Http\Response
     */
    public function show(type_service $type_service)
    {
        return $type_service->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\type_service  $type_service
     * @return \Illuminate\Http\Response
     */
    public function edit(type_service $type_service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\type_service  $type_service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, type_service $type_service)
    {
        $type_service = type_service::find($request->id);
        $type_service->idtypeserv = $request->idtypeserv;
        $type_service->libtypserv = $request->libtypserv;
        $type_service->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\type_service  $type_service
     * @return \Illuminate\Http\Response
     */
    public function destroy(type_service $type_service)
    {
        $type_service->delete();
        return redirect('/');
    }
}
