<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <meta charset="utf-8">
    <title>Instituto Paulista - Agende uma visita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/estilo_geral.css" />
    <link rel="stylesheet" href="style/form.css" />
    <link rel="stylesheet" href="style/internas.css" />
    <script src="script/mask.js"></script>
    <script src="script/script_orcamento.js"></script>
    
    <script type="text/javascript">
    var datefield=document.createElement("input")
    datefield.setAttribute("type", "date")
        document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n') 
        
</script>
  
  </head>
  
  <body>
  
  <div class="wrapper"> 
      <?php include ('db/db_orcamento.php'); ?>

      <?php include('top.php'); ?>
      <div class="bottom">
        <div class="conteudo">
            <div id="imagem">
                <img src="images/agenda.jpg" alt="Agente uma visita"/>
            </div>
            <div id="texto">
                <form action="#" method="post" id="form_atendimento">
                <input name="FORM" type="hidden" value="ORCAMENTO">
            <table class="tabela1">
                    <tr>
                        <td class="td_center" colspan="2"><h1>Solicite o seu orçamento</h1></td>
                    </tr>
                    <tr>
                        <td class="td_center" colspan="2">
                            <p>Solicite aqui o seu orçamento para o serviço desejado.</p>
                            <p>Por favor, preencha com cuidado os campos de telefone e e-mail para que possamos confirmar o agendamento</p>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="nome">Nome*:</label></td>
                        <td><input name="nome" type="text" id="nome" size="30" maxlength="100" onblur="validate('nome', this.value)"/></td>
                    </tr>
                    <tr>
                        <td><label for="email">E-mail*:</label></td>
                        <td><input name="email" type="text" id="email" size="30" maxlength="50" onblur="validate('email', this.value)"/></td>
                    </tr>
                    <tr>
                        <td><label for="telefone">Telefone:</label></td>
                        <td><input name="telefone" type="text" id="telefone" size="30" maxlength="15" onkeypress="mascara(this, fonemask)" onblur="validate('telefone', this.value)"/></td>
                    </tr>
                    <tr>
                        <td><label for="servico">Serviço*:</label></td>
                        <td>
                            <select name="id_servico" id="servico">
                                <option value='-1'></option>
                                <?php include('db/get_servicos.php'); ?>
                            </select>
                        </td>
                    </tr>
                    <tr id="servico_cursos">
                        <td><label for="curso">Curso:</label></td>
                        <td>
                            <select name="id_curso" id="curso">
                                <option value='-1'></option>
                                <?php include('db/get_cursos.php'); ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="mensagem">Mensagem:</label></td>
                        <td><textarea name="mensagem" cols="28" rows="5" id="mensagem" maxlength="200"></textarea></td>
                    </tr>
                    <tr>
                        <td class="td_center" colspan="2" align="center"><input type="button" name="button2" id="button2" value="Enviar" onclick="checkForm()"/></td>
                    </tr>
                
                </table>
            </form>
        </div> <!-- table -->
            
        </div> <!-- conteudo -->
      </div> <!-- bottom -->
     <?php include('footer.php') ?>
  </div> <!-- wrapper -->
 
 <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> 
 <script type='text/javascript' src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 
 <script>
    $('#servico').on('change',function(){
        if( $(this).val()==="5"){
            $("#servico_cursos").show()
        }
        else{
            $("#servico_cursos").hide()
        }
    });
 </script>

  </body>
  </html>
      
      
  