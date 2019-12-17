<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
    <script src="scripts_js/update_user.js"></script>
    <script src="scripts_js/update_admin.js"></script>
    <script src="scripts_js/update_direction.js"></script>
    <script src="scripts_js/update_type_service.js"></script>
    <script src="scripts_js/update_service.js"></script>
    <script src="scripts_js/update_client.js"></script>
    <script src="scripts_js/update_agence.js"></script>
    <script src="scripts_js/update_fonctionnalite.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        @include('layout/header')
        <!-- End header header -->

        <!-- Left Sidebar  -->
        @include('admin/left_sidebar')
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            @include('admin/sous_en_tete')
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            @include('admin/bilan_general')    
        </div>
    </div>
    @include('admin/user/modal_add_user')
    @include('admin/user/modal_update_user')
    @include('admin/user/modal_update_admin')

    @include('admin/direction/modal_add_direction')
    @include('admin/direction/modal_update_direction')

    @include('admin/type_service/modal_add_type_service')
    @include('admin/type_service/modal_update_type_service')

    @include('admin/service/modal_add_service')
    @include('admin/service/modal_update_service')

    @include('admin/agence/modal_add_agence')
    @include('admin/agence/modal_update_agence')

    @include('admin/fonctionnalite/modal_add_fonctionnalite')
    @include('admin/fonctionnalite/modal_update_fonctionnalite')

    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>


    <!-- Echart -->
    <script src="js/lib/echart/echarts.js"></script>

    <!-- Morris-chart -->
    <script src="js/lib/morris-chart/morris.js"></script>
    <script src="js/lib/morris-chart/raphael-min.js"></script>

    <!-- Custom chart -->
    <script src="js/chart-custom.js"></script>

    <!-- Custom script -->
    <script src="js/timer.js"></script>    


    <!--Table database -->

    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    function fermer_modals() {

        var modals = document.getElementsByClassName('modal');

        var modals_back = document.getElementsByClassName('modal-backdrop');

        for(i=0;i<modals.length;i++) {
            modals[i].style.display = "none";
        }

        for(i=0;i<modals_back.length;i++) {
            modals_back[i].style.display = "none";
        }
    }
</script>


</body>

</html>