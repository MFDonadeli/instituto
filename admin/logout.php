<?php
     require_once 'session.php';
 ?>
<?php           
        if(isset($_SESSION['user']))
        { 
            unset($_SESSION['user']);
            if(session_destroy())
                header("Location: index.php");
        }
?>