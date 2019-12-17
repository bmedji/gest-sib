<!-- Modal -->
<div class="modal fade" id="modal_add_client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un client</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="fermer_modals()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form method="post" action="/enregistrer_client">

      {{ csrf_field() }}

    <div class="form-group">
      <input type="hidden" class="form-control" id="codecli" placeholder="Matricule" value="{{$gestionnaires_clients->count()+1}}" onkeyup="verifier_cle_primaire(this.id,1)" name="codecli" required>
      <div id="error" style="color:red;"></div>
    </div>

    <div class="form-group">
      <label for="name">Nom</label>
      <input type="text" class="form-control" id="nomcli" placeholder="Name" name="nomcli" required>
    </div>

    <div class="form-group">
      <label for="name">Prenom</label>
      <input type="text" class="form-control" id="prenomcli" placeholder="Name" name="prenomcli" required>
    </div>

    <div class="form-group">
      <label for="name">Numero de compte</label>
      <input type="text" class="form-control" id="numerodecomptecli" placeholder="Name" name="numerodecomptecli" required>
    </div>

    <div class="form-group">
      <label class="control-label" for="matgest">Gestionnaire</label>
      <div>
          <select class="form-control" id="matgest" name="matgest">
            <option value="">Choisir un gestionnaire</option>
            @foreach($gestionnaires as $gestionnaire)
              <option value="{{$gestionnaire->matricule}}">{{$gestionnaire->name}}</option>
            @endforeach
          </select>
      </div>
    </div>

    
    <center><button type="submit" id="valider" class="btn btn-primary">Enregistrer</button></center>
  </form>
      </div>
      
    </div>
  </div>
</div>


<script type="text/javascript" src="scripts_js/verifier_cle_primaire.js">
</script>