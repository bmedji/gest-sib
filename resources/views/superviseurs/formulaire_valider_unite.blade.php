<form method="post" action="/update">

      {{ csrf_field() }}
      <input type="hidden" id="id_unite" name="id"/>
    <div class="form-group">
      <input type="hidden" class="form-control" id="referencerec_unite" placeholder="Référence" name="referencerec">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="motifrec_unite" placeholder="Motif" name="motifrec">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="resumerec_unite" placeholder="Resume" name="resumerec">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="daterecprec_unite" placeholder="Resume" name="daterecprec">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="datetraiterec_unite" placeholder="Resume" name="datetraiterec">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="etatrec_unite" placeholder="Resume" name="etatrec">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="statutrec_unite" placeholder="Resume" name="statutrec">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="aregulariser_unite" placeholder="Resume" name="aregulariser">
    </div>
    
    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="codecli_unite" placeholder="Code client" name="codecli">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="observation_unite" placeholder="Observation" name="observation">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="idserv_unite" placeholder="A regulariser" name="idserv">
    </div>

    <div class="form-group">
      <input type="hidden" class="form-control" rows="3" id="valider_unite" placeholder="Status validation superviseur" name="valider">
    </div>


    <button type="submit" style="background-color: green; border-color: white;" class="btn btn-primary" id="lanceur" value="{{$reclamation->id}}"  onmouseenter="show_info_formulaire_valider(this.value)"  onmouseleave="remove_info_formulaire_valider()" title="Valider">
                        <i class="fa fa-check"></i>
         