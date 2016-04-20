function checkForm()
{
//fetching values from all input fields and storing them in variables
    var nomev = document.getElementById("nome").style.borderColor;
    var sexov = document.getElementById("sexo").style.borderColor;
	var mailv = document.getElementById("email").style.borderColor;
	var telefonev = document.getElementById("telefone").style.borderColor;
	var enderecov = document.getElementById("endereco").style.borderColor;
    var cepv = document.getElementById("cep").style.borderColor;
    var bairrov = document.getElementById("bairro").style.borderColor;
    var cidadev = document.getElementById("cidade").style.borderColor;
    var estadov = document.getElementById("estado").style.borderColor;
    var data_nascimentov = document.getElementById("data_nascimento").style.borderColor;
    var estado_civilv = document.getElementById("estado_civil").style.borderColor;
    var deficienciav = document.getElementById("deficiencia").style.borderColor;
    var obj_profv = document.getElementById("objetivo").style.borderColor;
    var trabalhov = document.getElementById("trabalho").style.borderColor;
    var salariov = document.getElementById("salario").style.borderColor;
    var extrav = document.getElementById("extra").style.borderColor;
    
    var nome = document.getElementById("nome").value;
    var sexo = document.getElementById("sexo").value;
	var mail = document.getElementById("email").value;
	var telefone = document.getElementById("telefone").value;
	var endereco = document.getElementById("endereco").value;
    var cep = document.getElementById("cep").value;
    var bairro = document.getElementById("bairro").value;
    var cidade = document.getElementById("cidade").value;
    var estado = document.getElementById("estado").value;
    var data_nascimento = document.getElementById("data_nascimento").value;
    var estado_civil = document.getElementById("estado_civil").value;
    var deficiencia = document.getElementById("deficiencia").value;
    var obj_prof = document.getElementById("objetivo").value;
    var trabalho = document.getElementById("trabalho").value;
    var salario = document.getElementById("salario").value;
    var extra = document.getElementById("extra").value;
    
	
	if (nome == '' || mail == '' || sexo == '' || telefone == '' || endereco == '' || cep == '' || bairro == '' || cidade == ''
     || estado == '' || data_nascimento == '' || estado_civil == '' || deficiencia == '' || obj_prof == '' || trabalho == ''
       || extra == '')
    {
        var msg = document.getElementById("msg_preenchimento");
        msg.innerHTML = "Preencha todos os campos obrigatórios, marcados com *"        
    }
    else
    {
        //Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
        if (nomev != 'rgb(255, 0, 0)' && mailv != 'rgb(255, 0, 0)' && sexov != 'rgb(255, 0, 0)' && telefonev != 'rgb(255, 0, 0)'
            && enderecov != 'rgb(255, 0, 0)' && cepv != 'rgb(255, 0, 0)' && bairrov != 'rgb(255, 0, 0)' && cidadev != 'rgb(255, 0, 0)'
             && estadov != 'rgb(255, 0, 0)' && data_nascimentov != 'rgb(255, 0, 0)' && estado_civilv != 'rgb(255, 0, 0)'
              && deficienciav != 'rgb(255, 0, 0)' && obj_profv != 'rgb(255, 0, 0)' && trabalhov != 'rgb(255, 0, 0)'
               && salariov != 'rgb(255, 0, 0)' && extrav != 'rgb(255, 0, 0)')
        {
            document.getElementById("form_trabalhe").submit();
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

 	xmlhttp.open("POST", "form/validation.php", true);
 	
 	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xmlhttp.send(params);
	/*xmlhttp.open('POST', 'validation.php', true);
	xmlhttp.send(data);*/
}