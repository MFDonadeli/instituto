<?php
    include('dbconnect.php');
    
    if($_POST['mail'])
    {
        $sql_values = "INSERT INTO email (email, origem) values ('" . $_POST['mail'] . "', 'Newsletter') ";
        mysqli_query($conn, $sql_values);    
    }
       
?>