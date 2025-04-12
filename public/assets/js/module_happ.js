'use strict';

document.addEventListener('DOMContentLoaded', function () {
    var $happening_modal = $('.happening_modal');
    var $happ_desc = $('.show-info');

    $happening_modal.click(function () {
        var happ_id = $(this).attr("happ");
        $('#happ_container_' + happ_id).prop('hidden', false);
    });

    $happ_desc.click(function (){
                // Oculta las descripcions que se encuentren visibles
        $(this).prop('hidden', true);
    });

    const swiper = new Swiper('.swiper', {
        // Definir la dirección
        direction: 'horizontal',

        // Habilitar loop
        loop: true,

        // Definir efeco para slides
        effect: 'creative',
        creativeEffect: {
            prev: {
                // will set `translateZ(-400px)` on previous slides
                translate: [0, 0, -400],
            },
            next: {
                // will set `translateX(100%)` on next slides
                translate: ['100%', 0, 0],
            },
        },
      
        // Opciones de paginación
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
      
        // Opciones de flechas de navegación
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        
        // Al cambiar entre slides
        on : {
            slideChange: function () {
                // Oculta las descripcions que se encuentren visibles
                $('.show-info').prop('hidden', true);
            }
        }
    });
});