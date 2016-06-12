<?php
    include('dbconnect.php');
    include('sendmail.php');
    
    
    if($_POST['FORM'] == 'ORCAMENTO')
    {
        $sql_values = "INSERT INTO email (email, origem) values ('" . $_POST['email'] . "', 'Orcamento') ";
        mysqli_query($conn, $sql_values);  
        
        $post = $_POST;   
        
        unset($post['FORM']);
        $insert = "INSERT INTO orcamento ";
        $insert .= " (`".implode("`, `", array_keys($post))."`)";
        $insert .= " VALUES ('".implode("', '", $post)."') "; 
        
        mysqli_query($conn, $insert);
        
        $sql = "select orcamento.nome, orcamento.email, servicos.servico, cursos.curso, orcamento.mensagem 
                    from (orcamento LEFT JOIN servicos on orcamento.id_servico = servicos.id) 
                        LEFT JOIN cursos on orcamento.id_curso = cursos.id WHERE orcamento.id = LAST_INSERT_ID()";
        
        if(!($exec = $conn->prepare($sql))){
            echo "Erro preparando: ( " . $conn->errno . ")" . $conn->error;
        }
        
        if(!$exec->execute())
        {
            echo "Execute failed: (" . $conn->errno . ") " . $conn->error;
        }
        
        if(!($result = $exec->get_result())) {
            echo "Getting result set failed: (" . $conn->errno . ") " . $conn->error;
        }
        
        if($result->num_rows > 0)
        {
            $row = $result->fetch_assoc();
            send_mail('Orçamento', $row);
        }      
        
    }
       
?>