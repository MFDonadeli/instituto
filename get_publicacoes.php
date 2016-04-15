<?php
include('dbconnect.php');
$sql = "select id, nome, descricao, imagem from publicacoes where ativo = 1";

                     
$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
    echo "<li class='item_info'>";
    echo "<a href='#'>";
    echo "<img src='" . $row['imagem'] . "' alt='" . $row['nome'] . "'/>";
    echo "<h4>" . $row['nome'] . "</h4>";
    echo "<p>" . $row['descricao'] . "</p>";
    echo "<input type='button' value='Tenho Interesse'>";
    echo "</a>";
    echo "</li>";
}
 
?>