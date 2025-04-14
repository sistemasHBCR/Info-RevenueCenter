'use strict';

document.addEventListener('DOMContentLoaded', function () {
    var $happening_modal = $('.happening_modal');
    var $happ_desc = $('.show-info');

    //$happening_modal.click(function () {
    //    var happ_id = $(this).attr("happ");
    //    $('#happ_container_' + happ_id).show(400).animate({
    //        opacity: '1',
    //        position: 'absolute',
    //        transform: 'translate (-50%, -50%) scale (0)'
    //      });
    //});

    $happ_desc.click(function (){
        // Oculta o muestra las descripcions que se encuentren visibles
        if($(this).hasClass('thenHide')){
            console.log('hisdcv');
            $(this).removeClass('thenHide');
            $(this).animate({
                opacity: '1'
            }, 200);
        }
        else{
            $(this).addClass('thenHide');
            $(this).animate({
                opacity: '0'
            }, 200);
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
                // Oculta las descripcions que se encuentren visibles
                $('.show-info').animate({
                    opacity: '0'
                });
            }
        }
    });
});