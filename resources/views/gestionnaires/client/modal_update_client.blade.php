<!-- Modal -->
<div class="modal fade" id="modal_update_client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier un client</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="fermer_modals()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form method="post" action="admin/update/client">

      {{ csrf_field() }}
    <input type="hidden" id="id" name="id" />
    <div class="form-group">
      <input type="hidden" class="form-control" id="codecli" placeholder="Matricule" name="codecli" required>
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
      <input type="hidden" name="matgest" value="{{$user->matricule}}">
    </div>

    <center><button type="submit" class="btn btn-primary">Enregistrer</button></center>
  </form>
      </div>
      
    </div>
  </div>
</div>

<script type="text/javascript" src="scripts_js/update_client.js">
</script>