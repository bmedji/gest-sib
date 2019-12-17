

function show_user(str_user) {
    if (str_user == "") {
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
                var user = JSON.parse(this.responseText);
                var name = document.getElementById("name");
                modal = $("#modal_update_user");
                modal.find('.modal-body #id').val(user.id);
                modal.find('.modal-body #matricule').val(user.matricule);
                modal.find('.modal-body #name').val(user.name);
                modal.find('.modal-body #surname').val(user.surname);
                modal.find('.modal-body #idfonc').val(user.idfonc);
                modal.find('.modal-body #idserv').val(user.idserv);
            }
        };
        xmlhttp.open("GET","/admin/showUser/"+str_user,true);
        xmlhttp.send();
    }
}