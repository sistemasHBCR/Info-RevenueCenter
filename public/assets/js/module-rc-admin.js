'use strict';

document.addEventListener('DOMContentLoaded', function () {
    var $modal_rc = $('#toModalRVC');   //Contenedores de descripción
    var $rc_form_name = $('.rc-input-name');

    $modal_rc.click(function (){
        console.log('ABRIRMODAL');
        $($rc_form_name).val('AAAA');
    })
});