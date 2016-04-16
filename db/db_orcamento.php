<?php
    include('dbconnect.php');
    
    
    if($_POST['FORM'] == 'ORCAMENTO')
    {
        $sql_values = "INSERT INTO email (email, origem) values ('" . $_POST['email'] . "', 'Orcamento') ";
        mysqli_query($conn, $sql_values);  
        
        $post = $_POST;   
        
        unset($post['FORM']);
        $insert = "INSERT INTO orcamento ";
        $insert .= " (`".implode("`, `", array_keys($post))."`)";
        $insert .= " VALUES ('".implode("', '", $post)."') ";
        
        echo $insert;  
        
        mysqli_query($conn, $insert);
        
        
    }
       
?>