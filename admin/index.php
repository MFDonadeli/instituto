<!DOCTYPE html>
<html>
    <style>
        div {
            width: 100px;
            height: 100px;

            position: absolute;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;
            
            margin: auto;
        }
    </style>
    <body>
        <div>
            <form method='post' action='menu_adm.php'>
                <label for="senha">Senha:</label>
                <input type="password" name="senha"/><br>    
                <input type="submit" value='login'/>
            </form>
        </div>
    </body>
</html>