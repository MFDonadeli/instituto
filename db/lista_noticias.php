<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Instituto Paulista de Higiene Medicina Forense e do Trabalho</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style/estilo_geral.css" />
        <link rel="stylesheet" href="style/internas.css" />
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
                        <h3>Notícias</h3>
                        <?php include('get_noticias.php'); ?>
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