
            
            <div class="table-responsive m-t-40">
                <div id="example23_wrapper" class="dataTables_wrapper"><table id="tableau_reclamation_superviseur" class="display nowrap table table-hover table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
                    <thead>
            <tr role="row"><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 70.4px;">Reference</th><th class="sorting_desc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 81.4px;" aria-sort="descending">Motif</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 67.4px;">Resume</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 45.4px;">Date reception</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 76.4px;">Date traitement</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Etat</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Statut</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Client</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Observations</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Pièce Comptable</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">A Regulariser</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Validée</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78.4px;">Opérations</th></tr>
        </thead>
                    <tbody>
                    @foreach($reclamations_superviseur_all as $reclamation)
                    <tr role="row" style="text-align: center;">
                <td class="" id="referencerec_{{$reclamation->id}}">{{$reclamation->referencerec}}</td>
                            <td class="sorting_1" id="motifrec_{{$reclamation->id}}">{{$reclamation->motifrec}}</td>
                            <td id="resumerec_{{$reclamation->id}}">{{$reclamation->resumerec}}</td>
                            <td id="daterecprec_{{$reclamation->id}}">{{$reclamation->daterecprec}}</td>
                            <td id="datetraiterec_{{$reclamation->id}}">{{$reclamation->datetraiterec}}</td>
                            <td id="etatrec_{{$reclamation->id}}">{{$reclamation->etatrec}}</td>
                            <td id="statutrec_{{$reclamation->id}}">{{$reclamation->statutrec}}</td>
                            <td id="nomcli_{{$reclamation->id}}">{{$reclamation->nomcli.' '.$reclamation->prenomcli}}</td>
                            <td id="observation_{{$reclamation->id}}">{{$reclamation->observation}}</td>
                            <td id="pc_{{$reclamation->PieceComptable}}">
                                @if(!empty($reclamation->PieceComptable))
                                    <a target="_blank" href="/find/{{$reclamation->PieceComptable}}"><i class="fa fa-download"></i></a>
                                @endif
                            </td>
                            <td id="aregulariser_{{$reclamation->id}}">{{$reclamation->aregulariser}}</td>
                            <td id="valider_{{$reclamation->valider}}">{{$reclamation->valider}}</td>
                            <td style="width: 100%">
                    @if($reclamation->valider!="Oui")
                        @include('superviseurs/formulaire_valider')
                    @endif
                    <button type="button" class="btn btn-primary" onclick="afficher_details_reclamation({{$reclamation->id}})" title="Afficher les details">
                                        <i class="fa fa-info"></i>
                                    </button>
                    
                </form>   
            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table></div>
            </div>
