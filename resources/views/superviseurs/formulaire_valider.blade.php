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
      <input type="hidden" class="form-control" rows="3" id="aregulariser" placeholder="Resume" name="aregulariser">
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


    <button type="submit" style="background-color: green; border-color: white;" class="btn btn-primary" id="lanceur" value="{{$reclamation->id}}"  onmouseenter="show_info_formulaire_valider(this.value)"  onmouseleave="remove_info_formulaire_valider()" title="Valider">
                        <i class="fa fa-check"></i>
                    </button>
  

