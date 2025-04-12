'use strict';

document.addEventListener('DOMContentLoaded', function () {
    const container_site_form = $('.sortable-item').first().clone();
    // Definición de variables para los elementos del DOM
    var $changelang = $('.change_lang');
    var $titleRevenueCenter = $("#title-revenuecenter");
    var $imageRevenueCenter = $('#image-revenuecenter');
    var $imageUpload = $('#image-upload');
    var $btnresetImage = $('#reset-image');
    var $sortableContainer = $('#sortable-container');
    var $btnaddCont = $("#add-container");

    //Generar variable de session storage 
    sessionStorage.setItem("idioma", "English");
    console.log(sessionStorage.getItem("Idioma"));

    /************************************/
    /*       Funcionalidad generales Contenido del Sitio Web       */
    /************************************/

    // Cambiar idioma
    $changelang.click(function () {
        if ($(this).hasClass('current-menu-item')) {
        } else {
            // Busca el idioma que actualmente está activo
            var before = $('.current-menu-item').attr('name');
            var lang_before = (before).split('-');

            // Remueve la clase de las etiquetas del idioma activo
            $('.current-menu-item').removeClass('current-menu-item');

            // Busca el nuevo idioma al que se cambiará
            var item = $(this).attr('name');
            var lang = (item).split('-');

            // Añade la clase para activar las etiquetas correspondientes al nuevo idioma
            $('li[name="to-' + lang[1] + '"]').addClass('current-menu-item');
            
            // Intercambia la visibilidad de las etiquetas correspondientes al idioma anterior y actual
            $('.' + lang_before[1]).prop('hidden', true);
            $('.' + lang[1]).prop('hidden', false);
        }
    });
    

    $(document).on('click', '.rc-select', function (){
        console.log($(this).parents().get(2));
        $($(this).parents().get(2)).removeClass('menu-open');
        $('.nav-button-holder').children().trigger( "click" );
    });


});
