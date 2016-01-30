function checkForm()
{
//fetching values from all input fields and storing them in variables
    var nomev = document.getElementById("nome").style.borderBottomColor;
	var cpfv = document.getElementById("cpf").style.borderBottomColor;
	var rgv = document.getElementById("rg").style.borderBottomColor;
	var sexov = document.getElementById("sexo").style.borderBottomColor;
	var data_nascimentov = document.getElementById("data_nascimentov").style.borderBottomColor;
	var cepv = document.getElementById("cep").style.borderBottomColor;
	var enderecov = document.getElementById("endereco").style.borderBottomColor;
	var bairrov = document.getElementById("bairro").style.borderBottomColor;
	var cidadev = document.getElementById("cidade").style.borderBottomColor;
	var estadov = document.getElementById("estado").style.borderBottomColor;
	var celularv = document.getElementById("celular").style.borderBottomColor;
	var formacaov = document.getElementById("formacao").style.borderBottomColor;
	var profissaov = document.getElementById("profissao").style.borderBottomColor;
	var emailv = document.getElementById("email").style.borderBottomColor;
	var conheceuv = document.getElementById("conheceu").style.borderBottomColor;
	var telefonev = document.getElementById("telefone").style.borderBottomColor;
	var telefone_recadov = document.getElementById("telefone_recado").style.borderBottomColor;
    
    var nome = document.getElementById("nome").value;
    var cpf = document.getElementById("cpf").value;
    var rg = document.getElementById("rg").value;
    var sexo = document.getElementById("sexo").value;
    var data_nascimento = document.getElementById("data_nascimento").value;
    var cep = document.getElementById("cep").value;
    var endereco = document.getElementById("endereco").value;
    var bairro = document.getElementById("bairro").value;
    var cidade = document.getElementById("cidade").value;
    var estado = document.getElementById("estado").value;
    var celular = document.getElementById("celular").value;
    var formacao = document.getElementById("formacao").value;
    var profissao = document.getElementById("profissao").value;
    var email = document.getElementById("email").value;
    var conheceu = document.getElementById("conheceu").value;
    var telefone = document.getElementById("telefone").value;
    var telefone_recado = document.getElementById("telefone_recado").value;
	
	if (nome == '' || cpf == '' || rg == '' || sexo == '' || data_nascimento == '' || cep == '' || 
        endereco == '' || bairro == '' || cidade == '' || estado == '' || celular == '' || formacao == '' || 
        profissao == '' || email == '' || conheceu == '' || telefone == '' || telefone_recado == '')
    {
            
    }
    else
    {
        //Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
        if (nomev != 'rgb(255, 0, 0)' && cpfv != 'rgb(255, 0, 0)' && rgv != 'rgb(255, 0, 0)' && sexov != 'rgb(255, 0, 0)' && data_nascimentov != 'rgb(255, 0, 0)' && cepv != 'rgb(255, 0, 0)' && 
            enderecov != 'rgb(255, 0, 0)' && bairrov != 'rgb(255, 0, 0)' && cidadev != 'rgb(255, 0, 0)' && estadov != 'rgb(255, 0, 0)' && celularv != 'rgb(255, 0, 0)' && formacaov != 'rgb(255, 0, 0)' && 
            profissaov != 'rgb(255, 0, 0)' && emailv != 'rgb(255, 0, 0)' && conheceuv != 'rgb(255, 0, 0)' && telefonev != 'rgb(255, 0, 0)' && telefone_recadov != 'rgb(255, 0, 0)')
        {
            document.getElementById("form_matricula").submit();
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
            document.getElementById(field).style.borderBottomColor = xmlhttp.responseText;
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