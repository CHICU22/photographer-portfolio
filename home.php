<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Reset CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <title>Portfolio de fotografia</title>
</head>
<body>
    <div class="container grid">
        <!-- Nav bar -->
        <?php include 'components/nav.php'; ?>

        <!-- Home-->
        <div class="home">
            <img src="img/homepage.jpg" alt="home-image" class="home__image">
            <img src="img/homepage-mobile.jpg" alt="home-image" class="home__image__mobile">
        </div>
    </div>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>

    <!--------- SCRIPTS --------->
    <!-- JQuery setup -->
    <script src="js/jquery-setup.js"></script>
    <!-- Main javascript -->
    <script src="js/main.js"></script>
</body>
</html>
