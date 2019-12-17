

<div class="col-md-12">
    <ul class="nav nav-tabs" id="myTab">
                <li class=" nav-item"> <a id="link_bilan_general" href="#navpills-1" onclick="actualiser(this.id)" class="nav-link active" data-toggle="tab" aria-expanded="false">Bilan général</a> </li>
                <li class="nav-item"> <a href="#navpills-1" id="link_bilan_mensuel" class="nav-link" onclick="actualiser(this.id)" data-toggle="tab" aria-expanded="false">Bilan mensuel</a> </li>
            </ul>
    <div class="tab-content br-n pn">
        
        <div id="bilan" class="tab-pane active show">

                <!-- Start Page Content -->
                <div class="row" id="conteneur_bilan_general">
                    @include('superviseurs/bilan_general_traitement_superviseur')
                    
                    @include('superviseurs/bilan_general_unite_traitante')
                </div>

                <div class="row" id="conteneur_bilan_mensuel">
                    @include('superviseurs/bilan_mensuel_traitement_superviseur')
                    
                    @include('superviseurs/bilan_mensuel_unite_traitante')
                </div>
                <!-- End PAge Content -->
            
        </div>
        
    </div>
</div>    

<script type="text/javascript">
    
    function actualiser(str)
    {
        var conteneur_bilan_mensuel = document.getElementById('conteneur_bilan_mensuel');
        var conteneur_bilan_general = document.getElementById('conteneur_bilan_general');
        if(str=="link_bilan_mensuel")
        {
            conteneur_bilan_general.style.display = 'none';
            conteneur_bilan_mensuel.style.display = 'block';
        }
        else
        {
            conteneur_bilan_general.style.display = 'block';
            conteneur_bilan_mensuel.style.display = 'none';
        }
        
    }

    function cacher()//Execute au chargement de la page
    {
        var conteneur_bilan_mensuel = document.getElementById('conteneur_bilan_mensuel');
        conteneur_bilan_mensuel.style.display = 'none';
    }

    

</script>