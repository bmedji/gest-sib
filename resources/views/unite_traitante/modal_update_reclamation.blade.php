<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Verification Réclamation</h5>
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
      <label class="control-label" for="statutrec" style="font-size: 20px">Status</label><br />
      <label class="radio">
        <input type="radio" name="statutrec" id="statutrec_non_fonder" onclick="decider(this.id)" value="Non Fondée" checked>
        Non Fondée
      </label>
      <label class="radio">
        <input type="radio" name="statutrec" id="statutrec_fonder" onclick="decider(this.id)" value="Fondée">
        Fondée
      </label>  
    </div>

    <div class="form-group">
      <label class="control-label" for="statutrec" style="font-size: 20px">Decision</label><br />
      <label class="radio">
        <input type="radio" name="aregulariser" id="aregulariser_aucune" value="" checked disabled="">
        Aucune
      </label>
      <label class="radio">
        <input type="radio" name="aregulariser" id="aregulariser_oui" value="Oui" disabled="">
        Avec Pièce Comptable
      </label>
      <label class="radio">
        <input type="radio" name="aregulariser" id="aregulariser_non" value="Non" disabled="">
        Sans Pièce Comptable
      </label>  
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="codecli" placeholder="Code client" name="codecli">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="observation" placeholder="Observation" name="observation">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="idserv" placeholder="A regulariser" name="idserv">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="valider" placeholder="Status validation superviseur" name="valider">
    </div>


    <center><button type="submit" onclick="verifier()" class="btn btn-primary">Valider</button></center>
  </form>
      </div>
      
    </div>
  </div>
</div>

<script type="text/javascript">
  
  function verifier()
  {
    var d = new Date();
    var date = d.getDate() + '/' + (d.getMonth()+1) +'/' + d.getFullYear();
    var aregulariser_non = document.getElementById('aregulariser_non');
    var statutrec_fonder=document.getElementById('statutrec_fonder');
    var etatrec = document.getElementById('etatrec');
    var datetraiterec = document.getElementById('datetraiterec');

    if(statutrec_fonder.checked==true && aregulariser_non.checked==true)
    {
      etatrec.value = "Traitée"; 
    }
    datetraiterec.value = date;
  }

  function decider(str)
  {
    
    var aregulariser_aucune = document.getElementById('aregulariser_aucune');
    var aregulariser_oui = document.getElementById('aregulariser_oui');
    var aregulariser_non = document.getElementById('aregulariser_non');

    if(str=="statutrec_fonder")
    {
      aregulariser_oui.removeAttribute('disabled');
      aregulariser_non.removeAttribute('disabled');
      aregulariser_aucune.checked=false;
      aregulariser_oui.checked=true;
      
    }
    else
    {
      aregulariser_oui.checked=false;
      aregulariser_non.checked=false;
      aregulariser_aucune.checked=true;
      aregulariser_oui.setAttribute('disabled','disabled');
      aregulariser_non.setAttribute('disabled','disabled');
    }
  }

</script>