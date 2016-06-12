<?php
     require_once 'session.php';
 ?>
 <!DOCTYPE html>
<html>
    <head>
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script type="text/javascript" src="../script/expandable.js"></script>
        <link rel="stylesheet" href="../style/estilo_admin_interna.css" />
    </head>
    <body>
        <?php 
            if(!isset($_SESSION['user']))
                //die('');    
        ?>
        <?php include('../db/dbconnect.php');
        include('../db/functions.php');
        
            if($_POST['submit'])
            {
                $oldpass = $_POST['oldpassword'];
                $newpass = $_POST['newpassword'];
                $repeatnewpass = $_POST['repeatnewpassword'];
                
                $var = new User();
                
                if(!($newpass == $repeatnewpass))
                {
                    echo "Nova senha e a repetição devem ser iguais";
                }
                else if($var->comparePassword($conn, $oldpass))
                {
                    $var->setPassword($newpass);
                    $var->saveInDb($conn);
                    echo ("Mudou senha");
                }
                else {
                    echo ("Falha");
                }
            }
        
        ?>
        <form action="altera_senha.php" method="POST">
            Senha Antiga: <input type='password' name='oldpassword'><br>
            Senha Nova: <input type='password' name='newpassword'><br>
            Repetir Senha Nova: <input type='password' name='repeatnewpassword'><br>
            <input type='submit' name='submit' value="Mudar Senha">
        </form>
    </body>
</html>