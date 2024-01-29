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

        <!-- Contact -->
        <div class="contact">
            <img src="img/contact.jpg" alt="contact" class="contact__image">
            <div>
                <h2 class="contact__heading">Contact me</h2>
                <ul class="contact__details">
                    <li><img src="img/icons/email.svg" class="contact__icon"> jamiejohn@gmail.com</li>
                    <li><img src="img/icons/telefone.svg" class="contact__icon"> +351 911 222 333</li>
                </ul>
                <p class="contact__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi consequatur fugiat accusantium delectus necessitatibus hic facere qui dolorem laudantium exercitationem animi sequi aspernatur ex odio, nulla est deserunt.</p>
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