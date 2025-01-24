'use strict';
document.addEventListener('DOMContentLoaded', function () {
    console.log('HOLA');

    //----- Funcion para cambiar idioma -----//
    $('.change_lang').click(function () {
        if($(this).hasClass('current-menu-item')){
        }
        else{
            var change_lang = $(this).text();
            var actual_lang = $('.this_change').text();

            console.log($('.this_change').text());
            
            console.log('Cambiar Idioma de ' + actual_lang + ', a ' + change_lang);

            $('.this_change').removeClass('current-menu-item');
            $('.this_change').removeClass('this_change');
            $(this).addClass('current-menu-item');
            $(this).addClass('this_change');

            $('.' + change_lang).prop('hidden', false);
            $('.' + actual_lang).prop('hidden', true);
        }
    });
});