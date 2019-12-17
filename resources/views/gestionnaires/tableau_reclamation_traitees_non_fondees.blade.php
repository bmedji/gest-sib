

<div class="table-responsive m-t-40">
    <div id="example23_wrapper" class="dataTables_wrapper"><table id="tableau_reclamation_gestionnaire_traite_non_fondees" class="display nowrap table table-hover table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
        <thead>
            <tr role="row"><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 70.4px;">Reference</th><th class="sorting_desc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 81.4px;" aria-sort="descending">Motif</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 67.4px;">Resume</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 45.4px;">Date reception</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 76.4px;">Date traitement</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Etat</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Statut</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Client</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Observations</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Pièce Comptable</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 100%;">Opérations</th></tr>
        </thead>
        <tbody>
        @foreach($reclamations_clients_gestionnaires_traitees_non_fondees as $reclamation_client)
        @if($reclamation_client->matgest==$user->matricule)
        <tr role="row" style="text-align: center;" >
                <td class="" id="referencerec_{{$reclamation_client->id}}">{{$reclamation_client->referencerec}}</td>
                <td class="sorting_1" id="motifrec_{{$reclamation_client->id}}">{{$reclamation_client->motifrec}}</td>
                <td id="resumerec_{{$reclamation_client->id}}">{{$reclamation_client->resumerec}}</td>
                <td id="daterecprec_{{$reclamation_client->id}}">{{$reclamation_client->daterecprec}}</td>
                <td id="datetraiterec_{{$reclamation_client->id}}">{{$reclamation_client->datetraiterec}}</td>
                <td id="etatrec_{{$reclamation_client->id}}">{{$reclamation_client->etatrec}}</td>
                <td id="statutrec_{{$reclamation_client->id}}">{{$reclamation_client->statutrec}}</td>
                <td id="nomcli_{{$reclamation_client->id}}">{{$reclamation_client->nomcli}}&nbsp;{{$reclamation_client->prenomcli}}</td>
                <td id="observation_{{$reclamation_client->id}}">{{$reclamation_client->observation}}</td>
                <td id="pc_{{$reclamation_client->PieceComptable}}">
                    @if(!empty($reclamation_client->PieceComptable))
                        <a target="_blank" href="/find/{{$reclamation_client->PieceComptable}}"><i class="fa fa-download"></i></a>
                    @endif
                </td>
                <td>
                    <form action="{{ url('/'.$reclamation_client->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger" title="Supprimer">
                            <i class="fa fa-trash"></i>
                        </button>
                        <button type="button" class="btn btn-primary" id="lanceur" value="{{$reclamation_client->id}}"  onclick="show(this.value)" data-toggle="modal"  data-target="#updateModal" data-whatever="{{$reclamation_client->id}}" title="Modifier">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-primary" onclick="afficher_details_reclamation({{$reclamation_client->id}})" title="Afficher les details">
                            <i class="fa fa-info"></i>
                        </button>
                    </form>   
                </td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table></div>
</div>
