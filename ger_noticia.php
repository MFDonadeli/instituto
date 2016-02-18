<?php
     require_once 'session.php';
 ?>
 <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <link rel="stylesheet" href="style/estilo_ger_noticia.css" />
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="script/click_noticias.js"></script>
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
            
                include('dbconnect.php');
                $sql = "select * from instituto where id = " . $_GET['id'];
               
                $result = $conn->query($sql);
                if($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        $id = $row['id'];
                        $data = $row['data'];
                        $titulo = $row['titulo'];
                        $conteudo = $row['conteudo'];
                        $url = $row['url'];
                    }
                } 
            } 
            
            if($_POST['post'] == 'true')
            {
                if(isset($_POST['apagar']))
                    $delete = true;
                    
                include('dbconnect.php');
                $post = $_POST;
                
                $update = false;
                
                if($_POST['id'] != '')
                {
                    $update = true;
                    $id = $_POST['id'];
                }
                
                echo $id;
                
                unset($post['id']);
                unset($post['post']);
                unset($post['apagar']);
                unset($post['salvar']);
                
                $post['conteudo'] = nl2br($post['conteudo']);
                
                if($delete)
                {
                    $stmt = "DELETE FROM instituto WHERE id = " . $id;
                }
                else if($update)
                {
                    $stmt = "UPDATE instituto SET ";
                    foreach($post as $key => $values)
                    {
                        $updt .= $key . "='" . $values . "',";
                    }    
                   
                    
                    $stmt .= rtrim($updt, ",") . " WHERE id = " . $id; 
                }
                else
                {
                    $stmt = "INSERT INTO instituto ";
                    $stmt .= " (`".implode("`, `", array_keys($post))."`)";
                    $stmt .= " VALUES ('".implode("', '", $post)."') ";
                }
               
                mysqli_query($conn, $stmt);  
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
                <textarea name="conteudo"><?php echo $conteudo ?></textarea><br>
                <label for="origem"/>Link<br>
                <input type="text" name="origem" value="<?php echo $url ?>"/><br>
            <button type="submit" name="salvar" formaction="ger_noticia.php">Salvar</button>
            <button type="submit" name="apagar" formaction="ger_noticia.php">Apagar</button>
        </form>
        
        <div>
            <?php include('dbconnect.php');
            $sql = "select * from instituto";
            
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