<?php

namespace App\Http\Controllers;

use App\client;
use App\service;
use App\reclamation;
use Illuminate\Http\Request;
use DB;
use Storage;
use Response;

class ReclamationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reclamations = reclamation::all();
        $clients = client::all();
        return view('gestionnaires.dashboard_gestionnaires',compact('reclamations','clients'));
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
        $reclamation = new reclamation();
	$nbre_reclamations = count(DB::select('select * from reclamations where DATE_FORMAT(created_at,"%Y")=?',[date('Y')]));
	if(strlen($nbre_reclamations<4)) {
		$str_nbre_reclamations = str_repeat("0",4-strlen($nbre_reclamations)).$nbre_reclamations;
	} else {
		$str_nbre_reclamations = $nbre_reclamation;
	}
	
        $file = $request->file('pc');
	$reference = "SMC/".date('Y')."/".$str_nbre_reclamations;
	
        $reclamation['referencerec'] = $reference;
        $reclamation['motifrec'] = $request['motifrec'];
        $reclamation['resumerec'] = $request['resumerec'];
        //$reclamation['daterecprec'] = date('d/m/Y',strtotime(Date('d/m/Y')));
        $reclamation['daterecprec'] = Date('d/m/Y');
        //$reclamation['datetraiterec'] = date('d/m/Y',strtotime($request['datetraiterec']));
        $reclamation['datetraiterec'] = "";
        $reclamation['etatrec'] = "Non Traitée";
        $reclamation['statutrec'] = "En cours";
        $reclamation['aregulariser'] = "";
        $reclamation['codecli'] = $request['codecli'];
        $reclamation['observation'] = $request['observation'];
        $reclamation['idserv'] = "";
        $reclamation['valider'] = "";
        if(!empty($file))
        {
            $reclamation['PieceComptable'] = $file->getClientOriginalName();

            Storage::put('/'.$file->getClientOriginalName(), file_get_contents($request->file('pc')->getRealPath()));    
        }
        
        $reclamation->save();
        //reclamation::create(request(['referencerec','motifrec','resumerec','daterecprec','datetraiterec','etatrec','statutrec','codecli']));
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function show(reclamation $reclamation)
    {
        return $reclamation->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function edit(reclamation $reclamation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reclamation $reclamation)
    {
        dd($request->all());
        $reclamation = reclamation::find($request->id);
        $reclamation->referencerec = $request->referencerec;
        $reclamation->motifrec = $request->motifrec;
        $reclamation->resumerec = $request->resumerec;
        $reclamation->daterecprec = $request->daterecprec;
        $reclamation->datetraiterec = $request->datetraiterec;
        $reclamation->etatrec = $request->etatrec;
        $reclamation->statutrec = $request->statutrec;
        $reclamation->codecli = $request->codecli;
        $reclamation->observation = $request->observation;
        $reclamation->idserv = $request->idserv;
        $reclamation->aregulariser = $request->aregulariser;
        $reclamation->valider = $request->valider;
        $reclamation->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function destroy(reclamation $reclamation)
    {
        $reclamation->delete();

        return redirect('/');
    }

    public function afficher_toutes_les_reclamations()
    {
        $toute_reclamations = reclamation::all()->toJson();

        $tout_services = service::all()->toJson();
        

        return [$toute_reclamations,$tout_services];
    }

    public function getFile($file)
    {

        $fichier = Storage::get($file); 
        $response = Response::make($fichier, 200);
        $ext = $this->getExt($file);
        switch ($ext) {
            case 'pdf':
                $response->header('Content-Type', 'application/pdf');
                break;
            case 'png':
                $response->header('Content-Type', 'image/png');
                break;
            case 'jpg':
                $response->header('Content-Type', 'image/jpg');
                break;
            case 'jpeg':
                $response->header('Content-Type', 'image/jpeg');
                break;
            default:
                dd('Type de fichier non pris en charge');
                break;
        }

         
        return $response;
    }

    public function getExt($string)
    {
        $ext = explode('.',$string)[1];
        return $ext;
    }
}
