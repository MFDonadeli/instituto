<?php
     require_once 'session.php';
 ?>
 <!DOCTYPE html>
<html>
    <head>
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <link rel="stylesheet" href="style/estilo_admin_interna.css" />
    </head>
    <body>
        <?php 
            if(!isset($_SESSION['user']))
                die('');    
        ?>
        <?php include('dbconnect.php');
        
        $sql = "select email from email";
        
        $result = $conn->query($sql);
        
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                echo "<table>";
                foreach($row as $key => $value)
                {
                    echo "<tr>";
                    echo "<td>" . $value . "</td>";
                    echo "</tr>";  
                }   
                echo "</table>";
            }
        }
        
        ?>
    </body>
</html>