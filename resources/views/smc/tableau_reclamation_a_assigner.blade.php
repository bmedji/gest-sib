
<div class="table-responsive m-t-40">
    <div id="example23_wrapper" class="dataTables_wrapper"><table id="tableau_reclamation_smc_a_assigner" class="display nowrap table table-hover table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
        <thead>
            <tr role="row"><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 70.4px;">Reference</th><th class="sorting_desc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 81.4px;" aria-sort="descending">Motif</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 67.4px;">Resume</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 45.4px;">Date reception</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 76.4px;">Date traitement</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Etat</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Statut</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Client</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Observations</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Pièce Comptable</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Opérations</th></tr>
        </thead>
        <tbody>
        @foreach($reclamations_smc_a_assigner as $reclamation_smc_a_assigner)
        <tr role="row" style="text-align: center;">
                <td class="" id="referencerec_{{$reclamation_smc_a_assigner->id}}">{{$reclamation_smc_a_assigner->referencerec}}</td>
                            <td class="sorting_1" id="motifrec_{{$reclamation_smc_a_assigner->id}}">{{$reclamation_smc_a_assigner->motifrec}}</td>
                            <td id="resumerec_{{$reclamation_smc_a_assigner->id}}">{{$reclamation_smc_a_assigner->resumerec}}</td>
                            <td id="daterecprec_{{$reclamation_smc_a_assigner->id}}">{{$reclamation_smc_a_assigner->daterecprec}}</td>
                            <td id="datetraiterec_{{$reclamation_smc_a_assigner->id}}">{{$reclamation_smc_a_assigner->datetraiterec}}</td>
                            <td id="etatrec_{{$reclamation_smc_a_assigner->id}}">{{$reclamation_smc_a_assigner->etatrec}}</td>
                            <td id="statutrec_{{$reclamation_smc_a_assigner->id}}">{{$reclamation_smc_a_assigner->statutrec}}</td>
                            <td id="nomcli_{{$reclamation_smc_a_assigner->id}}">{{$reclamation_smc_a_assigner->nomcli.' '.$reclamation_smc_a_assigner->prenomcli}}</td>
                            <td id="observation_{{$reclamation_smc_a_assigner->id}}">{{$reclamation_smc_a_assigner->observation}}</td>
                            <td id="pc_{{$reclamation_smc_a_assigner->PieceComptable}}">
                                @if(!empty($reclamation_smc_a_assigner->PieceComptable))
                                    <a target="_blank" href="/find/{{$reclamation_smc_a_assigner->PieceComptable}}"><i class="fa fa-download"></i></a>
                                @endif
                            </td>
                <td>
                    <button type="button" class="btn btn-primary" id="lanceur" value="{{$reclamation_smc_a_assigner->id}}"  onclick="show(this.value)" data-toggle="modal"  data-target="#updateModal" data-whatever="{{$reclamation_smc_a_assigner->id}}" title="Assigner">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button type="button" class="btn btn-primary" onclick="afficher_details_reclamation({{$reclamation_smc_a_assigner->id}})" title="Afficher les details">
                                        <i class="fa fa-info"></i>
                                    </button>
                    
                </form>   
            </td>
        </tr>
        @endforeach
        </tbody>
    </table></div>
</div>

