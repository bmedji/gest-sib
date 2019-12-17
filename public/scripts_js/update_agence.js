

function show_agence(str_agence) {
    if (str_agence == "") {
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
                var agence = JSON.parse(this.responseText);
                var name = document.getElementById("name");
                modal = $("#modal_update_agence");
                modal.find('.modal-body #id').val(agence.id);
                modal.find('.modal-body #codeagence').val(agence.codeagence);
                modal.find('.modal-body #libagence').val(agence.libagence);
            }
        };
        xmlhttp.open("GET","/admin/showAgence/"+str_agence,true);
        xmlhttp.send();
    }
}