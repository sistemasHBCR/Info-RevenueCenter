'use strict';
document.addEventListener('DOMContentLoaded', function () {
    console.log('HOLA');
    
    //----- Funcion para cambiar idioma -----//
    $('.change_lang').click(function () {
        var change_lang = $(this).attr('value');
        console.log('Cambiar Idioma: ' + change_lang);
    });
});