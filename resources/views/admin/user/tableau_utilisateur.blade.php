            <div class="table-responsive m-t-40">
                <div id="example23_wrapper" class="dataTables_wrapper"><table id="tableau_user" class="display nowrap table table-hover table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
                    <thead>
                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 70.4px;">Matricule</th><th class="sorting_desc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 81.4px;" aria-sort="descending">Nom</th><th class="sorting_desc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 81.4px;" aria-sort="descending">Prénom(s)</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 67.4px;">Fonction</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 67.4px;">Service</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 67.4px;">Opérations</th></tr>
                    </thead>
                    <tbody>
                    @foreach($services_users_fonctionnalites as $service_user_fonctionnalite)
                    <tr role="row" style="text-align: center;">
                            <td class="sorting_1">{{$service_user_fonctionnalite->matricule}}</td>
                            <td class="">{{$service_user_fonctionnalite->name}}</td>
                            <td class="">{{$service_user_fonctionnalite->surname}}</td>
                            <td>{{$service_user_fonctionnalite->libfonc}}</td>
                            <td>{{$service_user_fonctionnalite->libelleserv}}</td>
                            <td>
                                <form action="{{ url('/admin/delete_user/'.$service_user_fonctionnalite->id) }}" method="POST">
                                <button type="button" class="btn btn-primary" id="lanceur" value="{{ $service_user_fonctionnalite->id }}"  onclick="show_admin(this.value)" data-toggle="modal"  data-target="#modal_update_admin" data-whatever="{{ $service_user_fonctionnalite->id }}" title="Modifier">
                                        <i class="fa fa-edit"></i>
                                </button>
                                @if($service_user_fonctionnalite->idfonc!=2)
                                
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger" title="Supprimer">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                @endif
                                </form>   
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table></div>
            </div>