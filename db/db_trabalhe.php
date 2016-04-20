<?php
    include('dbconnect.php');
    include('sendmail.php');
    
    
    if($_POST['FORM'] == 'TRABALHE')
    {
        $sql_values = "INSERT INTO email (email, origem) values ('" . $_POST['email'] . "', 'Trabalhe Conosco') ";
        mysqli_query($conn, $sql_values);  
        
        $post = $_POST;   
        
        $trabalho = implode(";", $post['trabalho']);
        $post['trabalho'] = $trabalho;
        
        unset($post['FORM']);
        $insert = "INSERT INTO trabalhe ";
        $insert .= " (`".implode("`, `", array_keys($post))."`)";
        $insert .= " VALUES ('".implode("', '", $post)."') ";  
        
        mysqli_query($conn, $insert);
        
        send_mail('Trabalhe Conosco', $str);
    }
       
?>