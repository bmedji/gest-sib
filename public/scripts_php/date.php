<?php 
    $jours = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
    $days = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
    $mois = ['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];
    $months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
    
    for($i=0;$i<sizeof($days);$i++)
    {
        if(strcmp($days[$i],Date('l'))==0)
        {
            $j=$jours[$i];
        }
    }

    for($i=0;$i<sizeof($months);$i++)
    {
        if(strcmp($months[$i],Date('F'))==0)
        {
            $m=$mois[$i];
        }
    }
    echo $j.' '.Date('d').' '.$m.' '.Date('Y'); 
?>