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
            $nome = "";
            $descricao = "";
            $ativo = 1;
            $id = "";
            $imagem = "";
            
            if($_GET['id'] != '')
            {
            
                include('dbconnect.php');
                if(!($sql = $conn->prepare("SELECT * FROM publicacoes WHERE id = ?"))){
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
                        $nome = $row['nome'];
                        $descricao = $row['descricao'];
                        $ativo = $row['ativo'];
                        $imagem = $row['imagem'];
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
                
                unset($post['id']);
                unset($post['post']);
                unset($post['apagar']);
                unset($post['salvar']);
                
                print_r($post);
               
                if(!isset($post['ativo']))
                    $post['ativo'] = 0;
                
                if($delete)
                {
                    if(!($stmt = $conn->prepare("DELETE FROM publicacoes WHERE id = ?"))){
                        echo "Erro preparando: ( " . $conn->errno . ")" . $conn->error;
                    }
                    $stmt->bind_param("s", $id);
                    
                }
                else if($update)
                {
                    if ($_FILES)
                    {
                        $name = "livros/" . $post['nome'];
                        move_uploaded_file($_FILES['imagem']['tmp_name'], $name);
                        
                        $post['imagem'] = $name;
                        echo "Uploaded image '$name'<br><img src='$name'>";
                    }
                    
                    $sql = "UPDATE publicacoes SET ";
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
                    if ($_FILES)
                    {
                        $name = "livros/" . $post['nome'];
                        move_uploaded_file($_FILES['imagem']['tmp_name'], $name);
                        
                        $post['imagem'] = $name;
                        echo "Uploaded image '$name'<br><img src='$name'>";
                    }
                    
                    $sql = "INSERT INTO publicacoes ";
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
        <form action="ger_publicacao.php" method="POST" id="form_publicacao" enctype='multipart/form-data'>
        
            
                <input type="hidden" name="id" value="<?php echo $id ?>"/>
                <input type="hidden" name="post" value="true" />
                <label for="nome"/>Título<br>
                <input type="text" name="nome" value="<?php echo $nome ?>"/><br>
                <label for="descricao"/>Descricao<br>
                <textarea name="descricao" cols="100" rows="20"><?php echo $descricao ?></textarea><br>
                <label for="ativo"/>Ativo<br>
                <input type="checkbox" name="ativo" value="1" <?php if( $ativo ) echo "checked=true"; ?>/><br>
                <label for="imagem"/>Image<br>
                <input type="file" name="imagem" value="<?php echo $imagem ?>"/><br>
            <button type="submit" name="salvar" formaction="ger_publicacao.php">Salvar</button>
            <button type="submit" name="apagar" formaction="ger_publicacao.php">Apagar</button>
        </form>
        
        <div>
            <?php include('dbconnect.php');
            $sql = "select * from publicacoes";
            
            $result = $conn->query($sql);
            if($result->num_rows > 0)
            {
                echo "<ul id='list_noticias'>";
                while($row = $result->fetch_assoc())
                {
                    echo "<li data-val=" . $row["id"] . "><a href='ger_publicacao.php?id=" . $row["id"] . "'>";
                    echo " - " . $row["nome"] . "</li></a>";
                }
                echo "</ul>";
            }
            ?>
        </div>
    </body>
</html>