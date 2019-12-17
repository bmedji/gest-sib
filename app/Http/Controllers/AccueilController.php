<?php

namespace App\Http\Controllers;

use App\client;
use App\reclamation;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {
        $reclamations = reclamation::all();
        $clients = client::all();
        return view('superviseurs.dashboard_superviseur',compact('reclamations','clients'));
    }
}
