<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Instituto Paulista - Publicações</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style/estilo_geral.css" />
        <link rel="stylesheet" href="style/internas.css" />
        <link rel="stylesheet" href="style/estilo_publicacoes.css" />
    </head>
    <body>
        <div class="wrapper">
             <?php include('top.php'); ?>
            <div class="bottom">
                <div class="conteudo">
                    <div id="imagem">
                        <img src="images/agenda.jpg" alt="Publicações"/>
                    </div>
                    <div id="texto">
                        <h3>Publicações</h3>
                        <p>O responsável pelo Instituto Paulista, tem publicações em Perícia Médica, Medicina do Trabalho e Direito.</p>

  <p>
    <div id="ul_div">
        <ul id="ul_info">
            <ul id="ul_info">
            <?php include('db/get_publicacoes.php'); ?>
        </ul>
    </div>
  </p>  
 
                    </div> <!-- inner div -->
                </div> <!-- conteudo -->
            </div> <!-- bottom -->
            <?php include('footer.php') ?>
        </div> <!-- wrapper -->
        
        <div id="cover"> </div>
        
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script type='text/javascript' src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="script/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
       
    </body>
</html>