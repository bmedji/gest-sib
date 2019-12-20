<!-- Modal -->
<div class="modal fade" id="modal_add_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-user"></i>&nbsp;&nbsp;Ajouter un utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="fermer_modals()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       
      <div class="modal-body" >
        <form method="post" action="enregistrer_user">

      {{ csrf_field() }}

    <div class="form-group">
      <label for="matricule">Matricule</label>
      <input type="text" class="form-control" id="matricule" placeholder="Matricule" name="matricule" required>
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
          <select class="form-control" id="idfonc_add" name="idfonc" required="required" onchange="debloquer_rebloquer()">
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
          <select class="form-control" id="idserv_add" name="idserv" required="required" disabled="">
            @foreach($services as $service)
              @if($service->idserv==1)
                <option value="{{$service->idserv}}" id="{{$service->idserv}}">Aucun</option>
              @else
                <option value="{{$service->idserv}}" id="{{$service->idserv}}">{{$service->libelleserv}}</option>
              @endif
            @endforeach
          </select>
      </div>
    </div>

    <div class="form-group">
      <label for="password">Mot de passe</label>
      <div class="input-group">
        <span class="input-group-btn">
          <button type="button" id="btn_afficher" class="btn btn-primary"><i id="img_afficher_add" class="fa fa-eye" onclick="show_password('add')"></i></button>
        </span>
        <input type="password" pattern=".{6,}" title="6 characters minimum" class="form-control" rows="3" id="passwd_add" placeholder="Password" name="password" required="required">
      </div>
      
    </div>
    <center><button type="submit" onclick="enable()" class="btn btn-primary">Enregistrer</button></center>
  </form>
      </div>
      
    </div>
  </div>
</div>

<script type="text/javascript">
  
  function debloquer_rebloquer()
  {
    var idserv_add = document.getElementById('idserv_add');
    var idfonc_add = document.getElementById('idfonc_add');
    var aucun = document.getElementById('1');
    var deux = document.getElementById('2');

    if(idfonc_add.value=="5")
    {
      idserv_add.removeAttribute('disabled');
      //aucun.setAttribute('readonly','readonly');
      idserv_add.value="";
      idserv_add.removeChild(aucun);
    }
    else
    {
      new_aucun = document.createElement('option',{value:'1',id:'1'});
      new_aucun.innerHTML="Aucun";
      idserv_add.value="1"; 
      idserv_add.insertBefore(new_aucun,deux);
      idserv_add.setAttribute('disabled','disabled');
    }
  }

  function enable()
  {
    var idserv_add = document.getElementById('idserv_add');
    idserv_add.removeAttribute('disabled');
  }

</script>