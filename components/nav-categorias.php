<!-- Nav bar -->
<div class="navbar__section">
    <img src="img/logo.svg" alt="logo" class="navbar__logo">

    <!-- Nav bar lista -->
    <ul class="navbar__lista">
        <li><a href="home.php" class="navbar__items">Home</a></li> 
        <li><a href="javascript:void(0)" class="navbar__items navbar__portfolio__button">Portfolio <img src="img/icons/seta-direita.svg" alt="seta" class="navbar__seta navbar__seta--active"></a></li>
        
        <!-- Nav bar categorias -->
        <div class="navbar__categorias">
            <li><a href="?animals=animals" class="navbar__categorias__links navbar__categorias__animals">Animals</a></li>
            <li><a href="?buildings=buildings" class="navbar__categorias__links navbar__categorias__buildings">Buildings</a></li>
            <li><a href="?people=people" class="navbar__categorias__links navbar__categorias__people">People</a></li>
        </div>

        <li><a href="about.php" class="navbar__items">About</a></li> 
        <li><a href="contact.php" class="navbar__items">Contact</a></li>
        
    </ul>
</div>

<!-- Nav bar mobile fechado -->
<div class="navbar__mobile--closed">
    <img src="img/icons/hamburger-menu.svg" alt="hamburger" class="navbar__hamburger">
    <img src="img/logo.svg" alt="logo" class="navbar__logo__mobile">
</div>
<ul class="navbar__mobile__categorias__lista">
    <li><a href="?animals=animals" class="navbar__mobile__categorias navbar__categorias__animals">Animals</a></li>
    <li><a href="?buildings=buildings" class="navbar__mobile__categorias navbar__categorias__buildings">Buildings</a></li>
    <li><a href="?people=people" class="navbar__mobile__categorias navbar__categorias__people">People</a></li>
</ul> 

<!-- Nav bar mobile aberto -->
    <div class="navbar__mobile--open">
        <div class="navbar__mobile__top--open">
        <img src="img/icons/close-line.svg" alt="close_icon" class="navbar__close">
        <img src="img/logo.svg" alt="logo" class="navbar__logo__mobile navbar__logo__mobile--open">
        </div>

        <div class="navbar__mobile__bottom--open">
        <ul class="navbar__lista__mobile">
            <li><a href="home.php" class="navbar__items__mobile">Home</a></li>
            <li><a href="index.php" class="navbar__items__mobile">Portfolio</a></li>
            <li><a href="about.php" class="navbar__items__mobile">About</a></li> 
            <li><a href="contact.php" class="navbar__items__mobile">Contact</a></li> 
        </ul>
        </div>
</div>