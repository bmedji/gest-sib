<!-- Modal -->
<div class="modal fade" id="modal_update_fonctionnalite" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier une fonctionnalite</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="fermer_modals()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form method="post" action="admin/update/fonctionnalite">

      {{ csrf_field() }}
      <input type="hidden" id="id" name="id" />
    <div class="form-group">
      <input type="hidden" class="form-control" id="codefonc" placeholder="Code" name="codefonc" required>
    </div>

    <div class="form-group">
      <label for="name">Libelle</label>
      <input type="text" class="form-control" id="libfonc" placeholder="Libelle" name="libfonc" required>
    </div>

    <center><button type="submit" class="btn btn-primary">Enregistrer</button></center>
  </form>
      </div>
      
    </div>
  </div>
</div>
