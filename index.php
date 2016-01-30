<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <meta charset="utf-8">
    <title>Instituto Paulista</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/estilo_geral.css" />
    <link rel="stylesheet" href="style/estilo_index.css" />
    
        
  </head>

  <body>
      
      
    
    <div class="wrapper"> 

      <?php include('top.php'); ?>
      
      <div class="bottom">
          <div class="conteudo">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" align="center">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
  
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                    <img src="images/Instituto1.png" alt="...">
                        <div class="carousel-caption">
                        <h3>Caption Text</h3>
                        </div>
                    </div>
                    <div class="item">
                    <img src="images/Instituto2.png" alt="...">
                    <div class="carousel-caption">
                        <h3>Caption Text</h3>
                    </div>
                    </div>
                </div> <!-- carousel-inner -->

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
               </div> <!-- Carousel -->

            <div class="titulos">
                    <h3>Instituto Paulista</h3>
            </div>
            <div id="texto_instituto">
                    <p>O Instituto Paulista atua no mercado há mais de vinte anos prestando serviços de assessoria e consultoria em segurança, higiene e medicina do trabalho para diversas empresas de diversos setores econômicos; possui registro no Conselho Regional da Medicina do Estado de São Paulo e no Conselho Regional de Engenharia, Arquitetura e Agronomia do Estado de São Paulo.
                </p> 
            </div> 
            <hr> 

        <div id="ul_div">
            <ul id="ul_info">
                <li id="item_info">
                    <a href="assessoria">
                        <img src="images/juridico.png" height="100px" width="100px"/>
                        <h4>Assessoria Técnica-Jurídica de Direito Trabalhista e Previdenciário</h4>
                        <p>Tem por finalidade atuar sobre as contingências de acidentes de trabalho e doenças profissionais.</p>
                    </a>
                </li>
                <li id="item_info">
                    <a href="med_forense">
                        <img src="images/perito.png" height="100px" width="100px"/>
                        <h4>Perícia Trabalhista e Previdenciária</h4>
                        <p>O Instituto Paulista possui uma equipe de peritos judiciais que atuam na área jurispericial ha mais de 20 anos.</p>
                    </a>
                </li>
                <li id="item_info">
                    <a href="engenharia">
                        <img src="images/engenharia.png" height="100px" width="100px"/>
                        <h4>Engenharia de Segurança do Trabalho</h4>
                        <p>Realizamos trabalhos preventivos com os trabalhadores em seu ambiente de trabalho.</p>
                    </a>
                </li>
                <li id="item_info">
                    <a href="med_trabalho">
                        <img src="images/medicina_trabalho.jpg" height="100px" width="100px"/>
                        <h4>Medicina do Trabalho - PCMSO</h4>
                        <p>PCMSO - Programa de Controle Médico de Saúde Ocupacional - NR7</p>   
                    </a>
                </li>
                <li id="item_info">
                    <a href="cursos">
                        <img src="images/cursos.png" height="100px" width="100px""/>
                        <h4>Cursos de Normas Regulamentadoras</h4>
                        <p>Disponibilizamos vários temas de treinamentos aplicados nas empresas em decorrência das necessidades do dia a dia.</p>
                    </a>
                </li>
              </ul>
        </div> <!--ul_div-->
        
        <div id="noticia">
            <div class="titulos">
                <h3>Eventos e Ultimas Notícias</h3>
            </div>
            <div id="noticia_interno">
                <a href="noticias.php"><strong>01.01.2016</strong> - Novo site do Instituto Paulista<br></a>
                <a href="noticias.php"><strong>01.12.2015</strong> - Instituto Paulista firmou parceria com a APCD – Associação Paulista de Cirurgiões Dentista<br></a>
                <a href="noticias.php"><strong>01.11.2015</strong> - Resumo da Notícia 2<br></a>
                <a href="noticias.php"><strong>01.10.2015</strong> - AÇÕES REGRESSIVAS: INSS ajuizou ações no valor de R$ 200 milhões até 2010<br></a>
                <a href="noticias.php"><strong>01.09.2015</strong> - Resumo da Notícia 4<br></a>
                <a href="noticias.php"><strong>01.08.2015</strong> - Resumo da Notícia 5<br></a>
            </div>
        </div> <!--noticia-->
        
        <div id="separador">
            <br>
        </div>
        <div id="contato">
            <div id="newsletter">
              Quer receber nossas informações?<br>
              Assine nossa Newsletter<p>
              <form id="form_newsletter"><input type="text" name="mail" placeholder="Digite seu email" style="border:none;">&nbsp;&nbsp;
              <input type="button" value="Assine Agora!" onclick="newsletter(mail.value)" style="border:none;background-color:white;color:blue"></form>
            </div>
            <div id="contato_interno">
                Responsável <br>
                Dr. João Baptista Optiz Junior<br>
                Perito Médico Forense<br>
                CRM 50.284
            </div>
            <br>    
        </div><!--contato-->
         
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