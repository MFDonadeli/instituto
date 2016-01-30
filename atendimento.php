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
    <script src="script/script_atendimento.js"></script>
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
                        <td colspan="2"><h1><center>Atendimento</center></h1></td>
                    </tr>
                    <tr>
                        <td colspan="2">Para entrar em contato com o Instituto Paulista, você pode Ligar para: <strong>(11) 2977-8899</strong>  ou escrever um e-mail para <a href="mailto:comercial@institutopaulista.org?Subject=Atendimento"><strong>comercial@institutopaulista.org</strong></a> ou até preencher o formulário abaixo. Lembre-se de fornecer corretamente os seus dados de contato para que possamos retornar a sua solicitação.</td>
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
                        <td width="30%" height="30" align="right"><label for="empresa">Empresa:</label></td>
                        <td><input name="empresa" type="text" id="empresa" size="30" maxlength="100"/></td>
                    </tr>
                    <tr>
                        <td width="30%" height="30" align="right"><label for="assunto">Assunto:</label></td>
                        <td><input name="assunto" type="text" id="assunto" size="30" maxlength="100"/></td>
                    </tr>
                    <tr>
                        <td width="30%" height="30" align="right"><label for="texto_desc">Texto*:</label></td>
                        <td><textarea name="texto_desc" cols="28" rows="5" id="texto_desc" onblur="validate('texto_desc', this.value)"></textarea></td>
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
      
      
  