var charges_totales_par_service = [];
var charges_non_traiter_par_service = [];
var charges_traiter_par_service = [];
var charges_fonder_par_service = [];
var charges_non_fonder_par_service = [];
var charges_en_cours_par_service = [];

var charge_totale;
var charge_non_traiter;
var charge_traiter;
var charge_fonder;
var charge_non_fonder;
var charge_en_cours;
var liste_services = [];
var data;
var services;
var reclamation;

var reclamation_non_traiter_superviseur=0;
var reclamation_traiter_superviseur=0;
var reclamation_traiter_fonder_superviseur=0;
var reclamation_traiter_non_fonder_superviseur=0;
var reclamation_en_cours=0;

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

        data = JSON.parse(this.responseText);

        services = JSON.parse(data[1]);

        reclamation = JSON.parse(data[0]);

        for(var i=1;i<services.length;i++)
        {

            charge_totale=0;
            charge_non_traiter=0;
            charge_traiter=0;
            charge_fonder=0;
            charge_non_fonder=0;
            charge_en_cours=0;

            liste_services[i-1]=services[i].libelleserv;

            for(var j=0;j<reclamation.length;j++)
            {
                
                if(reclamation[j].idserv==services[i].idserv)
                {
                    if(reclamation[j].etatrec=="Non Traitée")
                    {
                        charge_non_traiter++;
                        reclamation_non_traiter_superviseur++;
                    }
                    else if(reclamation[j].etatrec=="Traitée")
                    {
                        charge_traiter++;
                        reclamation_traiter_superviseur++;
                    }

                    if(reclamation[j].statutrec=="Fondée")
                    {
                        charge_fonder++;
                        reclamation_traiter_fonder_superviseur;
                    }
                    else if(reclamation[j].statutrec=="Non Fondée")
                    {
                        charge_non_fonder++;
                        reclamation_traiter_non_fonder_superviseur++;
                    }
                    else if(reclamation[j].statutrec=="En cours")
                    {
                        charge_en_cours++;
                        reclamation_en_cours++;
                    }

                    charge_totale++;
                }
            }

            charges_totales_par_service[i-1]=charge_totale;
            charges_non_traiter_par_service[i-1]=charge_non_traiter;
            charges_traiter_par_service[i-1]=charge_traiter;
            charges_fonder_par_service[i-1]=charge_fonder;
            charges_non_fonder_par_service[i-1]=charge_non_fonder;   
            
        }

var ctx_general = document.getElementById("bilan_general_unite_traitante").getContext('2d');
var myChart_general = new Chart(ctx_general, {
    type: 'bar',
        data: {
            labels: liste_services,
            datasets: [
                {
                    label: "Charge total",
                    data: charges_totales_par_service,
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "brown"
                },
                {
                    label: "Non Traitée",
                    data: charges_non_traiter_par_service,
                    borderColor: "rgba(0,0,0,0.09)",
                    borderWidth: "0",
                    backgroundColor: "red"
                },
                {
                    label: "Traitée",
                    data: charges_traiter_par_service,
                    borderColor: "rgba(0,0,0,0.09)",
                    borderWidth: "0",
                    backgroundColor: "green"
                },
                {
                    label: "Fondée",
                    data: charges_fonder_par_service,
                    borderColor: "rgba(0,0,0,0.09)",
                    borderWidth: "0",
                    backgroundColor: "gray"
                },
                {
                    label: "Non Fondée",
                    data: charges_non_fonder_par_service,
                    borderColor: "rgba(0,0,0,0.09)",
                    borderWidth: "0",
                    backgroundColor: "blue"
                },
                {
                    label: "En cours",
                    data: charges_en_cours_par_service,
                    borderColor: "rgba(0,0,0,0.09)",
                    borderWidth: "0",
                    backgroundColor: "purple"
                }

            ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

            //reponse superviseur
    echarts.init(document.getElementById('reponse_superviseur_bilan_general')).setOption({
        //color: ['#62549a','#4aa9e9', '#ff6c60','#eac459', '#25c3b2'],
        tooltip : {
            trigger: 'item',
            formatter: '{a} <br/>{b} : {c} ({d}%)'
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['Fondée','Non Fondée','En cours']
        },
        calculable : true,
        series : [
            {
                name:'Statistique',
                type:'pie',
                radius : ['50%', '70%'],
                data:[
                    {value:reclamation_traiter_fonder_superviseur, name:'Fondée'},
                    {value:reclamation_traiter_non_fonder_superviseur, name:'Non Fondée'},
                    {value:reclamation_en_cours, name:'En cours'}
                ]
            }
        ]
    });




    //Courbe etat superviseur
    echarts.init(document.getElementById('etat_superviseur_bilan_general')).setOption({
        tooltip : {
            trigger: 'item',
            formatter: '{a} <br/>{b} : {c} ({d}%)'
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['Traité','Non Traité']
        },
        calculable : true,
        series : [
            {
                name:'Statistique',
                type:'pie',
                //radius : ['50%', '70%'],
                data:[
                    {value:reclamation_traiter_superviseur, name:'Traité'},
                    {value:reclamation_non_traiter_superviseur, name:'Non Traité'},
                ]
            }
        ]
    });
    }
};
xhttp.open("GET", "/superviseur/reclamation", true);
xhttp.send(); 