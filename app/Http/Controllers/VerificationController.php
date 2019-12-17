<?php

namespace App\Http\Controllers;

use App\reclamation;
use App\client;

use Illuminate\Http\Request;


class VerificationController extends Controller
{
    function retourner_toutes_reclamations()
    {
    	$reclamations = reclamation::all()->toJson();
    	$clients = client::all()->toJson();

    	return [$reclamations , $clients];
    }
}
