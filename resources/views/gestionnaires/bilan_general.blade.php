@include('layout/modal_details_reclamation')


<div class="col-md-12" >
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Liste</h4>
            <ul class="nav nav-pills m-t-30 m-b-30" id="myTab">
                <li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Reclamations</a> </li>
                <li class=" nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Reclamations Non Fondées</a> </li>
                <li class=" nav-item"> <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="false">Reclamations Fondées Sans Pièce Comptable</a> </li>
                <li class=" nav-item"> <a href="#navpills-4" class="nav-link" data-toggle="tab" aria-expanded="false">Reclamations Fondées Avec Pièce Comptable</a> </li>
                <li class="nav-item"> <a href="#navpills-5" class="nav-link" data-toggle="tab" aria-expanded="false">Clients</a> </li>
            </ul>
            <div class="tab-content br-n pn">
                <div id="navpills-1" class="tab-pane active">
                    <div class="row">
                        @include('gestionnaires/tableau_reclamation')
                    </div>
                </div>
                <div id="navpills-2" class="tab-pane">
                    <div class="row">
                        @include('gestionnaires/tableau_reclamation_traitees_non_fondees')
                    </div>
                </div>
                <div id="navpills-3" class="tab-pane">
                    <div class="row">
                        @include('gestionnaires/tableau_reclamation_traitees_fondees_sans_pc')
                    </div>
                </div>
                <div id="navpills-4" class="tab-pane">
                    <div class="row">
                        @include('gestionnaires/tableau_reclamation_traitees_fondees_avec_pc')
                    </div>
                </div>
                <div id="navpills-5" class="tab-pane">
                    <div class="row">
                        @include('gestionnaires/client/tableau_client')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
