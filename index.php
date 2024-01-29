<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Light Gallery -->
    <link type="text/css" rel="stylesheet" href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css" />
    <!-- Reset CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <title>Portfolio de fotografia</title>
</head>
<body>
    <div class="loader">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>

    <div class="container grid">
        <!-- Nav bar -->
        <?php include 'components/nav-categorias.php'; ?>
      
        <!-- Fotografias -->
        <div id="portfolio-lightgallery"  class="portfolio__fotos">
            <?php
            require('controller.php');
                $resultado = $mysqli->query("SELECT * FROM `imagens`");

                while ($row = $resultado->fetch_assoc()){
                    $fotos = '';

                    // Ver categoria clicada 
                    if ($_GET['animals']) {
                        // Mudar variavel fotos para as da categoria clicada
                        $fotos = $row[$_GET['animals']];
                    } else if ($_GET['buildings']) {
                        // Mudar variavel fotos para as da categoria clicada
                        $fotos = $row[$_GET['buildings']];
                    } else if ($_GET['people']) {
                        // Mudar variavel fotos para as da categoria clicada
                        $fotos = $row[$_GET['people']];
                    } 

                    // Selecionar animais como categoria default (quando a pagina carregar)
                    if (!$fotos) {
                        $fotos = $row['animals'];
                    }

                    $lista .= '<div class="portfolio__foto" href="img/'.$fotos.'.jpg" data-lg-size="1600-2400">'.
                              '<img alt=".." src="img/'.$fotos.'.jpg" style="max-width:100%"/></div>';
                }

               echo $lista;
            ?>
        </div>   
    </div>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>
    
    <!--------- SCRIPTS --------->
    <!-- JQuery setup -->
    <script src="js/jquery-setup.js"></script>
    <!-- ImagesLoaded Setup -->
    <script src="js/images-loaded-setup.js"></script>
    <!-- Light Gallery -->
    <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
    <!-- Masonry setup -->
    <script src="js/masonry-setup.js"></script>
    <!-- Main javascript -->
    <script src="js/main.js"></script>
</body>
</html>