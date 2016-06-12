<?php
     require_once 'session.php';
 ?>
 <!DOCTYPE html>
<html>
    <head>
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script type="text/javascript" src="../script/expandable.js"></script>
        <link rel="stylesheet" href="../style/estilo_admin_interna.css" />
    </head>
    <body>
        <?php 
            if(!isset($_SESSION['user']))
                die('');    
        ?>
        <?php include('../db/dbconnect.php');
        
        $sql = "select orcamento.nome, orcamento.email, servicos.servico, cursos.curso, orcamento.mensagem 
                    from (orcamento LEFT JOIN servicos on orcamento.id_servico = servicos.id) 
                        LEFT JOIN cursos on orcamento.id_curso = cursos.id;";
        
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
                    if(strcmp($key, 'curso') == 0 && strlen($value)==0)
                    {
                        continue;                                                
                    }
                        
                    echo "<tr>";
                    echo "<td>" . ucfirst($key) . "</td>";
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