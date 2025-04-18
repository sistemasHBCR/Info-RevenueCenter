'use strict';

document.addEventListener('DOMContentLoaded', function () {
    var $happ_desc = $('.show-info');   //Contenedores de descripción
    $happ_desc.click(function (){
        // Oculta o muestra las descripcions que se encuentren visibles
        // Muestra el contenedor de descripción
        if($(this).css('opacity') != 1){
            $(this).animate({
                opacity: '1'
            }, 100);
        }
        // Oculta el contenedor de descripción
        else{
            $(this).animate({
                opacity: '0'
            }, 100);
        }
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
            el: ".swiper-pagination",
            type: "progressbar",
          },
      
        // Opciones de flechas de navegación
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        
        // Al cambiar entre slides
        on : {
            slideChange: function () {
                // Navega por los slides
                $('.show-info').each(function(index){
                    // Oculta las descripcions que se encuentren visibles
                    if($(this).css('opacity') > 0){
                        $(this).animate({
                            opacity: '0'
                        }, 0);
                    }
                });
            }
        }
    });
});