<?php
    include('dbconnect.php');
    
    
    if($_POST['FORM'] == 'VISITA')
    {
        $sql_values = "INSERT INTO email (email, origem) values ('" . $_POST['email'] . "', 'visita') ";
        mysqli_query($conn, $sql_values);  
        
        $post = $_POST;   
        
        unset($post['FORM']);
        $insert = "INSERT INTO visita ";
        $insert .= " (`".implode("`, `", array_keys($post))."`)";
        $insert .= " VALUES ('".implode("', '", $post)."') ";  
        
        mysqli_query($conn, $insert);
        
        
    }
       
?>