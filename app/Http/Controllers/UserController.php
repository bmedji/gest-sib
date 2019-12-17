<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Validator;
use DB;

class UserController extends Controller
{
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
            'matricule' => 'required|string|max:255|unique:users',
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'idfonc' => 'required|string|max:255',
            'idserv' => 'required|string|max:255',
            'password' => 'required|string|min:6',
        ]);
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->matricule = $request['matricule'];
        $user->name = $request['name'];
        $user->surname = $request['surname'];
        $user->idfonc = $request['idfonc'];
        $user->idserv = $request['idserv'];
        $user->password = Hash::make($request['password']);
        $user->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
        return $User->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $User)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $User)
    {
    	$user = User::find($request->id);
        DB::update('update clients set matgest = ? where matgest = ?',[$request->matricule,$user->matricule]);
        $user->matricule = $request->matricule;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->idfonc = $request->idfonc;
        $user->idserv = $request->idserv;
        if(!empty($request->password))
        {
        	$user->password = hash::make($request->password);
        }
        
        $user->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/');
    }
}
