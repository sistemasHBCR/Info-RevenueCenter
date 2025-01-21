'use strict';
document.addEventListener('DOMContentLoaded', function () {
    console.log('HOLA');

    //----- Funcion para cambiar idioma -----//
    $('.change_lang').click(function () {
        var change_lang = $(this).text();
        var actual_lang = $('.current-menu-item').text();

        console.log('Cambiar Idioma de ' + actual_lang + ', a ' + change_lang);

        $('.current-menu-item').removeClass('current-menu-item');
        $(this).addClass('current-menu-item');

        $('.' + change_lang).prop('hidden', false);
        $('.' + actual_lang).prop('hidden', true);

    });
});