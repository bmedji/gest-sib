<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-pills m-t-30 m-b-30">
                <li class=" nav-item"> <a href="#bilan" class="nav-link active show" data-toggle="tab" aria-expanded="false">Bilan</a> </li>
                <li class="nav-item"> <a href="#reclamation" class="nav-link" data-toggle="tab" aria-expanded="false">Réclamations</a> </li>
            </ul>
            <div class="tab-content br-n pn">
                <div id="bilan" class="tab-pane active show">
                    <div class="container-fluid">
                        <!-- Start Page Content -->
                        @include('superviseurs/bilan')
                        <!-- End PAge Content -->
                    </div>
                </div>
                <div id="reclamation" class="tab-pane">
                    <div class="container-fluid">
                        <!-- Start Page Content -->
                        @include('superviseurs/reclamation')
                        <!-- End PAge Content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
</div>