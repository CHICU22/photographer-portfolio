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

        <!-- About -->
        <div class="about">
            <img src="img/about.jpg" alt="about" class="about__image">
            <div>
                <h1 class="about__heading">About Me</h1>
                <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus elementum malesuada. Phasellus imperdiet volutpat erat congue placerat. 
                    Curabitur interdum imperdiet sapien, eget consectetur nisi facilisis ut. Etiam eu nunc sit amet urna faucibus dignissim. Nulla maximus diam 
                    vitae auctor ultricies. Curabitur rhoncus tempus cursus. Donec in dui id nibh maximus accumsan. Donec condimentum rhoncus lacus ac volutpat. 
                    Ut imperdiet nisi est, et blandit nisl luctus et. Praesent sit amet dolor erat. Nam nunc enim, molestie a porta nec, auctor ac metus. Donec 
                    non sollicitudin urna.
                </p>
            </div>
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