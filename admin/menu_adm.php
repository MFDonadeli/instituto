<?php
     require_once 'session.php';
 ?>
 <!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../style/estilo_admin.css" />  
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <meta charset="utf-8">  
    </head>
<body>
     <?php
     include('../db/dbconnect.php');
     include('../db/functions.php');
                
     $wrong_pass = true;
        if(isset($_SESSION['user']))
        { 
            echo "set";
            $wrong_pass = false;
        }
        else if (isset($_POST['senha']))
        {
            echo "set1";
            $user = 'user';
            $senha = $_POST['senha'];
            echo $senha;
            
            $var = new User();
                
            if($var->comparePassword($conn, $senha))
            {
                $wrong_pass = false;
                $_SESSION['user'] = $user;
            }
        }
        
       
        if($wrong_pass)
        {
            die('Pasword Incorreto, tente novamente');    
        }
    ?>
    <div id="menu">
        <ul>
            <li><a href="atendimento_list.php" target="content"> Atendimento </a></li>
            <li><a href="visita_list.php" target="content"> Visita </a></li>
            <li><a href="trabalhe_list.php" target="content"> Trabalhe Conosco </a></li>
            <li><a href="ger_noticia.php" target="content"> Gerenciar Notícias </a></li>
            <li><a href="newsletter_list.php" target="content"> Lista de e-mails </a></li>
            <li><a href="orcamento_list.php" target="content"> Orçamento </a></li>
            <li><a href="ger_publicacao.php" target="content"> Gerenciar Publicações </a></li>
            <li><a href="altera_senha.php" target="content"> Alterar Senha </a></li>
            <li><a href="logout.php"> Logout </a></li>
        </ul>
    </div>
    <iframe name="content" src=""></iframe>
</body>
</html>