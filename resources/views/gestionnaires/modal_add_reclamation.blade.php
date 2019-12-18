<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Saisir une réclamation</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="fermer_modals()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form method="post" action="/" enctype="multipart/form-data">

      {{ csrf_field() }}

   <!--<div class="form-group">
      <label for="Référence">Référence</label>
      <input type="text" class="form-control" id="referencerec" placeholder="Référence" name="referencerec" onkeydown="verifier_cle_primaire(this.id,0)" required="required">
      <div id="error" style="color:red;"></div>
    </div> -->

    <div class="form-group">
      <label for="motif">Motif</label>
      <textarea class="form-control" rows="3" id="motif" placeholder="Motif" name="motifrec" required="required"></textarea>
    </div>

    <div class="form-group">
      <label for="resume">Resume</label>
      <textarea class="form-control" rows="3" id="resume" placeholder="Resume" name="resumerec" required="required"></textarea>
    </div>

    <div class="form-group">
      <label class="control-label" for="codecli">Client</label>
      <div>
          <select class="form-control" id="codecli" name="codecli" required="required">
            <option value="">Select client</option>
            @foreach($clients_gestionnaires as $client_gestionnaire)
              <option value="{{$client_gestionnaire->codecli}}">{{$client_gestionnaire->nomcli.' '.$client_gestionnaire->prenomcli}}</option>
            @endforeach
          </select>
      </div>
    </div>

    <div class="form-group">
      <label for="resume">Observation</label>
      <textarea class="form-control" rows="3" id="observation" placeholder="Observation" name="observation" required="required"></textarea>
    </div>

    <div class="form-group">
      <label class="control-label" for="resume">Pièce comptable</label>
      <input type="file" name="pc" class="form-control" accept=".png, .jpg, .jpeg, .pdf" /><br/>
    </div>

    <center><button type="submit" class="btn btn-primary" id="valider">Enregistrer</button></center>
  </form>
      </div>
      
    </div>
  </div>
</div>


<script type="text/javascript" src="scripts_js/verifier_cle_primaire.js">
</script>
