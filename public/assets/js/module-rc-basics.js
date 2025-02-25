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

    // Detectar modal iniciado #ModalRVC 
    var originalImagePath = '';
    $(document).on('click', '.edit-revenuecenter', function (e) {
        //Asegurarse de que el tab "Centro de consumo" esté activo al abrir el modal
        $('#rvc-tab').addClass('active');
        $('#TabRCV').addClass('show active');
        // quitar la clase activa de otros tabs para evitar conflictos
        $('#content-tab').removeClass('active');
        $('#TabContent').removeClass('show active');
        $('#buttons-tab').removeClass('active');
        $('#Tabbuttons').removeClass('show active');


        // Asignar la imagen
        var imagePath = $(this).closest('.section-rc').find('img').attr('src');
        originalImagePath = imagePath;
        $imageRevenueCenter.attr('src', imagePath);

        //asignar titulo revenuecenter al modal
        var rvc = $(this).closest('.section-rc').find('.titlerevenuecenter').text();
        $titleRevenueCenter.text(rvc);

        //Separar el id original para obtener solo el id del centro de consumo
        var separate_id = (this.id).split('-');
        var current_id = separate_id[2];
        console.log(current_id);

        $.ajax({
            url: url_get_sites,
            method: 'GET',
            data: { 'rc_id': current_id },
            processData: true,
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            success: function (response) {
                if(response.sites != null){
                    //$('#sortable-container').empty();
                    $(response.sites).each(function(index){
                        console.log('Contenedor agregado', this);
                        
                        // Clonar el primer contenedor (sin el atributo 'data-position')
                        const newContainer = $('.sortable-item').first().clone();
                                    
                        // Establecer el nuevo valor de la posición
                        const position = $('.sortable-item').length + 1;
                        newContainer.attr('data-position', position);
                                    
                        // Limpiar los valores de los inputs (si es necesario)
                        newContainer.find('input, select, textarea').val('').prop('disabled', false);
                        newContainer.find('.title-site').text(this.name);

                        newContainer.find(`.firstday option[value="${this.day_start}"]`);
                        newContainer.find(`.lastday option[value="${this.day_end}"]`);
                                    
                        // Añadir el nuevo contenedor a la lista
                        $sortableContainer.append(newContainer);
                                    
                        // Establecer el valor 'all' en el select de disponibilidad
                        const $availabilitySelect = newContainer.find('.avaible');
                        $availabilitySelect.val('all').trigger('change');
                        
                    });
                }
                console.log(container_site_form);
                console.log($sortableContainer.find(".sortable-item"));
                console.log(response.sites);
                $sortableContainer.find(".sortable-item").first().remove();
                updatePositions();
                
                //toastr.success('Bien hecho', response, { progressBar: true, showDuration: 1000, hideDuration: 1000 });
            },
            error: function (error) {
                console.log(error);
                
                //toastr.error('Error al mostrar sitios', error, { progressBar: true, showDuration: 1000, hideDuration: 1000 });
            }
        });
    });

    // Detectar modal cerrado #ModalRVC 
    $(document).on('click', '#close-rvc', function () {
        // Eliminar todos los contenedores excepto el primero
        $sortableContainer.find('.sortable-item').not(':first').remove();

        // Limpiar el primer contenedor
        const firstContainer = $sortableContainer.find('.sortable-item').first();
        firstContainer.find('input, select, textarea').val('').prop('disabled', false); // Limpiar los valores
        firstContainer.find('.title-site').text("SITIO"); // Limpiar el título
        firstContainer.find('.avaible').val('all').trigger('change');  // Establecer el valor por defecto en el select
    });



    /************************************/
    /*      FUNCIONALIDADES MODAL: TAB CENTRO DE CONSUMOS - GENERALES*/
    /************************************/

    // Manejo de la selección de una nueva imagen
    $imageUpload.on('change', function (event) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $imageRevenueCenter.attr('src', e.target.result); // Mostrar la nueva imagen seleccionada
        };
        reader.readAsDataURL(event.target.files[0]);
    });

    // Restablecer la imagen a la original si se hace clic en el botón "reset-image"
    $btnresetImage.on('click', function (e) {
        e.preventDefault();
        $imageRevenueCenter.attr('src', originalImagePath); // Restablecer imagen original
        $imageUpload.val('');
    });

    /************************************/
    /*      FUNCIONALIDADES MODAL: TAB CENTRO DE CONSUMOS -  CONTENIDO SITIOS*/
    /************************************/

    // Agregar un nuevo contenedor
    $btnaddCont.on("click", function () {
        // Clonar el primer contenedor (sin el atributo 'data-position')
        const newContainer = $('.sortable-item').first().clone();

        // Establecer el nuevo valor de la posición
        const position = $('.sortable-item').length + 1;
        newContainer.attr('data-position', position);

        // Limpiar los valores de los inputs (si es necesario)
        newContainer.find('input, select, textarea').val('').prop('disabled', false);
        newContainer.find('.title-site').text("SITIO");

        // Añadir el nuevo contenedor a la lista
        $sortableContainer.append(newContainer);

        // Establecer el valor 'all' en el select de disponibilidad
        const $availabilitySelect = newContainer.find('.avaible');
        $availabilitySelect.val('all').trigger('change');  // Esto disparará el cambio correctamente
    });

    // Eliminar un contenedor 
    $sortableContainer.on("click", ".remove-btn", function () {
        // Comprobar si es el único contenedor
        if ($sortableContainer.find(".sortable-item").length === 1) {
            alert("No puedes eliminar el último contenedor.");
            return; // No hace nada si es el único contenedor
        }
        // Confirmar eliminación
        const confirmation = confirm("¿Estás seguro de que deseas eliminar este contenedor?");
        if (confirmation) {
            $(this).closest(".sortable-item").remove();
            // Reorganizar las posiciones después de eliminar
            updatePositions();
        }
    });

    // Detectar el cambio en el select 'avaible'
    $(document).on('change', '.avaible', function () {
        const value = $(this).val();
        const container = $(this).closest('.sortable-item');  // Obtener el contenedor actual
        const $firstDaySelect = container.find('.firstday');
        const $lastDaySelect = container.find('.lastday');

        if (value === 'all') {
            $firstDaySelect.val('1').prop('disabled', true);  // Lunes
            $lastDaySelect.val('7').prop('disabled', true);   // Domingo
        } else {
            $firstDaySelect.prop('disabled', false);
            $lastDaySelect.prop('disabled', false);
        }
    });



    // Hacer que los elementos sean arrastrables (Sortable)
    new Sortable($sortableContainer[0], {
        animation: 150, // Tiempo de animación al arrastrar
        handle: '.sortable-handle', // Definir el área de arrastre (icono)
        draggable: '.sortable-item', // Especificar que solo los elementos con esta clase son arrastrables
        onEnd: function (evt) {
            // Cuando el elemento termine de moverse, actualizar las posiciones
            updatePositions();
        }
    });


    // Función para actualizar las posiciones de todos los contenedores
    function updatePositions() {
        $sortableContainer.find(".sortable-item").each(function (index) {
            $(this).attr("data-position", index + 1);
        });
    }


    /************************************/
    /*      FUNCIONALIDADES MODAL: TAB CENTRO DE CONSUMOS -  BOTONES*/
    /************************************/

    
    // Función para habilitar/deshabilitar los campos URL y PDF
    $('#button-list').on('change', 'input[type="radio"]', function () {
        var rowId = $(this).closest('tr').attr('id').split('-')[2]; // Extraer el ID de la fila
        var urlInput = $('#url-input-' + rowId);
        var pdfInput = $('#pdf-input-' + rowId);
        var urlInputEs = $('#url-input-es-' + rowId);
        var pdfInputEs = $('#pdf-input-es-' + rowId);

        if ($('#url-radio-' + rowId).prop('checked')) {
            urlInput.prop('disabled', false).show();
            pdfInput.prop('disabled', true).hide();
        } else if ($('#pdf-radio-' + rowId).prop('checked')) {
            urlInput.prop('disabled', true).hide();
            pdfInput.prop('disabled', false).show();
        }

        if ($('#url-radio-es-' + rowId).prop('checked')) {
            urlInputEs.prop('disabled', false).show();
            pdfInputEs.prop('disabled', true).hide();
        } else if ($('#pdf-radio-es-' + rowId).prop('checked')) {
            urlInputEs.prop('disabled', true).hide();
            pdfInputEs.prop('disabled', false).show();
        }
        
    });

    // Inicializar el estado de los campos al cargar la página
    $('input[type="radio"]:checked').change();


    // Evento para agregar una fila nueva
    $('#add-button').click(function () {
        // Contador inicial en 1 para buscar desde la primera posicion
        var rowCount = 1;
        
        // Buscar desde la primera posicion para evitar repeticiones
        while ($(`#button-row-${rowCount}`).length >= 1){
            // Incremento del contador uno a uno para evitar saltar o repetir posiciones
            rowCount++;
        }
        
        // Contenedor de boton dentro de la tabla
        var newRow = `
            <tr id="button-row-${rowCount}">
                <td rowspan="2">#${rowCount}</td>
                <td>ING</td>
                <td>
                    <input type="text" class="form-control form-control-sm" value="Nuevo Botón" placeholder="Texto del botón" />
                </td>
                <td>
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="d-flex align-items-center">
                            <input type="radio" id="url-radio-${rowCount}" name="funcionalidad-${rowCount}" class="funcionalidad-radio" checked>
                            <label for="url-radio-${rowCount}" class="ml-1">URL</label>

                            <input type="radio" id="pdf-radio-${rowCount}" name="funcionalidad-${rowCount}" class="funcionalidad-radio">
                            <label for="pdf-radio-${rowCount}" class="ml-1">PDF</label>
                        </div>
                        <input style="width:300px" type="url" class="form-control form-control-sm ml-3 url-input" id="url-input-${rowCount}" placeholder="Nueva URL" />
                        <input style="width:300px" type="file" class="form-control form-control-sm ml-3 pdf-input" id="pdf-input-${rowCount}" accept=".pdf" />
                    </div>
                </td>
                <td>
                    <a class="truncate-url" href="#"></a>
                </td>
                <td  rowspan="2">
                    <button class="btn btn-dark btn-sm delete-button" value="${rowCount}"><a class="fa fa-trash text-white"></a></button>
                </td>
            </tr>
            <tr id="button-row_es-${rowCount}">
                <td>ESP</td>
                <td>
                    <input type="text" class="form-control form-control-sm" value="Nuevo Botón" placeholder="Texto del botón" />
                </td>
                <td>
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="d-flex align-items-center">
                            <input type="radio" id="url-radio-es-${rowCount}" name="funcionalidad-es-${rowCount}" class="funcionalidad-radio" checked>
                            <label for="url-radio-es-${rowCount}" class="ml-1">URL</label>

                            <input type="radio" id="pdf-radio-es-${rowCount}" name="funcionalidad-es-${rowCount}" class="funcionalidad-radio">
                            <label for="pdf-radio-es-${rowCount}" class="ml-1">PDF</label>
                        </div>
                        <input style="width:300px" type="url" class="form-control form-control-sm ml-3 url-input" id="url-input-es-${rowCount}" placeholder="Nueva URL" />
                        <input style="width:300px" type="file" class="form-control form-control-sm ml-3 pdf-input" id="pdf-input-es-${rowCount}" accept=".pdf" />
                    </div>
                </td>
                <td>
                    <a class="truncate-url" href="#"></a>
                </td>
            </tr>
        `;

        $('#button-list').append(newRow);
        $(`#url-radio-${rowCount}`).trigger('change');
        $(`#url-radio-es-${rowCount}`).trigger('change');
    });

    // Eliminar un botón
    $(document).on('click', '.delete-button', function () {
        const confirmation = confirm("¿Estás seguro de que deseas eliminar este boton?");
        if (confirmation) {
            console.log($(this).attr('value'));
            var btnVal = $(this).attr('value');
            $(`#button-row-${btnVal}`).remove();
            $(`#button-row_es-${btnVal}`).remove();
            //$(this).closest('tr').remove();
        }
    });

});
