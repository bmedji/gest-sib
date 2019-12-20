<!-- Modal -->
<div class="modal fade" id="modal_add_type_service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un Type de Service</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="fermer_modals()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form method="post" action="enregistrer_type_service">

      {{ csrf_field() }}

    <div class="form-group">
      <label for="name">Code</label>
      <input type="text" class="form-control" id="idtypeserv" placeholder="Code" name="idtypeserv" required>
    </div>

    <div class="form-group">
      <label for="name">Libelle</label>
      <input type="text" class="form-control" id="libtypserv" placeholder="Libelle" name="libtypserv" required>
    </div>
    <center><button type="submit" class="btn btn-primary">Enregistrer</button></center>
  </form>
      </div>
      
    </div>
  </div>
</div>
