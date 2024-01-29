// Clicar na link "portfolio"
$('.navbar__portfolio__button').on('click', function () {
    // Fazer categorias aparecer e desaparecer
    $('.navbar__categorias').toggleClass('navbar__categorias--inactive');

    // Rodar seta
    $('.navbar__seta').toggleClass('navbar__seta--active');
})

//// Navbar Mobile ////
// Abrir
$('.navbar__hamburger').on('click', function () {
    $('.navbar__mobile--closed').hide();
    $('.navbar__mobile--open').show();
})

// Fechar
$('.navbar__close').on('click', function () {
    $('.navbar__mobile--closed').css('display', 'flex');
    $('.navbar__mobile--open').hide();
})

//// Light Gallery ////
lightGallery(document.getElementById('portfolio-lightgallery'),{
    download: false
})

//// Masonry ////
setTimeout(() => {
    $('.loader').fadeOut(2000);
}, 1500);

imagesLoaded('.portfolio__fotos').on('progress', function() {
    // layout Masonry after each image loads
    $('.portfolio__fotos').masonry({
        columnWidth: 200,
        itemSelector: '.portfolio__foto'
    });
});
