<?php
    include('dbconnect.php');
    include('sendmail.php');
    
    
    if($_POST['FORM'] == 'VISITA')
    {
        $sql_values = "INSERT INTO email (email, origem) values ('" . $_POST['email'] . "', 'Visita') ";
        mysqli_query($conn, $sql_values);  
        
        $post = $_POST;   
        
        unset($post['FORM']);
        $insert = "INSERT INTO visita ";
        $insert .= " (`".implode("`, `", array_keys($post))."`)";
        $insert .= " VALUES ('".implode("', '", $post)."') ";  
        
        mysqli_query($conn, $insert);
        
        send_mail('Agende uma visita', $post);
        
        
    }
       
?>