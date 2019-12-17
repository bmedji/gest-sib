

function show_fonctionnalite(str_fonctionnalite) {
    if (str_fonctionnalite == "") {
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
                var fonctionnalite = JSON.parse(this.responseText);
                var name = document.getElementById("name");
                modal = $("#modal_update_fonctionnalite");
                modal.find('.modal-body #id').val(fonctionnalite.id);
                modal.find('.modal-body #codefonc').val(fonctionnalite.codefonc);
                modal.find('.modal-body #libfonc').val(fonctionnalite.libfonc);
            }
        };
        xmlhttp.open("GET","/admin/showFonctionnalite/"+str_fonctionnalite,true);
        xmlhttp.send();
    }
}