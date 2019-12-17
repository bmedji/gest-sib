
$(document).ready(function(){

	$('#tableau_reclamation_superviseur').DataTable({
	    dom: 'Bfrtip',
	    
	    buttons: [
	        'copy', 'csv', 'excel', 'pdf', 'print'
	    ]
	});

	if (window.XMLHttpRequest) {
	    // code for IE7+, Firefox, Chrome, Opera, Safari
	    xmlhttp = new XMLHttpRequest();
	} else {
	    // code for IE6, IE5
	    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	        var services = JSON.parse(this.responseText);

	        var tableau = [];

	        for(i=1;i<services.length;i++)
	        {
	        	tableau[i]=services[i].libelleserv;
	        }

	        for(i=0;i<services.length;i++)
	        {
	        	$('#'+tableau[i]).DataTable({
			        dom: 'Bfrtip',
			        
			        buttons: [
			            'copy', 'csv', 'excel', 'pdf', 'print'
			        ]
				});
	        }

	        /*for (var i=0;i<services.length;i++)
	        {
	        	alert(services[i].libelleserv);
	        	/*$('#'+services[i].libelleserv).DataTable({
			        dom: 'Bfrtip',
			        
			        buttons: [
			            'copy', 'csv', 'excel', 'pdf', 'print'
			        ]
				});
	        }*/
	    }
	};
	xmlhttp.open("GET","/superviseur/services",true);
	xmlhttp.send();

	/*for(var i=0; i<services.length; i++)
			{
				
				element.DataTable({
			        dom: 'Bfrtip',
			        
			        buttons: [
			            'copy', 'csv', 'excel', 'pdf', 'print'
			        ]
				});
			}*/
});


