<!-- Modal -->
<div class="modal fade" id="modal_update_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
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
      <input type="hidden" class="form-control" id="matricule" placeholder="Matricule" name="matricule" required>
    </div>

    <div class="form-group">
      <label for="name">Nom</label>
      <input type="text" class="form-control" id="name" placeholder="Nom" name="name" required>
    </div>

    <div class="form-group">
      <label for="surname">Prénom(s)</label>
      <input type="text" class="form-control" id="surname" placeholder="Prenom" name="surname" required>
    </div>    

    <div class="form-group">
      <label class="control-label" for="codecli">Fonction</label>
      <div>
          <select class="form-control" id="idfonc" name="idfonc">
            <option value="">Choisir une fonction</option>
            @foreach($fonctionnalites as $fonction)
              <option value="{{$fonction->codefonc}}">{{$fonction->libfonc}}</option>
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

    <div class="form-group">
      <label for="password">Mot de passe</label>
      <div class="input-group">
        <span class="input-group-btn">
          <button type="button" id="btn_afficher" class="btn btn-primary"><i id="img_afficher_update" class="fa fa-eye" onclick="show_password('update')"></i></button>
        </span>
        <input type="password" pattern=".{6,}" title="6 characters minimum" class="form-control" rows="3" id="passwd_update" placeholder="Password" name="password">
      </div>
      
    </div>
    <center><button type="submit" class="btn btn-primary">Enregistrer</button></center>
  </form>
      </div>
      
    </div>
  </div>
</div>

<script type="text/javascript">
  function show_password(str_type)
  {
    var img_afficher = document.getElementById("img_afficher_"+str_type);
    
    var passwd = document.getElementById("passwd_"+str_type);
    
    if(passwd.getAttribute("type")=="password")
    {
      passwd.setAttribute("type","text");
      img_afficher.setAttribute("class","fa fa-eye-slash");
    }
    else
    {
      passwd.setAttribute("type","password");
      img_afficher.setAttribute("class","fa fa-eye"); 
    }
    
  }
</script>