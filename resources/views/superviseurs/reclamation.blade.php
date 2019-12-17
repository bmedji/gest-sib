

<div class="col-md-12">
    <ul class="nav nav-tabs">
        <li class=" nav-item"> <a href="#toutes" class="nav-link active show" data-toggle="tab" aria-expanded="false">Toutes</a> </li>
        @foreach($services as $service)
            @if($service->libelleserv!="")
                <li class="nav-item"> <a href="#{{$service->libelleserv}}_tab" class="nav-link" data-toggle="tab" aria-expanded="false">{{$service->libelleserv}}</a> </li>
            @endif
        @endforeach
    </ul>
    <div class="tab-content br-n pn">
        
        <div id="toutes" class="tab-pane active show">

                <!-- Start Page Content -->
                <div class="row" >
                    @include('superviseurs/tableau_reclamation')
                </div>
                <!-- End PAge Content -->
            
        </div>
        @include('superviseurs/tableau_reclamation_par_service')
    </div>
</div>    