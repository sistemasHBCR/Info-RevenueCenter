'use strict';

document.addEventListener('DOMContentLoaded', function () {
    var $modal_rc = $('#toModalRVC');   //Contenedores de descripción
    var $rc_form_name = $('.rc-input-name');

    $modal_rc.click(function (){
        $.ajax({
            url: url_get_rc,
            method: 'GET',
            data: {  },
            processData: true,
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            success: function (response) {
                console.log('Success');
                
                $(response.revenue_centers).each(function (index){
                    console.log(this);
                    $('#input-name-rc-' + this.id).val(this.name);
                    console.log($('#input-file-rc-' + this.id));
                    
                    $('#input-file-rc-' + this.id).val(this.image);
                });

                //toastr.success('Bien hecho', response, { progressBar: true, showDuration: 1000, hideDuration: 1000 });
            },
            error: function (error) {
                console.log(error);
                
                //toastr.error('Error al mostrar sitios', error, { progressBar: true, showDuration: 1000, hideDuration: 1000 });
            }
        });
    })
});