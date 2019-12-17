function afficher_details_reclamation(str) {
        var reference_info = document.getElementById('reference_info');
        var date_reception_info=document.getElementById("date_reception_info");
        var reclamant_info = document.getElementById("reclamant_info");
        var motif_reclamation = document.getElementById("motif_reclamation");
        var observation_reclamation = document.getElementById("observation_reclamation");
        reference_info.innerHTML = document.getElementById('referencerec_'+str).innerHTML;
        date_reception_info.innerHTML = document.getElementById('daterecprec_'+str).innerHTML;
        reclamant_info.innerHTML = document.getElementById('nomcli_'+str).innerHTML;
        motif_reclamation .innerHTML = document.getElementById('motifrec_'+str).innerHTML;
        observation_reclamation.innerHTML = document.getElementById('observation_'+str).innerHTML;
        $("#modal_detail_reclamation").modal("toggle");    
}

function show_info_formulaire_valider(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var reclamation = JSON.parse(this.responseText);
                var id = document.getElementById('id');
                var referencerec = document.getElementById('referencerec_update');
                var motifrec = document.getElementById('motifrec');
                var resumerec = document.getElementById('resumerec');
                var daterecprec = document.getElementById('daterecprec');
                var datetraiterec = document.getElementById('datetraiterec');
                var etatrec = document.getElementById('etatrec');
                var statutrec = document.getElementById('statutrec');
                var aregulariser = document.getElementById('aregulariser');
                var codecli = document.getElementById('codecli');
                var observation = document.getElementById('observation');
                var idserv = document.getElementById('idserv');
                var valider = document.getElementById('valider');

                var id_unite = document.getElementById('id_unite');
                var referencerec_unite = document.getElementById('referencerec_unite');
                var motifrec_unite = document.getElementById('motifrec_unite');
                var resumerec_unite = document.getElementById('resumerec_unite');
                var daterecprec_unite = document.getElementById('daterecprec_unite');
                var datetraiterec_unite = document.getElementById('datetraiterec_unite');
                var etatrec_unite = document.getElementById('etatrec_unite');
                var statutrec_unite = document.getElementById('statutrec_unite');
                var aregulariser_unite = document.getElementById('aregulariser_unite');
                var codecli_unite = document.getElementById('codecli_unite');
                var observation_unite = document.getElementById('observation_unite');
                var idserv_unite = document.getElementById('idserv_unite');
                var valider_unite = document.getElementById('valider_unite');

                id.value = reclamation.id;
                referencerec.value = reclamation.referencerec;
                motifrec.value = reclamation.motifrec;
                resumerec.value = reclamation.resumerec;
                daterecprec.value = reclamation.daterecprec;
                datetraiterec.value = reclamation.datetraiterec;
                etatrec.value = "Traitée";
                statutrec.value = reclamation.statutrec;
                aregulariser.value = reclamation.aregulariser;
                codecli.value = reclamation.codecli;
                observation.value = reclamation.observation;
                idserv.value = reclamation.idserv;
                valider.value = "Oui";

                id_unite.value = reclamation.id;
                referencerec_unite.value = reclamation.referencerec;
                motifrec_unite.value = reclamation.motifrec;
                resumerec_unite.value = reclamation.resumerec;
                daterecprec_unite.value = reclamation.daterecprec;
                datetraiterec_unite.value = reclamation.datetraiterec;
                etatrec_unite.value = "Traitée";
                statutrec_unite.value = reclamation.statutrec;
                aregulariser_unite.value = reclamation.aregulariser;
                codecli_unite.value = reclamation.codecli;
                observation_unite.value = reclamation.observation;
                idserv_unite.value = reclamation.idserv;
                valider_unite.value = "Oui";

                }
        };
        xmlhttp.open("GET","/"+str,true);
        xmlhttp.send();
    }
}

function remove_info_formulaire_valider() {

        var id = document.getElementById('id');
        var referencerec = document.getElementById('referencerec_update');
        var motifrec = document.getElementById('motifrec');
        var resumerec = document.getElementById('resumerec');
        var daterecprec = document.getElementById('daterecprec');
        var datetraiterec = document.getElementById('datetraiterec');
        var etatrec = document.getElementById('etatrec');
        var statutrec = document.getElementById('statutrec');
        var aregulariser = document.getElementById('aregulariser');
        var codecli = document.getElementById('codecli');
        var observation = document.getElementById('observation');
        var idserv = document.getElementById('idserv');
        var valider = document.getElementById('valider');

        var id_unite = document.getElementById('id_unite');
        var referencerec_unite = document.getElementById('referencerec_unite');
        var motifrec_unite = document.getElementById('motifrec_unite');
        var resumerec_unite = document.getElementById('resumerec_unite');
        var daterecprec_unite = document.getElementById('daterecprec_unite');
        var datetraiterec_unite = document.getElementById('datetraiterec_unite');
        var etatrec_unite = document.getElementById('etatrec_unite');
        var statutrec_unite = document.getElementById('statutrec_unite');
        var aregulariser_unite = document.getElementById('aregulariser_unite');
        var codecli_unite = document.getElementById('codecli_unite');
        var observation_unite = document.getElementById('observation_unite');
        var idserv_unite = document.getElementById('idserv_unite');
        var valider_unite = document.getElementById('valider_unite');

        id.value = "";
        referencerec.value = "";
        motifrec.value = "";
        resumerec.value = "";
        daterecprec.value = "";
        datetraiterec.value = "";
        etatrec.value = "";
        statutrec.value = "";
        aregulariser.value = "";
        codecli.value = "";
        observation.value = "";
        idserv.value = "";
        valider.value = "";

        id_unite.value = "";
        referencerec_unite.value = "";
        motifrec_unite.value = "";
        resumerec_unite.value = "";
        daterecprec_unite.value = "";
        datetraiterec_unite.value = "";
        etatrec_unite.value = "";
        statutrec_unite.value = "";
        aregulariser_unite.value = "";
        codecli_unite.value = "";
        observation_unite.value = "";
        idserv_unite.value = "";
        valider_unite.value = "";        
}