<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Saisir une réclamation</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="fermer_modals()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form method="post" action="/update">

      {{ csrf_field() }}
      <input type="hidden" id="id" name="id"/>
    <div class="form-group">
      <label for="Référence">Référence</label>
      <input type="text" class="form-control" id="referencerec_update" placeholder="Référence" name="referencerec" onkeydown="verifier_cle_reclamation(this.id)" required="">
      <div id="error_update_referencerec"></div>
    </div>

    <div class="form-group">
      <label for="motif">Motif</label>
      <textarea class="form-control" rows="3" id="motifrec" placeholder="Motif" name="motifrec" required=""></textarea>
    </div>

    <div class="form-group">
      <label for="resume">Resume</label>
      <textarea class="form-control" rows="3" id="resumerec" placeholder="Resume" name="resumerec" required=""></textarea>
    </div>

    <div class="form-group">
      <label class="control-label" for="codecli">Client</label>
      <div>
          <select class="form-control" id="codecli" name="codecli" required="">
            <option value="">Select client</option>
            @foreach($clients_gestionnaires as $client)
              <option value="{{$client->codecli}}">{{$client->nomcli}}</option>
            @endforeach
          </select>
      </div>
    </div>

    <div class="form-group">
      <label for="resume">Observation</label>
      <textarea class="form-control" rows="3" id="observation" placeholder="Observation" name="observation" required=""></textarea>
    </div>


    <center><button type="submit" id="modifier_reclamation" class="btn btn-primary">Modifier</button></center>
  </form>
      </div>
      
    </div>
  </div>
</div>
