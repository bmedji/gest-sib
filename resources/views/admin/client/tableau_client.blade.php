            <div class="table-responsive m-t-40">
                <div id="example23_wrapper" class="dataTables_wrapper"><table id="tableau_client_2" class="display nowrap table table-hover table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
                    <thead>
                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 70.4px;">Code</th><th class="sorting_desc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 81.4px;" aria-sort="descending">Nom</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 67.4px;">Prenom</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 67.4px;">Numero de compte</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 67.4px;">Gestionnaire</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 67.4px;">Opérations</th></tr>
                    </thead>
                    <tbody>
                    @foreach($gestionnaires_clients as $gestionnaire_client)
                    <tr role="row" style="text-align: center;">
                            <td class="">{{$gestionnaire_client->codecli}}</td>
                            <td class="sorting_1">{{$gestionnaire_client->nomcli}}</td>
                            <td>{{$gestionnaire_client->prenomcli}}</td>
                            <td class="">{{$gestionnaire_client->numerodecomptecli}}</td>
                            <td class="">{{$gestionnaire_client->name}}</td>
                            <td>
                                
                                    <button type="button" class="btn btn-primary" id="lanceur" value="{{ $gestionnaire_client->id }}"  onclick="show_client(this.value)" data-toggle="modal"  data-target="#modal_update_client" data-whatever="{{ $gestionnaire_client->id }}" title="Modifier">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </form>   
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table></div>
            </div>