<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <meta charset="utf-8">
    <title>Bootply snippet - Bootply Bootstrap Preview</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/estilo_geral.css" />
    <link rel="stylesheet" href="style/form.css" />
    <link rel="stylesheet" href="style/internas.css" />
    <script src="script/mask.js"></script>
    <script src="script/script_visita.js"></script>
    
    <script type="text/javascript">
    var datefield=document.createElement("input")
    datefield.setAttribute("type", "date")
        document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n') 
        
</script>
 
<script>
    jQuery(function($){ //on document.ready
        $('#data').datepicker({dateFormat: 'dd/mm/yy', minDate: 0});
    })
</script>
  
  </head>
  
  <body>
  
  <div class="wrapper"> 

      <?php include('top.php'); ?>
      <div class="bottom">
        <div class="conteudo">
            <div id="imagem">
                <img src="images/agenda.jpg"/>
            </div>
            <div id="texto">
            <table width="60%" border="0" align="center" cellpadding="0" cellspacing="0" class="tabela1">
                <form action="#" method="post" id="form_atendimento">
                    <tr>
                        <td colspan="2"><h1><center>Agende uma visita</center></h1></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <?php echo $_POST['nome']; ?>
                            <p>Aqui você pode solicitar um agendamento de uma consulta ou exame.</p>
                            <p>Por favor, preencha com cuidado os campos de telefone e e-mail para que possamos confirmar o agendamento</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%" height="30" align="right"><label for="nome">Nome*:</label></td>
                        <td><input name="nome" type="text" id="nome" size="30" maxlength="100" onblur="validate('nome', this.value)"/></td>
                    </tr>
                    <tr>
                        <td width="30%" height="30" align="right"><label for="mail">E-mail*:</label></td>
                        <td><input name="mail" type="text" id="mail" size="30" maxlength="100" onblur="validate('mail', this.value)"/></td>
                    </tr>
                    <tr>
                        <td width="30%" height="30" align="right"><label for="telefone">Telefone:</label></td>
                        <td><input name="telefone" type="text" id="telefone" size="30" maxlength="14" onkeypress="mascara(this, fonemask)" onblur="validate('telefone', this.value)"/></td>
                    </tr>
                    <tr>
                        <td width="30%" height="30" align="right"><label for="data">Data:</label></td>
                        <td><input name="data" type="text" id="data" size="30" maxlength="100"/></td>
                    </tr>
                    <tr>
                        <td width="30%" height="30" align="right"><label for="assunto">Horário:</label></td>
                        <td><input name="assunto" type="text" id="assunto" size="30" maxlength="100"/></td>
                    </tr>
                    <tr>
                        <td width="30%" height="30" align="right"><label for="texto_desc">Mensagem:</label></td>
                        <td><textarea name="texto_desc" cols="28" rows="5" id="texto_desc"></textarea></td>
                    </tr>
                    <tr>
                        <center><td colspan="2" align="center"><input type="button" name="button2" id="button2" value="Enviar" onclick="checkForm()"/></td></center>
                    </tr>
                </form>
        </table>
        </div> <!-- table -->
            
        </div> <!-- conteudo -->
      </div> <!-- bottom -->
      <div class="footer">
          <br>  
          Instituto Paulista de Higiene Medicina Forense e do Trabalho
      </div> <!-- footer -->
  </div> <!-- wrapper -->
 
 <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> 
  <script type='text/javascript' src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type='text/javascript' src="script/script_index.js"></script>

  </body>
  </html>
      
      
  