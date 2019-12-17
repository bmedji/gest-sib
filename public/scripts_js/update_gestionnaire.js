

function show_gestionnaire(str_gestionnaire) {
    if (str_gestionnaire == "") {
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
                var gestionnaire = JSON.parse(this.responseText);
                var name = document.getElementById("name");
                modal = $("#modal_update_gestionnaire");
                modal.find('.modal-body #id').val(gestionnaire.id);
                modal.find('.modal-body #matgest').val(gestionnaire.matgest);
                modal.find('.modal-body #nomprengest').val(gestionnaire.nomprengest);
                modal.find('.modal-body #agencegest').val(gestionnaire.agencegest);
                modal.find('.modal-body #idserv').val(gestionnaire.idserv);
            }
        };
        xmlhttp.open("GET","/admin/showGestionnaire/"+str_gestionnaire,true);
        xmlhttp.send();
    }
}