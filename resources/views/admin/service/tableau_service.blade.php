            <div class="table-responsive m-t-40">
                <div id="example23_wrapper" class="dataTables_wrapper"><table id="tableau_service" class="display nowrap table table-hover table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
                    <thead>
                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 70.4px;">Code</th><th class="sorting_desc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 81.4px;" aria-sort="descending">Libelle</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 67.4px;">Direction</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 67.4px;">Type Service</th><th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 67.4px;">Opérations</th></tr>
                    </thead>
                    <tbody>
                    @foreach($direction_service_types as $direction_service_type)
                    <tr role="row" style="text-align: center;">
                            <td class="">{{$direction_service_type->idserv}}</td>
                            <td class="sorting_1">{{$direction_service_type->libelleserv}}</td>
                            <td class="sorting_1">{{$direction_service_type->libelledir}}</td>
                            <td>{{$direction_service_type->libtypserv}}</td>
                            <td>
                                    <button type="button" class="btn btn-primary" id="lanceur" value="{{ $direction_service_type->id }}"  onclick="show_service(this.value)" data-toggle="modal"  data-target="#modal_update_service" data-whatever="{{ $direction_service_type->id }}" title="Modifier">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </form>   
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table></div>
            </div>