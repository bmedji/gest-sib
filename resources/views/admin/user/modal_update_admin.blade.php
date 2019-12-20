<!-- Modal -->
<div class="modal fade" id="modal_update_admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier un utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="fermer_modals()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form method="post" action="admin/update/user">

      {{ csrf_field() }}
    <input type="hidden" id="id" name="id" />
    <div class="form-group">
      <label for="matricule">Matricule</label>
      <input type="text" class="form-control" id="matricule" placeholder="Matricule" name="matricule" required>
    </div>

    <div class="form-group">
      <label for="password">Nom</label>
      <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
    </div>

    <div class="form-group">
      <label for="surname">Prénom(s)</label>
      <input type="text" class="form-control" id="surname" placeholder="Prénom" name="surname" required>
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" name="idfonc" id="idfonc">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" name="idserv" id="idserv">
    </div>

    <div class="form-group">
      <label for="password">Mot de passe</label>
      <div class="input-group">
        <span class="input-group-btn">
          <button type="button" id="btn_afficher" class="btn btn-primary"><i id="img_afficher_update_admin" class="fa fa-eye" onclick="show_password('update_admin')"></i></button>
        </span>
        <input type="password" pattern=".{6,}" title="6 characters minimum" class="form-control" rows="3" id="passwd_update_admin" placeholder="Password" name="password">
      </div>
      
    </div>
    <center><button type="submit" class="btn btn-primary">Enregistrer</button></center>
  </form>
      </div>
      
    </div>
  </div>
</div>