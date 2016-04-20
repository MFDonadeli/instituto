<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <meta charset="utf-8">
    <title>Instituto Paulista - Trabalhe Conosco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/estilo_geral.css" />
    <link rel="stylesheet" href="style/form.css" />
    <link rel="stylesheet" href="style/internas.css" />
    <script src="script/mask.js"></script>
    <script src="script/script_trabalhe.js"></script>
  </head>
  
  <body>
  
  <div class="wrapper"> 

      <?php include('db/db_trabalhe.php'); ?>
      <?php include('top.php'); ?>
      <div class="bottom">
        <div class="conteudo">
            <div id="imagem">
                <img src="images/trabalhe_interna.jpg" alt="Trabalhe Conosco"/>
            </div>
            <div id="texto">
            <table class="tabela1">
                <form action="#" method="post" id="form_trabalhe">
                    <input name="FORM" type="hidden" value="TRABALHE">
                    <tr>
                        <td class="td_center" colspan="2"><h1><center>Trabalhe conosco</center></h1><br>
                        <span id="msg_preenchimento"></span></td>
                    </tr>
                    <tr>
                        <td class="td_center" colspan="2">
                            <h3>Informações Pessoais</h3>
                        </td>
                    </tr>
                        <td><label for="nome">Nome Completo*:</label></td>
                        <td><input name="nome" type="text" id="nome" size="30" maxlength="100" onblur="validate('nome', this.value)"/></td>
                    </tr>
                    <tr>
                        <td><label for="sexo">Sexo*:</label></td>
                        <td>
                            <input type="radio" name="sexo" id="sexo" value="Masculino">Masculino<br>
                            <input type="radio" name="sexo" id="sexo" value="Feminino">Feminino<br>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="email">E-mail*:</label></td>
                        <td><input name="email" type="text" id="email" size="30" maxlength="50" onblur="validate('email', this.value)"/></td>
                    </tr>
                    <tr>
                        <td><label for="telefone">Telefone*:</label></td>
                        <td><input name="telefone" type="text" id="telefone" size="30" maxlength="15" onkeypress="mascara(this, fonemask)" onblur="validate('telefone', this.value)"/></td>
                    </tr>
                    <tr>
                        <td><label for="endereco">Endereço*:</label></td>
                        <td><input name="endereco" type="text" id="endereco" size="30" maxlength="100" onblur="validate('endereco', this.value)"/></td>
                    </tr>
                    <tr>
                        <td><label for="cep">CEP*:</label></td>
                        <td><input name="cep" type="text" id="cep" size="30" maxlength="9" onkeypress="mascara(this, cepmask)" onblur="validate('cep', this.value)"/></td>
                    </tr>
                    <tr>
                        <td><label for="bairro">Bairro*:</label></td>
                        <td><input name="bairro" type="text" id="bairro" size="30" maxlength="50" onblur="validate('bairro', this.value)"/></td>
                    </tr>
                    <tr>
                        <td><label for="cidade">Cidade*:</label></td>
                        <td><input name="cidade" type="text" id="cidade" size="30" maxlength="75" onblur="validate('cidade', this.value)"/></td>
                    </tr>
                    <tr>
                        <td height="30" align="right"><label for="estado">Estado*:</label></td>
                        <td><select name="estado" id="estado" size="1">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AM">Amazonas</option>
                        <option value="AP">Amap&aacute;</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Cear&aacute;</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Esp&iacute;rito Santo</option>
                        <option value="GO">Goi&aacute;s</option>
                        <option value="MA">Maranh&atilde;o</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Par&aacute;</option>
                        <option value="PB">Paraiba</option>
                        <option value="PR">Paran&aacute;</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piaui</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rond&ocirc;nia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP" selected="selected">S&atilde;o Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="data_nascimento">Data de nascimento*:</label></td>
                        <td><input name="data_nascimento" type="text" id="data_nascimento" size="10" maxlength="10" onkeypress="mascara(this, datemask)" onblur="validate('data_nascimento', this.value)" /></td>
                    </tr>
                    <tr>
                        <td height="30" align="right"><label for="estado_civil">Estado Civil*:</label></td>
                        <td><select name="estado_civil" id="estado_civil" size="1">
                        <option value="Casado">Casado(a)</option>
                        <option value="Solteiro">Solteiro(a)</option>
                        <option value="Divorciado">Divorciado(a)</option>
                        <option value="Separado">Separado(a)</option>
                        <option value="Viuvo">Viúvo(a)</option>
                        <option value="Outros">Outros</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="deficiencia">Portador Deficiência*:</label></td>
                        <td><input type="radio" id="deficiencia" name="deficiencia" value="Sim">Sim<br>
                         <input type="radio" id="deficiencia" name="deficiencia"  value="Nao">Não<br>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_center" colspan="2">
                            <h3>Informações Profissionais</h3>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="objetivo">Objetivo profissional*:</label></td>
                        <td><textarea name="objetivo" cols="28" rows="5" max_length="200" id="objetivo"></textarea><br>
                        <span style="font-size: 9px;"><span id="chars_prof">200</span> caracteres restantes</span></td></td>
                    </tr>
                    <tr>
                        <td><label for="trabalho">Trabalho Desejado*:</label></td>
                        <td><input type="checkbox" name="trabalho[]" id="trabalho" value="Autônomo">Autônomo<br>
                         <input type="checkbox" name="trabalho[]"  id="trabalho" value="Estágio">Estágio<br>
                         <input type="checkbox" name="trabalho[]"  id="trabalho" value="Meio Período">Meio Período<br>
                         <input type="checkbox" name="trabalho[]"  id="trabalho" value="Período Integral">Período Integral<br>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="salario">Último Salário:</label></td>
                        <td><input name="salario" type="text" id="salario" size="30" maxlength="10" onblur="validate('nome', this.value)"/></td>
                    </tr>
                    <tr>
                        <td class="td_center" colspan="2">
                            <h3>Outras Informações</h3>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="extra">Cursos extras*:</label></td>
                        <td><textarea name="extra" cols="28" rows="5" max_length="200" id="extra"></textarea><br>
                        <span style="font-size: 9px;"><span id="chars_extra">200</span> caracteres restantes</span></td>
                        
                    </tr>
                    <tr>
                        <td class="td_center" colspan="2"><input type="button" name="button2" id="button2" value="Enviar" onclick="checkForm()"/></td>
                    </tr>
                </form>
        </table>
        </div> <!-- table -->
        </div> <!-- conteudo -->
      </div> <!-- bottom -->
      <?php include('footer.php') ?>
  </div> <!-- wrapper -->
  
  
  <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script type='text/javascript' src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<script>
      var maxLength = 200;
        $('#extra').keyup(function() {
        var length = $(this).val().length;
        var length = maxLength-length;
        $('#chars_extra').text(length);
        });
</script>
<script>
        var maxLength1 = 200;
        $('#obj_prof').keyup(function() {
        var length1 = $(this).val().length;
        var length1 = maxLength1-length1;
        $('#chars_prof').text(length1);
        });
 </script>

  </body>
  </html>
      
      
  