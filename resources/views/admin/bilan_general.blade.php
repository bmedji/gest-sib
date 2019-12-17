<div class="col-md-12" >
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Liste</h4>
            <ul class="nav nav-pills m-t-30 m-b-30" id="myTab">
                <li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false"><i class="fa fa-user"></i>&nbsp;Utilisateurs</a> </li>
                <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false"><i class="fa fa-group" style="color:purple"></i>&nbsp;Directions</a> </li>
                <li class="nav-item"> <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true"><i class="fa fa-object-ungroup" style="color:gray"></i>&nbsp;Type Services</a> </li>
                <li class="nav-item"> <a href="#navpills-4" class="nav-link" data-toggle="tab" aria-expanded="true"><i class="fa fa-object-group" style="color:brown" ></i>&nbsp;Services</a> 
                <li class="nav-item"> <a href="#navpills-6" class="nav-link" data-toggle="tab" aria-expanded="true"><i class="fa fa-building" style="color:black"></i>&nbsp;Agences</a> </li>
                <li class="nav-item"> <a href="#navpills-7" class="nav-link" data-toggle="tab" aria-expanded="true"><i class="fa fa-cog" ></i>&nbsp;Fonctionnalites</a> </li>
            </ul>
            <div class="tab-content br-n pn">
                <div id="navpills-1" class="tab-pane active">
                    <div class="row">
                        @include('admin/user/tableau_utilisateur')
                    </div>
                </div>
                <div id="navpills-2" class="tab-pane">
                    <div class="row">
                        @include('admin/direction/tableau_direction')
                    </div>
                </div>
                <div id="navpills-3" class="tab-pane">
                    <div class="row">
                        @include('admin/type_service/tableau_type_service')
                    </div>
                </div>
                <div id="navpills-4" class="tab-pane">
                    <div class="row">
                        @include('admin/service/tableau_service')
                    </div>
                </div>
                <div id="navpills-6" class="tab-pane">
                    <div class="row">
                        @include('admin/agence/tableau_agence')
                    </div>
                </div>
                <div id="navpills-7" class="tab-pane">
                    <div class="row">
                        @include('admin/fonctionnalite/tableau_fonctionnalite')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
