function checkForm()
{
//fetching values from all input fields and storing them in variables
    var nomev = document.getElementById("nome").style.borderColor;
	var mailv = document.getElementById("email").style.borderColor;
	var telefonev = document.getElementById("telefone").style.borderColor;
	var servicov = document.getElementById("servico").style.borderColor;
	var cursov = document.getElementById("curso").style.borderColor;
	var textov = document.getElementById("mensagem").style.borderColor;
	
    var nome = document.getElementById("nome").value;
    var mail = document.getElementById("email").value;
    var telefone = document.getElementById("telefone").value;
    var servico = document.getElementById("servico").value;
    var curso = document.getElementById("curso").value;
    var texto = document.getElementById("mensagem").value;
    
    var curso_visible = document.getElementById("servico_cursos").display;
	
	if (nome == '' || mail == '' || servico == '' || (curso_visible != '' && curso == ''))
    {
            
    }
    else
    {
        //Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
        if (nomev != 'rgb(255, 0, 0)' && mailv != 'rgb(255, 0, 0)' && telefonev != 'rgb(255, 0, 0)' && servicov != 'rgb(255, 0, 0)' && cursov != 'rgb(255, 0, 0)' && textov != 'rgb(255, 0, 0)')
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
            document.getElementById(field).innerHTML = "Validating..";
        }
        else if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById(field).style.borderColor = xmlhttp.responseText;
        }
        else
        {
            document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
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