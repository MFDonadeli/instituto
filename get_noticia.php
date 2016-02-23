<?php
include('dbconnect.php');
$sql = "select id, data, titulo from noticias";

if(!($sql_full = $conn->prepare("SELECT * FROM noticias WHERE id = ?"))){
    echo "Erro preparando: ( " . $conn->errno . ")" . $conn->error;
}

$sql_full->bind_param("s", $_GET['id']);

if(!$sql_full->execute())
{
    echo "Execute failed: (" . $conn->errno . ") " . $conn->error;
}

if(!($result = $sql_full->get_result())) {
    echo "Getting result set failed: (" . $conn->errno . ") " . $conn->error;
}

if($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
    echo "<h4>" . $row['titulo'] . "</h4>";
    echo $row['conteudo'];
}
echo "<hr>";
echo "<strong>Outras notícias</strong><br>";

$result = $conn->query($sql);
if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        echo "<a href='noticias.php?id=" . $row['id'] . "'><strong>" . $row['data'] . "</strong> - " .
              $row['titulo'] . "<br></a>";
    }
} 
?>