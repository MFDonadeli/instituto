<?php
    session_start();
    
    if(isset($_SESSION['user']))
    {
        $user = $_SESSION['user'];
        $loggedin = true;
    }
    else
        $loggedin = false;
?>