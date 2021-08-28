<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doce Delícia</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway&display=swap">
  </head>
  <body>
    <?php include 'pages/header.php';?>
    <?php 
        $pagina = $_GET['p'];
        if($pagina == '') {include 'pages/home.php';}
        if($pagina == 'home.php') {include 'pages/home.php';}
        if($pagina == 'quemsomos.php') {include 'pages/quemsomos.php';}
        if($pagina == 'contato.php') {include 'pages/contato.php';}
        if($pagina == 'ondeestamos.php') {include 'pages/ondeestamos.php';}
        if($pagina == 'produto.php') {include 'pages/produto.php';}
    ?>  
    <?php include 'pages/footer.php';?>
    <script src="js/script.js"></script>
  </body> 
</html>
