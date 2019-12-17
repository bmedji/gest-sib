

function show_service(str_service) {
    if (str_service == "") {
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
                var service = JSON.parse(this.responseText);
                var name = document.getElementById("name");
                modal = $("#modal_update_service");
                modal.find('.modal-body #id').val(service.id);
                modal.find('.modal-body #idserv').val(service.idserv);
                modal.find('.modal-body #libelleserv').val(service.libelleserv);
                modal.find('.modal-body #codedir').val(service.codedir);
                modal.find('.modal-body #idtypeserv').val(service.idtypeserv);
            }
        };
        xmlhttp.open("GET","/admin/showService/"+str_service,true);
        xmlhttp.send();
    }
}