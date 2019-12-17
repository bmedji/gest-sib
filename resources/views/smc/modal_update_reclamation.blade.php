<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Attribuer une unité traitante</h5>
        <button type="button" class="close" data-dismiss="modal" onclick="fermer_modals()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form method="post" action="/update">

      {{ csrf_field() }}
      <input type="hidden" id="id" name="id"/>
    <div class="form-group">
      <input type="hidden" class="form-control" id="referencerec_update" placeholder="Référence" name="referencerec">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="motifrec" placeholder="Motif" name="motifrec">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="resumerec" placeholder="Resume" name="resumerec">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="daterecprec" placeholder="Resume" name="daterecprec">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="datetraiterec" placeholder="Resume" name="datetraiterec">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="etatrec" placeholder="Resume" name="etatrec">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="statutrec" placeholder="Resume" name="statutrec">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="codecli" placeholder="Code client" name="codecli">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="observation" placeholder="Observation" name="observation">
    </div>

    <div class="form-group">
      <label class="control-label" for="idserv">Unité Traitante</label>
      <div>
          <select class="form-control" id="idserv" name="idserv" required>
            <option value="">Choisir le service</option>
            @foreach($services_smc as $service_smc)
              <option value="{{$service_smc->idserv}}">{{$service_smc->libelleserv}}</option>
            @endforeach
          </select>
      </div>
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="aregulariser" placeholder="A regulariser" name="aregulariser">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="valider" placeholder="Status validation superviseur" name="valider">
    </div>


    <center><button type="submit" class="btn btn-primary">Assigner</button></center>
  </form>
      </div>
      
    </div>
  </div>
</div>
