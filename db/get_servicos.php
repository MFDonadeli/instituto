<?php
include('dbconnect.php');
$sql = "select id, servico from servicos where ativo = 1";

                     
$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
    echo "<option value='" . $row['id'] . "'>" . $row['servico'] . "</option>";
}
 
?>