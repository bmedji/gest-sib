<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User;
use App\utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UtilisateurController extends Controller
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
    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
    }

    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function show(User $utilisateur)
    {
        return $utilisateur->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function edit(utilisateur $utilisateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, utilisateur $utilisateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(utilisateur $utilisateur)
    {
        $utilisateur->delete();
        redirect('/');
    }
}
