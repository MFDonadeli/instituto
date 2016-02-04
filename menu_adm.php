<?php
     require_once 'session.php';
 ?>
<html>
    <head>
        <link rel="stylesheet" href="style/estilo_admin.css" />  
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <meta charset="utf-8">  
    </head>
<body>
     <?php
     $wrong_pass = true;
        if(isset($_SESSION['user']))
        { 
            $wrong_pass = false;
        }
        
        if (isset($_POST['user']))
        {
            $user = $_POST['user'];
            $senha = $_POST['senha'];
            
            if(strcmp($senha, "teste") == 0)
            {
                $wrong_pass = false;
                $_SESSION['user'] = $user;
                $_SESSION['senha'] = $senha;
            }
        }
        
        
        echo $wrong_pass;
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
            <li><a href="newsletter_list.php" target="content"> lista de e-mails </a></li>
        </ul>
    </div>
    <iframe name="content" src=""></iframe>
</body>
</html>