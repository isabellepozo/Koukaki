(function( $ ) {
    'use strict';

// ******************* GESTION DE L'ANIMATION DES TITRES AU SCROLL ******************* //
    // Exécuter une fonction chaque fois que l'utilisateur fait défiler la page
    $(window).scroll(function() {

    // Calculer la position actuelle du visiteur sur la page
    var positionScroll = $(window).scrollTop() + $(window).height();

    // Créer une classe lorsque l'on est au niveau d'un H2 H3
    $("h2, h3").each(function() {
        var distanceFromTop = $(this).offset().top;
            if (positionScroll >= distanceFromTop) {
                    // Ajoute la classe d'animation
                   $(this).addClass('animationTitre');
            } 
            else {
                // Supprime la classe d'animation lorsque le titre sort de la vue
                $(this).removeClass('animationTitre');
            }
        });
    });


// ******************* GESTION DU SWIPER SECTION PERSONNAGE ******************* //
    // Initialisation de Swiper     
    const swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: false,
        slidesPerView: "auto",
        pagination: ".swiper-pagination",
        coverflowEffect: {
            rotate: 40,
            stretch: 0,
            depth: 20,
            modifier: 1,
            slideShadows: false,
        },  
        slidesOffsetBefore:500,
    });



// ******************* GESTION DES NUAGES SECTION LIEU ******************* //
    jQuery(document).ready(function($) {
        // Initialiser AOS
        AOS.init({
            // Paramétrages
            easing: 'ease-in-sine',
            offset:100,
            duration: 1500,          
        });
    });

// ******************* GESTION DU MENU BURGER ******************* //
    // Ajout d'une classe pour gérer l'ouverture et fermeture du menu
    let toggle = document.querySelector(".toggle");
    let body = document.querySelector("body");
    toggle.addEventListener('click', function () {
        body.classList.toggle('open');
    });

    // Fermeture du menu lors de la sélection d'un lien du menu
        let menuItems = document.querySelectorAll(".liste-burger a");
        menuItems.forEach(item => {
            item.addEventListener('click', function () {
                body.classList.remove('open');
            });
        });

})( jQuery );  










