<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Liste Réclamations</h4>
            
            
<div class="table-responsive m-t-40">
    <div id="example23_wrapper" class="dataTables_wrapper"><table id="tableau_reclamation_smc_non_regulariser" class="display nowrap table table-hover table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
        <thead>
            <tr role="row"><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 70.4px;">Reference</th><th class="sorting_desc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 81.4px;" aria-sort="descending">Motif</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 67.4px;">Resume</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 45.4px;">Date reception</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 76.4px;">Date traitement</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Etat</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Statut</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Client</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Observations</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Pièce Comptable</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Opérations</th></tr>
        </thead>
        <tbody>
        @foreach($reclamations_df as $reclamation_smc_non_regulariser)
        <tr role="row" style="text-align: center;">
                <td class="" id="referencerec_{{$reclamation_smc_non_regulariser->id}}">{{$reclamation_smc_non_regulariser->referencerec}}</td>
                            <td class="sorting_1" id="motifrec_{{$reclamation_smc_non_regulariser->id}}">{{$reclamation_smc_non_regulariser->motifrec}}</td>
                            <td id="resumerec_{{$reclamation_smc_non_regulariser->id}}">{{$reclamation_smc_non_regulariser->resumerec}}</td>
                            <td id="daterecprec_{{$reclamation_smc_non_regulariser->id}}">{{$reclamation_smc_non_regulariser->daterecprec}}</td>
                            <td id="datetraiterec_{{$reclamation_smc_non_regulariser->id}}">{{$reclamation_smc_non_regulariser->datetraiterec}}</td>
                            <td id="etatrec_{{$reclamation_smc_non_regulariser->id}}">{{$reclamation_smc_non_regulariser->etatrec}}</td>
                            <td id="statutrec_{{$reclamation_smc_non_regulariser->id}}">{{$reclamation_smc_non_regulariser->statutrec}}</td>
                            <td id="nomcli_{{$reclamation_smc_non_regulariser->id}}">{{$reclamation_smc_non_regulariser->nomcli.' '.$reclamation_smc_non_regulariser->prenomcli}}</td>
                            <td id="observation_{{$reclamation_smc_non_regulariser->id}}">{{$reclamation_smc_non_regulariser->observation}}</td>
                            <td id="pc_{{$reclamation_smc_non_regulariser->PieceComptable}}">
                                @if(!empty($reclamation_smc_non_regulariser->PieceComptable))
                                    <a target="_blank" href="/find/{{$reclamation_smc_non_regulariser->PieceComptable}}"><i class="fa fa-download"></i></a>
                                @endif
                            </td>
                <td>
                    <button type="button" class="btn btn-primary" onclick="afficher_details_reclamation({{$reclamation_smc_non_regulariser->id}})" title="Afficher les details">
                                        <i class="fa fa-info"></i>
                                    </button>
                </td>
        </tr>
        @endforeach
        </tbody>
    </table></div>
</div>
        </div>
    </div>
</div>

<script type="text/javascript" src="scripts_js/details_reclamation.js"></script>

@include('layout/modal_details_reclamation')