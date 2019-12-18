<div class="left-sidebar" >
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-label">Accueil</li>
                <li> <a href="#" aria-expanded="false" data-toggle="modal" data-target="#modal_add_user"><i class="fa fa-user" style="color:blue"></i><span class="hide-menu">Ajouter un utilisateur</span></a>
                <li> <a href="#" aria-expanded="false" data-toggle="modal" data-target="#modal_add_direction"><i class="fa fa-group" style="color:purple"></i><span class="hide-menu">Ajouter une direction</span></a>
                {{-- <li> <a href="#" aria-expanded="false" data-toggle="modal" data-target="#modal_add_type_service"><i class="fa fa-object-ungroup" style="color:gray"></i><span class="hide-menu">Ajouter un type de service</span></a> --}}
                <li> <a href="#" aria-expanded="false" data-toggle="modal" data-target="#modal_add_service"><i class="fa fa-object-group" style="color:brown" ></i><span class="hide-menu">Ajouter un service</span></a>
                <li> <a href="#" aria-expanded="false" data-toggle="modal" data-target="#modal_add_agence"><i class="fa fa-building" style="color:black"></i><span class="hide-menu">Ajouter une agence</span></a>
                {{-- <li> <a href="#" aria-expanded="false" data-toggle="modal" data-target="#modal_add_fonctionnalite"><i class="fa fa-cog" ></i><span class="hide-menu">Ajouter une fonctionnalite</span></a> --}}
                <li> <a href="{{ route('logout') }}" aria-expanded="false"><i class="fa fa-power-off" style="color:red"></i><span class="hide-menu">Déconnexion</span></a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>