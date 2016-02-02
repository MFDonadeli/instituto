<html>
    <head>
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script type="text/javascript" src="script/expandable.js"></script>
    </head>
    <body>
        <?php include('dbconnect.php');
        
        $sql = "select * from atendimento";
        
        $result = $conn->query($sql);
        
        if($result->num_rows > 0)
        {
            echo "<div id='listContainer'>";
            echo "<ul id='expList'>";
            
            while($row = $result->fetch_assoc())
            {
                echo "<li>";
                echo "Nome: " . $row["nome"]; 
                echo "<ul>";
                echo "<li>";
                echo "<table>";
                foreach($row as $key => $value)
                {
                    echo "<tr>";
                    echo "<td>" . $key . "</td>";
                    echo "<td>" . $value . "</td>";
                    echo "</tr>";  
                }   
                echo "</table></li></ul></li>";
            }
            echo "</ul></div>";
        }
        
        ?>
    </body>
</html>