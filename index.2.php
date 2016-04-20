<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <meta charset="utf-8">
    <title>Instituto Paulista de Higiene Medicina Forense e do Trabalho</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/estilo_geral.2.css" />
    <link rel="stylesheet" href="style/estilo_index.1.css" />
    
        
  </head>

  <body>
      
    <?php include('db/dbconnect.php') ?>  
    
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
                    <img src="images/Instituto_MedicinaForense.jpg" alt="Medicina Forense" />
                        <div class="carousel-caption">
                        
                        </div>
                    </div>
                    <div class="item">
                    <img src="images/Instituto_DireitoTrabalhista.jpg" alt="Direito Trabalhista e Previdenciário" />
                    <div class="carousel-caption">
                        
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
             
        <div id="servicos">
            <div class="titulos">
                    <h3>Serviços</h3>
            </div>
        <div id="ul_div">
            <ul id="ul_info">
                <li class="item_info">
                    <a href="assessoria">
                        <img src="images/juridico.png" alt="Assessoria Técnica-Jurídica de Direito Trabalhista e Previdenciário"/>
                        <h4>Assessoria Técnica-Jurídica de Direito Trabalhista e Previdenciário</h4>
                        <p>Tem por finalidade atuar sobre as contingências de acidentes de trabalho e doenças profissionais.</p>
                    </a>
                </li>
                <li class="item_info">
                    <a href="med_forense">
                        <img src="images/perito.png" alt="Perícia Trabalhista e Previdenciária"/>
                        <h4>Perícia Trabalhista e Previdenciária</h4>
                        <p>O Instituto Paulista possui uma equipe de peritos judiciais que atuam na área jurispericial ha mais de 20 anos.</p>
                    </a>
                </li>
                <li class="item_info">
                    <a href="engenharia">
                        <img src="images/engenharia.png" alt="Engenharia de Segurança do Trabalho"/>
                        <h4>Engenharia de Segurança do Trabalho</h4>
                        <p>Realizamos trabalhos preventivos com os trabalhadores em seu ambiente de trabalho.</p>
                    </a>
                </li>
                <li class="item_info">
                    <a href="med_trabalho">
                        <img src="images/medicina_trabalho.jpg" alt="Medicina do Trabalho"/>
                        <h4>Medicina do Trabalho - PCMSO</h4>
                        <p>PCMSO - Programa de Controle Médico de Saúde Ocupacional - NR7</p>   
                    </a>
                </li>
                <li class="item_info">
                    <a href="cursos">
                        <img src="images/cursos.png" alt="Cursos de Normas Regulamentadoras"/>
                        <h4>Cursos de Normas Regulamentadoras</h4>
                        <p>Disponibilizamos vários temas de treinamentos aplicados nas empresas em decorrência das necessidades do dia a dia.</p>
                    </a>
                </li>
              </ul>
        </div> <!--ul_div-->
        </div> <!--servicos-->
        
        
        <div id="noticia">
            <div class="titulos">
                <h3>Eventos e Ultimas Notícias</h3>
            </div>
            <div id="noticia_interno">
                <?php 
                $total=10;
                include('db/get_noticias.php') ?>  
            </div>
                <div id="contato">
                    <div id="newsletter">
                    Quer receber nossas informações? <br> 
                    Assine nossa Newsletter<p>
                    <form id="form_newsletter">
                    <input type="text" name="mail" id="mail" placeholder="Digite seu email" onblur="validate(mail.value)">&nbsp;&nbsp;
                    <input type="hidden" name="valid_mail" id="valid_mail">
                    <input type="button" value="Assine Agora!" id="btnemail" onclick="newsletter(mail.value)"></form>
                    </div>
                    <div id="autor_container">
                    <div id="contato_interno">
                        Responsável:
                        Dr. João Baptista Optiz Junior<br>
                        Perito Médico Forense - CRM 50.284
                    </div>
               
                </div><!--contato-->
         </div>
            
           
        </div> <!--noticia-->
        
        
        
         
          </div> <!-- conteudo -->
      </div> <!-- bottom -->
      <?php include('footer.php') ?>
    </div> <!-- wrapper -->
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script type='text/javascript' src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type='text/javascript' src="script/script_index.js"></script>
  
  </body>
</html>