<?php
include('dbconnect.php');
$sql = "select id, data, titulo from noticias";

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