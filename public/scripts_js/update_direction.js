

function show_direction(str_direction) {
    if (str_direction == "") {
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
                var direction = JSON.parse(this.responseText);
                var name = document.getElementById("name");
                modal = $("#modal_update_direction");
                modal.find('.modal-body #id').val(direction.id);
                modal.find('.modal-body #codedir').val(direction.codedir);
                modal.find('.modal-body #libelledir').val(direction.libelledir);
            }
        };
        xmlhttp.open("GET","/admin/showDirection/"+str_direction,true);
        xmlhttp.send();
    }
}