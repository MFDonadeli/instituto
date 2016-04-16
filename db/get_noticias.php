<?php
include('dbconnect.php');
$sql = "select id, data, titulo from noticias";

                     
$result = $conn->query($sql);
if($result->num_rows > 0)
{
    if(!isset($total))
        $total = $result->num_rows;
    else if($total > $result->num_rows) 
        $total = $result->num_rows;
    else
        $show_more = true;
        
    for($i=0; $i<$total; $i++)
    {
        $row = $result->fetch_assoc();
        echo "<p style='margin-bottom: 0.5em;'>";
        echo "<a href='noticias.php?id=" . $row['id'] . "'><strong>" . $row['data'] . "</strong> - " .
              $row['titulo'] . "<br></a>";
        echo "</p>";
    }
    
    if($show_more)
    {
        echo "<p style='text-align:right;'>";
        echo "<a href='lista_noticias.php'</a>";
        echo "Mais notícias...";
        echo "</p>";
    }
} 
?>