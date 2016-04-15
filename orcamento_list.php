<?php
     require_once 'session.php';
 ?>
 <!DOCTYPE html>
<html>
    <head>
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script type="text/javascript" src="script/expandable.js"></script>
        <link rel="stylesheet" href="style/estilo_admin_interna.css" />
    </head>
    <body>
        <?php 
            if(!isset($_SESSION['user']))
                die('');    
        ?>
        <?php include('dbconnect.php');
        
        $sql = "select a.nome, a.email, b.servico, c.curso, a.mensagem from orcamento a inner join servicos b on a.id_servico = b.id left join cursos c on a.id_curso = b.id;";
        
        $result = $conn->query($sql);
        
        if($result->num_rows > 0)
        {
            echo "<div id='listContainer'>";
            echo "<ul id='expList'>";
            
            while($row = $result->fetch_assoc())
            {
                echo "<li>";
                echo "Nome: " . $row["nome"] . " - " . $row["servico"]; 
                echo "<ul>";
                echo "<li>";
                echo "<table>";
                foreach($row as $key => $value)
                {
                    echo "<tr>";
                    echo "<td>" . $key . "</td>";
                    echo "<td>" . $value . "</td>";
                    echo "</tr>";  
                }   
                echo "</table></li></ul></li>";
            }
            echo "</ul></div>";
        }
        
        ?>
    </body>
</html>