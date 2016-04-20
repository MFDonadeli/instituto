<?php
     require_once 'session.php';
 ?>
 <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style/estilo_ger_noticia.css" />
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="../script/click_noticias.js"></script>
    </head>
    <body>
        <?php 
            if(!isset($_SESSION['user']))
                die('');    
        ?>
        <?php
            $data = "";
            $titulo = "";
            $conteudo = "";
            $id = "";
            $url = "";
            $data = "";
            
            if($_GET['id'] != '')
            {
            
                include('../db/dbconnect.php');
                if(!($sql = $conn->prepare("SELECT * FROM noticias WHERE id = ?"))){
                    echo "Erro preparando: ( " . $conn->errno . ")" . $conn->error;
                }
                
                $sql->bind_param("s", $_GET['id']);
                
                if(!$sql->execute())
                {
                    echo "Execute failed: (" . $conn->errno . ") " . $conn->error;
                }
                
                if(!($result = $sql->get_result())) {
                    echo "Getting result set failed: (" . $conn->errno . ") " . $conn->error;
                }
                
                if($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        $id = $row['id'];
                        $data = $row['data'];
                        $titulo = $row['titulo'];
                        $conteudo = str_replace('<br />', "\n",$row['conteudo']);
                        $url = $row['origem'];
                    }
                } 
            } 
            
            if($_POST['post'] == 'true')
            {
                if(isset($_POST['apagar']))
                    $delete = true;
                    
                include('../db/dbconnect.php');
                $post = $_POST;
                
                $update = false;
                
                if($_POST['id'] != '')
                {
                    $update = true;
                    $id = $_POST['id'];
                }
                
                unset($post['id']);
                unset($post['post']);
                unset($post['apagar']);
                unset($post['salvar']);
                
                $post['conteudo'] = $post_content = str_replace("\r\n","<br />",$post['conteudo']);
                
                if($delete)
                {
                    if(!($stmt = $conn->prepare("DELETE FROM noticias WHERE id = ?"))){
                        echo "Erro preparando: ( " . $conn->errno . ")" . $conn->error;
                    }
                    $stmt->bind_param("s", $id);
                    
                }
                else if($update)
                {
                    $sql = "UPDATE noticias SET ";
                    foreach($post as $key => $values)
                    {
                        $updt .= $key . "='" . $values . "',";
                    }    
                   
                    
                    $sql .= rtrim($updt, ",") . " WHERE id = ?";
                    
                    if(!($stmt = $conn->prepare($sql))){
                        echo "Erro preparando: ( " . $conn->errno . ")" . $conn->error;
                    } 
                    $stmt->bind_param("s", $id);
                }
                else
                {
                    $sql = "INSERT INTO noticias ";
                    $sql .= " (`".implode("`, `", array_keys($post))."`)";
                    $sql .= " VALUES ('".implode("', '", $post)."') ";
                    
                    if(!($stmt = $conn->prepare($sql))){
                        echo "Erro preparando: ( " . $conn->errno . ")" . $conn->error;
                    } 
                }
               
                if(!$stmt->execute())
                {
                    echo "Execute failed: (" . $conn->errno . ") " . $conn->error;
                } 
                $id = "";
                
            }  
            
         ?>
        <form action="ger_noticia.php" method="POST" id="form_noticia">
            
                <input type="hidden" name="id" value="<?php echo $id ?>"/>
                <input type="hidden" name="post" value="true" />
                <label for="titulo"/>Título<br>
                <input type="text" name="titulo" value="<?php echo $titulo ?>"/><br>
                <label for="data"/>Data<br>
                <input type="text" name="data" value="<?php echo $data ?>"/><br>
                <label for="conteudo"/>Conteudo<br>
                <textarea name="conteudo" cols="100" rows="20"><?php echo $conteudo ?></textarea><br>
                <label for="origem"/>Link<br>
                <input type="text" name="origem" value="<?php echo $url ?>"/><br>
            <button type="submit" name="salvar" formaction="ger_noticia.php">Salvar</button>
            <button type="submit" name="apagar" formaction="ger_noticia.php">Apagar</button>
        </form>
        
        <div>
            <?php include('../db/dbconnect.php');
            $sql = "select * from noticias";
            
            $result = $conn->query($sql);
            if($result->num_rows > 0)
            {
                echo "<ul id='list_noticias'>";
                while($row = $result->fetch_assoc())
                {
                    echo "<li data-val=" . $row["id"] . "><a href='ger_noticia.php?id=" . $row["id"] . "'><strong>" . $row["data"] . "</strong>";
                    echo " - " . $row["titulo"] . "</li></a>";
                }
                echo "</ul>";
            }
            ?>
        </div>
    </body>
</html>