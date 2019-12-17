

function show_client(str_client) {
    if (str_client == "") {
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
                var client = JSON.parse(this.responseText);
                var name = document.getElementById("name");
                modal = $("#modal_update_client");
                modal.find('.modal-body #id').val(client.id);
                modal.find('.modal-body #codecli').val(client.codecli);
                modal.find('.modal-body #nomcli').val(client.nomcli);
                modal.find('.modal-body #prenomcli').val(client.prenomcli);
                modal.find('.modal-body #numerodecomptecli').val(client.numerodecomptecli);
                modal.find('.modal-body #matgest').val(client.matgest);
            }
        };
        xmlhttp.open("GET","/admin/showClient/"+str_client,true);
        xmlhttp.send();
    }
}