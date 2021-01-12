window.onload = function() {
	loadDoc('acasa.php');
}
function loadDoc(pagina) {
	var xmlhttp;

	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("continut").innerHTML = xmlhttp.responseText;
			}
		}
	}

	xmlhttp.open("GET", pagina, true);
	xmlhttp.send();
}

function validare(){
	var nume=document.forms["contact"]["nume"];
	var email=document.forms["contact"]["mail"];
	var mesaj=document.forms["contact"]["mesaj"];
	var error = "";
	var illegalChars = /\W/; 
	
	if (nume.value == "" || email.value=="" || mesaj.value=="") {
		error = "Completați toate câmpurile!\n";
	    document.getElementById("eroareMsg").innerHTML=error;
	    return false;
	 
	} else if ((nume.value.length < 5) || (nume.value.length > 20)) {
	    error = "Numele este prea scurt sau prea lung!(min.5,max.20)\n";
	    document.getElementById("eroareMsg").innerHTML=error;
		return false;
	 
	} else if (illegalChars.test(nume.value)) {
	    error = "Numele conține caractere nepermise!\n";
	    document.getElementById("eroareMsg").innerHTML=error;
		return false;
	    }	 
	    else {
	        var atpos = email.value.indexOf("@");
	    	var dotpos = email.value.lastIndexOf(".");
	    	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
	    		error="Adresa de email nu este validă!";
	    		document.getElementById("eroareMsg").innerHTML=error;
	        	//alert(error);
	        	return false;
	    	}
	    }
		error="Mesaj trimis cu succes!";
	    document.getElementById("eroareMsg").innerHTML=error;
	    return true;
}
function validare_rez(){
	var nume=document.forms["confirmare_rez"]["nume"];
	var telefon=document.forms["confirmare_rez"]["mail"];
	var error = "";
	var illegalChars = /\W/; 
	
	if (nume.value == "" || telefon.value == "" ){
		error = "Completați toate câmpurile!\n";
	    document.getElementById("eroareMsg").innerHTML=error;
	    return false;
	 
	} else if ((nume.value.length < 5) || (nume.value.length > 25)) {
	    error = "Numele este prea scurt sau prea lung!(min.5,max.25\n";
	    document.getElementById("eroareMsg").innerHTML=error;
		return false;
	 
	} else if (illegalChars.test(nume.value)) {
	    error = "Numele conține caractere nepermise!\n";
	    document.getElementById("eroareMsg").innerHTML=error;
		return false;
	    }	 
	    else {
	        var stripped = telefon.value.replace(/[\(\)\.\-\ ]/g, '');
		    if (isNaN(parseInt(stripped))) {
		        error = "Numărul de telefon conține caractere nepermise! \n";
		        document.getElementById("eroareMsg").innerHTML=error;
				return false;
			    } else if (!(stripped.length == 10)) {
			        error = "Numărul de telefon trebuie să conțină 10 cifre!\n";
			        document.getElementById("eroareMsg").innerHTML=error;
					return false;
			    }
	    }
	    return true;
}
function convert(JsArr){
    var Php = '';
    if (Array.isArray(JsArr)){  
        Php += 'array(';
        for (var i in JsArr){
            Php += '\'' + i + '\' => ' + convert(JsArr[i]);
            if (JsArr[i] != JsArr[Object.keys(JsArr)[Object.keys(JsArr).length-1]]){
                Php += ', ';
            }
        }
        Php += ')';
        return Php;
    }
    else{
        return '\'' + JsArr + '\'';
    }
}
var locuri_selectate=Array();
var scaune_selectate=Array();
function selectat(elem) {
	var loc_selectat=elem.id;

	var pozitie;
	var nr=elem.id;
	pozitie="Loc"+nr;

	if(elem.className=="loc_autocar"){
		elem.className="loc_selectat";
		locuri_selectate.push(loc_selectat);
		scaune_selectate.push(pozitie);
	}
	else{ 
		if(elem.className=="loc_selectat"){
		elem.className="loc_autocar";
		var index = locuri_selectate.indexOf(elem.id);
		locuri_selectate.splice(index, 1);
		scaune_selectate.splice(index,1);	
		}
		
	}

	document.getElementById("locuriSelectate").innerHTML=scaune_selectate;	
}
function selecteaza(){

	if (window.XMLHttpRequest){
	    xmlhttp=new XMLHttpRequest();
	}
	else{
	    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function() {
	    if (this.readyState==4 && this.status==200) {
	      document.getElementById("raspunsPHP").innerHTML=this.responseText;
	    }
	  }

	JSON.stringify(locuri_selectate);
	var locuri=convert(locuri_selectate);

	xmlhttp.open("GET", "api/bilete.php?locuri="+locuri, true);
	xmlhttp.send();
	var f_loc = document.getElementById("bilete");
	f_loc.value = JSON.stringify(scaune_selectate);
}

function seteazaLocuriOcupate(){

	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var obiect = JSON.parse(this.responseText);
        console.log("Json parsed data is: " + JSON.stringify(obiect));
        for (var i = 0; i < obiect.length; i++)
			{
			  console.log(obiect[i].loc);
			   var tag=document.getElementById(obiect[i].loc);
			   tag.className="loc_blocat";
			}
       }
    };

	xmlhttp.open("GET", "../json/bilete.json", true);
	xmlhttp.send();

}