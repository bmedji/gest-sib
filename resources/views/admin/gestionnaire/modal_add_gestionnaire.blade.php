<!-- Modal -->
<div class="modal fade" id="modal_add_gestionnaire" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un gestionnaire</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="fermer_modals()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form method="post" action="enregistrer_gestionnaire">

      {{ csrf_field() }}

    <div class="form-group">
      <label for="name">Matricule</label>
      <input type="text" class="form-control" id="matgest" placeholder="Matricule" name="matgest" required>
    </div>

    <div class="form-group">
      <label for="name">Nom et prenom</label>
      <input type="text" class="form-control" id="nomprengest" placeholder="Nom et Prenom" name="nomprengest" required>
    </div>
    <div class="form-group">
      <label class="control-label" for="codecli">Agence</label>
      <div>
          <select class="form-control" id="agencegest" name="agencegest">
            <option value="">Choisir une Agence</option>
            @foreach($agences as $agence)
              <option value="{{$agence->codeagence}}">{{$agence->libagence}}</option>
            @endforeach
          </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label" for="codecli">Service</label>
      <div>
          <select class="form-control" id="idserv" name="idserv">
            <option value="">Choisir un service</option>
            @foreach($services as $service)
              <option value="{{$service->idserv}}">{{$service->libelleserv}}</option>
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
