<?php

namespace App\Http\Controllers;

use App\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
         service::create([
            'idserv' => $request['idserv'],
            'libelleserv' => $request['libelleserv'],
            'codedir' => $request['codedir'],
            'idtypeserv' => $request['idtypeserv'],
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        return $service->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
        $service = service::find($request->id);
        $service->idserv = $request->idserv;
        $service->libelleserv = $request->libelleserv;
        $service->codedir = $request->codedir;
        $service->idtypeserv = $request->idtypeserv;
        $service->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        $service->delete();
        return redirect('/');
    }

    public function afficher_tout_les_services()
    {
        $tout_services = service::all();
        return $tout_services->toJson();
    }
}
