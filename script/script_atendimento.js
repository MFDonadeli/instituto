function checkForm()
{
//fetching values from all input fields and storing them in variables
    var nomev = document.getElementById("nome").style.borderBottomColor;
	var mailv = document.getElementById("mail").style.borderBottomColor;
	var telefonev = document.getElementById("telefone").style.borderBottomColor;
	var empresav = document.getElementById("empresa").style.borderBottomColor;
	var assuntov = document.getElementById("assunto").style.borderBottomColor;
	var textov = document.getElementById("texto_desc").style.borderBottomColor;
	
    var nome = document.getElementById("nome").value;
    var mail = document.getElementById("mail").value;
    var telefone = document.getElementById("telefone").value;
    var empresa = document.getElementById("empresa").value;
    var assunto = document.getElementById("assunto").value;
    var texto = document.getElementById("texto_desc").value;
	
	if (nome == '' || mail == '' || texto == '')
    {
            
    }
    else
    {
        //Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
        if (nomev != 'rgb(255, 0, 0)' && mailv != 'rgb(255, 0, 0)' && telefonev != 'rgb(255, 0, 0)' && empresav != 'rgb(255, 0, 0)' && assuntov != 'rgb(255, 0, 0)' && textov != 'rgb(255, 0, 0)')
        {
            document.getElementById("form_atendimento").submit();
        }
        else 
        {
               
        }
    }
}

//AJAX Code to check  input field values when onblur event triggerd.
function validate(field, query)
{
	var xmlhttp;
	
if (window.XMLHttpRequest)
  {// for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }	
  
    xmlhttp.onreadystatechange = function()
    {
        if (xmlhttp.readyState != 4 && xmlhttp.status == 200)
        {
            //document.getElementById(field).innerHTML = "Validating..";
        }
        else if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById(field).style.borderBottomColor = xmlhttp.responseText;
            
            var var1 = document.getElementById("mail");
            var var2 = document.getElementById("texto");
            
            document.getElementById(field).style.borderBottomColor = xmlhttp.responseText;
        }
        else
        {
            //document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
        }
    }
    
    /*var data = new FormData();
	data.append(field, query);*/
	
	var params = "field=" + field + "&value=" + query;

 	xmlhttp.open("POST", "validation.php", true);
 	
 	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xmlhttp.send(params);
	/*xmlhttp.open('POST', 'validation.php', true);
	xmlhttp.send(data);*/
}