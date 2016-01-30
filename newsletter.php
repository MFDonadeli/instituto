<?php
	echo "Quer receber nossas informações?<br>";
    echo "Assine nossa Newsletter<p>";
    echo "<form id='form_newsletter'><input type='text' name='mail' placeholder='Digite seu email' style='border:none;'>&nbsp;&nbsp;";
    echo "<input type='button' value='Assine Agora!' onclick='newsletter(mail.value)' style='border:none;background-color:white;color:blue'></form>";
?>