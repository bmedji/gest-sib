<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use App\client;
use App\service;
use App\direction;
use App\reclamation;
use App\type_service;
use App\gestionnaire;
use App\agence;
use App\fonctionnalite;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $reclamations_superviseur_all = DB::table('reclamations')
        ->join('clients','clients.codecli','=','reclamations.codecli')
        ->select('reclamations.*','clients.codecli','clients.nomcli','clients.prenomcli')
        ->get();

        $reclamations_clients_gestionnaires = DB::table('reclamations')
            ->join('clients','clients.codecli','=','reclamations.codecli')
            ->select('reclamations.*','clients.matgest','clients.codecli','clients.nomcli','clients.prenomcli')
            ->where('reclamations.idserv','=','')
            ->orWherenull('reclamations.idserv')
            ->get();

        $reclamations_clients_gestionnaires_traitees_non_fondees = DB::table('reclamations')
            ->join('clients','clients.codecli','=','reclamations.codecli')
            ->select('reclamations.*','clients.matgest','clients.codecli','clients.nomcli','clients.prenomcli')
            ->where('reclamations.statutrec','=','Non Fondée')
            ->where('reclamations.etatrec','=','Traitée')
            ->where('reclamations.idserv','<>','')
            ->get();

        $reclamations_clients_gestionnaires_traitees_fondees_sans_pc = DB::table('reclamations')
            ->join('clients','clients.codecli','=','reclamations.codecli')
            ->join('users','users.matricule','=','clients.matgest')
            ->select('reclamations.*','clients.codecli','clients.nomcli','clients.matgest','clients.prenomcli','users.matricule','users.name')
            ->where('reclamations.statutrec','=','Fondée')
            ->where('reclamations.etatrec','=','Traitée')
            ->where('reclamations.aregulariser','=','Non')
            ->Wherenull('reclamations.PieceComptable')
            ->get();

        $reclamations_clients_gestionnaires_traitees_fondees_avec_pc = DB::table('reclamations')
            ->join('clients','clients.codecli','=','reclamations.codecli')
            ->join('users','users.matricule','=','clients.matgest')
            ->select('reclamations.*','clients.codecli','clients.nomcli','clients.matgest','clients.prenomcli','users.matricule','users.name')
            ->where('reclamations.statutrec','=','Fondée')
            ->where('reclamations.etatrec','=','Traitée')
            ->where('reclamations.aregulariser','=','Oui')
            ->Wherenotnull('reclamations.PieceComptable')
            ->get();


        $reclamations_smc_a_assigner = DB::table('reclamations')
            ->join('clients','clients.codecli','=','reclamations.codecli')
            ->join('users','users.matricule','=','clients.matgest')
            ->select('reclamations.*','clients.codecli','clients.nomcli','clients.prenomcli','users.matricule','users.name')
            ->where('reclamations.idserv','=','')
            ->orWherenull('reclamations.idserv')
            ->get();

        $reclamations_smc_non_regulariser = DB::table('reclamations')
            ->join('clients','clients.codecli','=','reclamations.codecli')
            ->join('users','users.matricule','=','clients.matgest')
            ->select('reclamations.*','clients.codecli','clients.nomcli','clients.prenomcli','users.matricule','users.name')
            ->where('reclamations.statutrec','=','Fondée')
            ->where('reclamations.etatrec','=','Traitée')
            ->where('reclamations.valider','=','Oui')
            ->where('reclamations.aregulariser','=','Non')
            ->get();

        $reclamations_smc_non_fonder = DB::table('reclamations')
            ->join('clients','clients.codecli','=','reclamations.codecli')
            ->join('users','users.matricule','=','clients.matgest')
            ->select('reclamations.*','clients.codecli','clients.nomcli','clients.prenomcli','users.matricule','users.name')
            ->where('reclamations.statutrec','=','Non Fondée')
            ->where('reclamations.etatrec','=','Traitée')
            ->where('reclamations.valider','=','Oui')
            ->get();

        $reclamations_unite = DB::table('reclamations')
            ->join('clients','clients.codecli','=','reclamations.codecli')
            ->join('users','users.matricule','=','clients.matgest')
            ->join('services','services.idserv','=','users.idserv')
            ->select('reclamations.*','clients.codecli','clients.nomcli','clients.prenomcli','users.matricule','users.name','services.idserv','services.libelleserv')
            ->where('reclamations.idserv','=',$user->idserv)
            ->where('reclamations.statutrec','=','En cours')
            ->get();



        $nom_service_unite = DB::table('services')
        ->where('services.idserv','=',$user->idserv)
        ->select('libelleserv')
        ->get();

        $services_users_fonctionnalites = DB::table('users')
            ->join('services', 'services.idserv', '=', 'users.idserv')
            ->join('fonctionnalites','fonctionnalites.codefonc','=','users.idfonc')
            ->select('users.*','services.idserv','services.libelleserv','fonctionnalites.codefonc','fonctionnalites.libfonc')
            ->get();
        $clients = client::all();

        $clients_gestionnaires = DB::table('clients')
        ->where('clients.matgest','=',$user->matricule)
        ->get();
        
        $services = service::all();
        $services_smc = DB::table('services')
        ->where('libelleserv','<>','')
        ->get();
        $directions = direction::all();
        $type_services = type_service::all();
        $gestionnaires = DB::table('users')
        ->where('idfonc','=','2')
        ->get();
        $agences = agence::all();
        $fonctionnalites = fonctionnalite::all();
        $direction_service_types = DB::table('services')
            ->join('directions','directions.codedir','=','services.codedir')
            ->join('type_services','services.idtypeserv','=','type_services.idtypeserv')
            ->select('services.*','directions.codedir','directions.libelledir','type_services.idtypeserv','type_services.libtypserv')
            ->get();

        /*$services_gestionnaires_agences = DB::table('gestionnaires')
        ->join('services','services.idserv','=','gestionnaires.idserv')
        ->join('agences','gestionnaires.agencegest','=','agences.codeagence')
        ->select('gestionnaires.*','services.idserv','services.libelleserv','agences.codeagence','agences.libagence')
        ->get();*/

        $gestionnaires_clients = DB::table('clients')
        ->join('users','users.matricule','=','clients.matgest')
        ->where('users.idfonc','=','2')
        ->select('clients.*','users.matricule','users.name')
        ->get();

        $reclamations_df = DB::table('reclamations')
            ->join('clients','clients.codecli','=','reclamations.codecli')
            ->join('users','users.matricule','=','clients.matgest')
            ->select('reclamations.*','clients.codecli','clients.nomcli','clients.prenomcli','users.matricule','users.name')
            ->where('reclamations.statutrec','=','Fondée')
            ->where('reclamations.etatrec','=','Traitée')
            ->where('reclamations.aregulariser','=','Oui')
            ->where('reclamations.valider','=','Oui')
            ->Wherenotnull('reclamations.PieceComptable')
            ->get();

        

        switch ($user->idfonc) {
            case '1':
                return view('admin/dashboard_admin',compact('services_users_fonctionnalites','services','directions','type_services','direction_service_types','gestionnaires_clients','gestionnaires','agences','fonctionnalites'));
                break;
            case '2':
                return view('gestionnaires/dashboard_gestionnaires',compact('reclamations_clients_gestionnaires','reclamations_clients_gestionnaires_traitees_non_fondees','reclamations_clients_gestionnaires_traitees_fondees_sans_pc','reclamations_clients_gestionnaires_traitees_fondees_avec_pc','clients','clients_gestionnaires','user','gestionnaires_clients','gestionnaires'));
                break;
            case '3':
                return view('superviseurs/dashboard_superviseur',compact('reclamations_superviseur_all','services'));
                break;
            case '4':
                return view('smc/dashboard_smc',compact('reclamations_smc_a_assigner','reclamations_smc_non_regulariser','reclamations_smc_non_fonder','services_smc'));
                break;
            case '5':
                return view('unite_traitante/dashboard_unite_traitante',compact('reclamations_unite','services','user','nom_service_unite'));
                break;
            case '6':
                return view('df/dashboard_df',compact('reclamations_df','services','user','nom_service_unite'));
                break;
            default:
                # code...
                break;
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}