<!-- Modal -->
<div class="modal fade" id="modal_add_agence" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une agence</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="fermer_modals()" onclick="fermer_modals()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form method="post" action="enregistrer_agence">

      {{ csrf_field() }}

    <div class="form-group">
      <label for="name">Code</label>
      <input type="text" class="form-control" id="codeagence" placeholder="Code" name="codeagence" required>
    </div>

    <div class="form-group">
      <label for="name">Libelle</label>
      <input type="text" class="form-control" id="libagence" placeholder="Libelle" name="libagence" required>
    </div>

    <center><button type="submit" class="btn btn-primary">Enregistrer</button></center>
  </form>
      </div>
      
    </div>
  </div>
</div>
