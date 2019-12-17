

function show_type_service(str_type_service) {
    if (str_type_service == "") {
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
                var type_service = JSON.parse(this.responseText);
                var name = document.getElementById("name");
                modal = $("#modal_update_type_service");
                modal.find('.modal-body #id').val(type_service.id);
                modal.find('.modal-body #idtypeserv').val(type_service.idtypeserv);
                modal.find('.modal-body #libtypserv').val(type_service.libtypserv);
            }
        };
        xmlhttp.open("GET","/admin/showTypeService/"+str_type_service,true);
        xmlhttp.send();
    }
}