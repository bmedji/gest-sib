<!-- Modal -->
<div class="modal fade" id="modal_update_service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier un service</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="fermer_modals()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form method="post" action="admin/update/service">

      {{ csrf_field() }}
    <input type="hidden" id="id" name="id" />
    <div class="form-group">
      <input type="hidden" class="form-control" id="idserv" placeholder="Code" name="idserv" required>
    </div>

    <div class="form-group">
      <label for="name">Libelle</label>
      <input type="text" class="form-control" id="libelleserv" placeholder="Libelle" name="libelleserv" required>
    </div>

    <div class="form-group">
      <label class="control-label" for="codecli">Direction</label>
      <div>
          <select class="form-control" id="codedir" name="codedir">
            <option value="">Choisir une direction</option>
            @foreach($directions as $direction)
              <option value="{{$direction->codedir}}">{{$direction->libelledir}}</option>
            @endforeach
          </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label" for="codecli">Direction</label>
      <div>
          <select class="form-control" id="idtypeserv" name="idtypeserv" required>
            <option value="" disabled="true">Choisir Type Service</option>
            @foreach($type_services as $type_service)
              <option value="{{$type_service->idtypeserv}}">{{$type_service->libtypserv}}</option>
            @endforeach
          </select>
      </div>
    </div>
    <center><button type="submit" class="btn btn-primary">Enregistrer</button></center>
  </form>
      </div>
      
    </div>
  </div>
</div>
