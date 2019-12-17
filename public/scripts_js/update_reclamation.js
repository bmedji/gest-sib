function show(str) {
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
                modal = $("#updateModal");
                modal.find('.modal-body #id').val(reclamation.id);
                modal.find('.modal-body #referencerec_update').val(reclamation.referencerec);
                modal.find('.modal-body #motifrec').val(reclamation.motifrec);
                modal.find('.modal-body #resumerec').val(reclamation.resumerec);
                modal.find('.modal-body #daterecprec').val(reclamation.daterecprec);
                modal.find('.modal-body #datetraiterec').val(reclamation.datetraiterec);
                modal.find('.modal-body #etatrec').val(reclamation.etatrec);
                modal.find('.modal-body #statutrec').val(reclamation.statutrec);
                modal.find('.modal-body #codecli').val(reclamation.codecli);
                modal.find('.modal-body #observation').val(reclamation.observation);
                modal.find('.modal-body #idserv').val(reclamation.idserv);
                modal.find('.modal-body #aregulariser').val(reclamation.aregulariser);
                modal.find('.modal-body #valider').val(reclamation.valider);            }
        };
        xmlhttp.open("GET","/"+str,true);
        xmlhttp.send();
    }
}