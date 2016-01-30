<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$field = $_POST['field'];
	$value = $_POST['value'];
	$error = "";
   

	if($field == 'nome')
	{
		if(empty(test_input($value)))
		{
			$error="Campo obrigatório!!";
		}
	}
	
	if($field == 'cpf')
	{
		if(empty(test_input($value)))
		{
			$error="Campo obrigatório!";
		}
		else if(!validaCPF($value))
		{
			$error="CPF inválido!";
		}
	}
	
	if($field == 'rg')
	{
		if(empty(test_input($value)))
		{
			$error="Campo obrigatório!";
		}
	}
	
	if($field == 'sexo')
	{
		if(empty(test_input($value)))
		{
			$error="Campo obrigatório!";
		}
	}
	
	if($field == 'data_nascimento')
	{
		if(empty(test_input($value)))
		{
			$error="Campo obrigatório!";
		}
		else if(!eregi("^[0-9]{2}/[0-9]{2}/[0-9]{4}$", $value)) {
			$error="Data inválida!";
		}
	}
	
	if($field == 'cep')
	{
		if(empty(test_input($value)))
		{
			$error="Campo obrigatório!";
		}
		else if (!eregi("^[0-9]{5}-[0-9]{3}$", $value)) {
			$error="CEP inválido";
		}
	}
	
	if($field == 'endereco')
	{
		if(empty(test_input($value)))
		{
			$error="Campo obrigatório!";
		}
	}
	
	if($field == 'bairro')
	{
		if(empty(test_input($value)))
		{
			$error="Campo obrigatório!";
		}
	}
	
	if($field == 'cidade')
	{
		if(empty(test_input($value)))
		{
			$error="Campo obrigatório!";
		}
	}
	
	if($field == 'estado')
	{
		if(empty(test_input($value)))
		{
			$error="Campo obrigatório!";
		}
	}
	
	if($field == 'celular')
	{
		if(empty(test_input($value)))
		{
			$error="Campo obrigatório!";
		}
		else if ( !eregi("^[0-9]{3} [0-9]{4}-[0-9]{4}$", $value) || !eregi("^[0-9]{3} [0-9]{5}-[0-9]{4}$", $value) )  {
			//$error="Celular inválido";
		}
	}
	
	if($field == 'formacao')
	{
		if(empty(test_input($value)))
		{
			$error="Campo obrigatório!";
		}
	}
    
    if($field == 'assunto')
	{
		if(empty(test_input($value)))
		{
			$error="Campo obrigatório!";
		}
	}
    
    if($field == 'texto' || $field == 'texto_desc')
	{
		if(empty(test_input($value)))
		{
			$error="Campo obrigatório!";
		}
	}
    
    if($field == 'curso')
	{
		if(empty(test_input($value)))
		{
			$error="Campo obrigatório!";
		}
	}
	
	if($field == 'profissao')
	{
		if(empty(test_input($value)))
		{
			$error="Campo obrigatório!";
		}
	}
	
	if($field == 'email' || $field == 'mail')
	{
		if(empty(test_input($value)))
		{
			$error="Campo obrigatório!";
		}
		else if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
			$error="Invalid email format"; 
		}
	}
	
	if($field == 'conheceu')
	{
		if(empty(test_input($value)))
		{
			$error="Campo obrigatório!";
		}
	}
	
	if($field == 'telefone')
	{
		if(!empty(test_input($value)))
		{
			if (!eregi("^[0-9]{3} [0-9]{4}-[0-9]{4}$", $value)) {
				//$error="Telefone inválido";
			}
		}
	}
	
	if($field == 'telefone_recado')
	{
		if(!empty(test_input($value)))
		{
			if (!eregi("^[0-9]{3} [0-9]{4}-[0-9]{4}$", $value)) {
				//$error="Telefone inválido";
			}
		}
	}
	
	if($error!="")
		echo "#FF0000";
	else
		echo "#0399D4";
}
	
function insertdb(){
	$error="OK";

}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function validaCPF($cpf = null) {
 
    // Verifica se um número foi informado
    if(empty($cpf)) {
        return false;
    }
 
    // Elimina possivel mascara
    $cpf = ereg_replace('[^0-9]', '', $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    // Verifica se o numero de digitos informados é igual a 11 
    if (strlen($cpf) != 11) {
        return false;
    }
    // Verifica se nenhuma das sequências invalidas abaixo 
    // foi digitada. Caso afirmativo, retorna falso
    else if ($cpf == '00000000000' || 
        $cpf == '11111111111' || 
        $cpf == '22222222222' || 
        $cpf == '33333333333' || 
        $cpf == '44444444444' || 
        $cpf == '55555555555' || 
        $cpf == '66666666666' || 
        $cpf == '77777777777' || 
        $cpf == '88888888888' || 
        $cpf == '99999999999') {
        return false;
     // Calcula os digitos verificadores para verificar se o
     // CPF é válido
     } else {   
         
        for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
 
        return true;
    }
}

?>