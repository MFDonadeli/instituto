<?php
include('dbconnect.php');
$sql = "select id, data, titulo from noticias";
$sql_full = "select * from noticias where id = " . $_GET['id'];

$result = $conn->query($sql_full);
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