<?php
    include('dbconnect.php');
    
    
    if($_POST['FORM'] == 'TRABALHE')
    {
        $sql_values = "INSERT INTO email (email, origem) values ('" . $_POST['email'] . "', 'trabalhe') ";
        mysqli_query($conn, $sql_values);  
        
        $post = $_POST;   
        
        unset($post['FORM']);
        $insert = "INSERT INTO trabalhe ";
        $insert .= " (`".implode("`, `", array_keys($post))."`)";
        $insert .= " VALUES ('".implode("', '", $post)."') ";  
        
        mysqli_query($conn, $insert);
      
        
        
    }
       
?>