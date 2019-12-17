<div class="col-md-12" >
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Liste Réclamations</h4>
            <ul class="nav nav-pills m-t-30 m-b-30" id="myTab">
                <li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">A Assigner</a> </li>
                <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Fondées Sans Pièce Comptable</a> </li>
                <li class="nav-item"> <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">Non Fondées</a> </li>
            </ul>
            <div class="tab-content br-n pn">
                <div id="navpills-1" class="tab-pane active">
                    <div class="row">
                        @include('smc/tableau_reclamation_a_assigner')
                    </div>
                </div>
                <div id="navpills-2" class="tab-pane">
                    <div class="row">
                        @include('smc/tableau_reclamation_non_regulariser')
                    </div>
                </div>
                <div id="navpills-3" class="tab-pane">
                    <div class="row">
                        @include('smc/tableau_reclamation_non_fonder')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
