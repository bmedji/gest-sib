

function show_admin(str_admin) {

    if (str_admin == "") {
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

                var admin = JSON.parse(this.responseText);
                var name = document.getElementById("name");
                modal = $("#modal_update_admin");
                modal.find('.modal-body #id').val(admin.id);
                modal.find('.modal-body #matricule').val(admin.matricule);
                modal.find('.modal-body #name').val(admin.name);
                modal.find('.modal-body #surname').val(admin.surname);
                modal.find('.modal-body #idfonc').val(admin.idfonc);
                modal.find('.modal-body #idserv').val(admin.idserv);
            }
        };
        xmlhttp.open("GET","/admin/showUser/"+str_admin,true);
        xmlhttp.send();
    }
}