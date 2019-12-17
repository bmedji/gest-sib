function verifier_cle_primaire(str, nbre)
{
	var n = parseInt(nbre);
	

	var cle = document.getElementById(str);
	var error = document.getElementById('error');
	//var error_update_referencerec = document.getElementById('error_update_referencerec');
	var valider_reclamation = document.getElementById('valider');
	//var modifier_reclamation = document.getElementById('modifier_reclamation');
	valider_reclamation.disabled = false;
	//modifier_reclamation.disabled = false;
	error.innerHTML="";
	//error_update_referencerec.innerHTML="";

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	   	if (this.readyState == 4 && this.status == 200) 
	    { 
	    	datas = JSON.parse(this.responseText);
	    	
	    	data = JSON.parse(datas[n]);

	    	for(var i=0;i<data.length;i++)
	    	{
	    		if(data[i][str]==cle.value)
		    	{
	    			error.innerHTML = "<center><i class=\"fa fa-exclamation-triangle\"></i>&nbsp;Code dejà utilisé</center>";
	    			//error_update_referencerec.innerHTML = "<center><i class=\"fa fa-exclamation-triangle\"></i>&nbsp;Reference dejà utilisée</center>";
	    			valider.disabled = true;
	    			//modifier_reclamation.disabled = true;
	    			break;
	    		}
	    	}
		}
	};
	xhttp.open("GET", "/verification/reclamation", true);
	xhttp.send(); 
}