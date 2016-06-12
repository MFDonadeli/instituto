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
        
        <?php include('../db/dbconnect.php');
        include('../db/functions.php');
        
        $var = new User();
       
        $var->setPassword('teste');
        $var->saveInDb($conn);
        echo ("Mudou senha");
                
        
        ?>
    </body>
</html>