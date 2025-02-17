<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $properties->title }} - ADMIN</title>
    <meta name="robots" content="noodp" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' id='dina-bootstrap-css-css' href='{{ asset('assets/css/bootstrap/css/bootstrap.min.css') }}'
        type='text/css' media='all' />
    <!-- Font Awesome Icons CSS -->
    <link rel='stylesheet' id='dina-font-awesome-css'
        href='{{ asset('assets/css/fontawesome/css/font-awesome.min.css') }}' type='text/css' media='all' />
    <!-- Main CSS File -->
    <link rel='stylesheet' id='dina-style-css-css' href='{{ asset('assets/style.css') }}' type='text/css'
        media='all' />
    <!-- favicons -->
    <link rel="icon" href="{{ asset('assets/images/icons/' . $properties->logo) }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/images/icons/' . $properties->logo) }}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/icons/' . $properties->logo) }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        .section-rc:hover {
            background: rgb(255, 255, 255);
            background: linear-gradient(0deg, rgba(255, 255, 255, 1) 0%, rgba(255, 241, 225, 1) 15%, rgba(255, 241, 225, 1) 85%, rgba(255, 255, 255, 1) 100%);

        }

        /*****ELEMENTOS REVENUE CENTER***/
        .more-btn {
            display: flex;
            flex-wrap: wrap;
            /* Permite que los botones se muevan a la siguiente línea si es necesario */
            gap: 10px;
            /* Espacio entre los botones */
        }

        .view-more {
            flex: 1 1 45%;
            /* Los botones ocupan el 45% del contenedor, y se ajustan para ocupar espacio en 2 columnas */
            box-sizing: border-box;
            /* Para asegurarnos de que el padding y el margen no afecten el tamaño de los botones */
            text-align: center;
            margin-bottom: 10px;
            /* Espacio inferior entre los botones */
        }


        /******ELEMENTOS MODAL*******/
        #image-revenuecenter {
            width: 359px;
            /* Ancho fijo */
            height: 269px;
            /* Alto fijo */
            object-fit: cover;
            /* Ajusta la imagen para que cubra el contenedor */
            border: 5px solid #e0b16f;
            /* Agrega un borde de 5px de color dorado (#e0b16f) */
            border-radius: 10px;
            /* Opcional: agrega bordes redondeados */
        }

        .sortable-item {
            border: 1px solid #ddd;
            /* Borde que separa los contenedores */
            padding: 10px;
            margin-bottom: 15px;
            background-color: #fdfdfd;
            border-radius: 5px;
            position: relative;
        }

        .sortable-item h3 {
            margin-top: 0;
        }

        .sortable-item .sortable-handle {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: grab;
            font-size: 20px;
            color: #aaa;
        }

        .sortable-item:hover .sortable-handle {
            color: #333;
        }


        /*Escala de tabla */
        #databuttons table td,
        #databuttons table th {
            font-size: 0.8em;
        }

        /*Truncar/cortar url*/
        .truncate-url {
            display: inline-block;
            max-width: 40ch;
            /* Limita a 40 caracteres */
            white-space: nowrap;
            /* Evita el salto de línea */
            overflow: hidden;
            /* Oculta el texto que sobresale */
            text-overflow: ellipsis;
            /* Agrega "..." al final */
        }
    </style>
</head>

<body class="body-header1">
    <!-- MOBILE MENU -->
    <div class="mask-nav-2">
        <!-- MENU -->
        <nav class="navbar navbar-2 nav-mobile">
            <div class="nav-holder nav-holder-2">
                <ul id="menu-menu-2" class="menu-nav-2">
                    @foreach ($revenue_centers as $rc)
                        <li class="menu-item">
                            <a href="#{{ $rc->id }}{{ $rc->name }}">{{ $rc->name }}</a>
                        </li>
                    @endforeach
                    <li class="menu-item menu-item-has-children">
                        <a href="">Language</a>
                        <ul class="sub-menu">
                            @foreach ($languages as $language)
                                <li class="menu-item"><a href="">{{ $language->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- /MOBILE MENU -->
    <!-- START TOPBAR -->
    <header id="header-4" class="navbar-fixed-top">
        <div class="headerWrap-4">

            <!-- LOGO -->
            <div class="logo-4 alignc"><a href="{{ url('/') }}"><img class="img-fluid"
                        src="{{ asset('assets/images/icons/' . $properties->image) }}" alt="1Homes"
                        style="width: 120px; height: auto;" /></a></div>
            <!-- MENU -->
            <div class="nav-holder nav-holder-4">

                <ul id="menu-menu-1" class="menu-nav menu-nav-1">
                    <li class="menu-item menu-item-has-children">
                        <a href="">Inicio</a>
                        <ul class="sub-menu">
                            <li class="menu-item current-menu-item"><a class="white" style="cursor: pointer">Revenue
                                    Centers</a></li>
                            <li class="menu-item"><a href="{{ url('spa') }}" class="white"
                                    style="cursor: pointer">SPA</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="">|</a></li>
                    @foreach ($revenue_centers as $rc)
                        <li class="menu-item">
                            <a href="#{{ $rc->id }}{{ $rc->name }}">{{ $rc->name }}</a>
                        </li>
                    @endforeach
                    <li class="menu-item"><a href="">|</a></li>
                    <li class="menu-item menu-item-has-children">
                        <a href="">Language</a>
                        <ul class="sub-menu">
                            @foreach ($languages as $i => $language)
                                @if ($i == 0)
                                    <li class="menu-item change_lang current-menu-item this_change"
                                        value="{{ $language->id }}"><a class="white"
                                            style="cursor: pointer">{{ $language->name }}</a></li>
                                @else
                                    <li class="menu-item change_lang" value="{{ $language->id }}"><a class="white"
                                            style="cursor: pointer">{{ $language->name }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="" data-toggle="modal" data-target="#ModalHeader"><i class="fas fa-cogs fa-lg"
                                style="color: #e0b16f"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /MENU -->
            <!-- MOBILE BUTTON NAV  -->
            <div class="nav-button-holder nav-btn-mobile inactive">
                {{-- <span class="menu-txt">MENU</span> --}}
                <button type="button" class="nav-button">
                    <span class="icon-bar"></span>
                </button>
                <div class="btn-header btn-header4"><a href="" data-toggle="modal" data-target="#ModalHeader"><i
                            class="fas fa-cogs fa-lg"></i></a></div>
            </div>
            <div class="btn-header btn-header4"></div>
        </div>
        <!--headerWrap-->
    </header>
    <!-- /HEADER -->

    <!-- START BANNER -->
    <section id="home-content-9" class="no-parallax bkg-img-100vh margin-b72"
        style="background-image:url('{{ asset('assets/images/backgrounds/' . $properties->background) }}');">
        <div class="item-content-bkg">
            <div class="inner-desc">
                <img id="logoHeader" src="{{ asset('assets/images/icons/' . $properties->logo) }}" class="img-fluid"
                    alt="Logo" style="width: 55px; height: auto;">
                <h1 id="propertyName" class="post-title single-post-title">{{ $properties->name }}</h1>
                {{-- <span class="post-subtitle" style="font-size: 35px">TASTE</span> --}}
            </div>
        </div>
    </section>
    <!-- /END BANNER -->

    <!--START REVENUECENTER-->
    @foreach ($revenue_centers as $i => $rc)
        <section id="container_{{ $rc->id }}{{ $rc->name }}" class="row section-rc" style="padding-top: 90px;">
            <div class="container">
                <div class="row" style="padding-bottom: 72px;">
                    <!-- contenedor de Imagen -->
                    <div class="col-md-6 {{ $i % 2 == 0 ? 'order-md-1' : 'order-md-2' }} mobile-margin-b54">
                        <div class="margin-r54">
                            <img class="img-fluid" src="{{ asset('assets/images/revenuecenters/' . $rc->image) }}"
                                alt="{{ $rc->name }}" />
                        </div>
                    </div>
                    <!-- /col-md-6 -->

                    <!-- contenedor de Texto -->
                    <div class="col-md-6 {{ $i % 2 == 0 ? 'order-md-2' : 'order-md-1' }}">
                        <h2 id="RC_{{ $rc->id }}{{ $rc->name }}"
                            class="home-title margin-b24 title-headline titlerevenuecenter">{{ $rc->name }}</h2>
                        <!--START SITE-->
                        @foreach ($sites as $site)
                            @if ($site['rc_id'] == $rc->id)
                                <h6>{{ $site['name'] }}</h6>
                                <span class="English">{{ $site['day_range_ing'] != '' ? $site['day_range_ing'] : '' }}
                                    {{ $site['hour_start_alt'] != '' ? '| ' . $site['hour_start_alt'] . ' - ' . $site['hour_end_alt'] : '' }}</span>
                                <span class="Spanish"
                                    hidden>{{ $site['day_range_esp'] != '' ? $site['day_range_esp'] : '' }}
                                    {{ $site['hour_start_alt'] != '' ? '| ' . $site['hour_start_alt'] . ' - ' . $site['hour_end_alt'] : '' }}</span>
                                <p class="English">{{ $site['description'] }}</p>
                                <p class="Spanish" hidden>{{ $site['description_es'] }}</p>
                            @endif
                        @endforeach
                        <!--START SITE-->
                        <!--START BUTTONS-->
                        <div class="more-btn">
                            @foreach ($buttons as $button)
                                @if ($button->rc_id == $rc->id)
                                    <a class="view-more English"
                                        href="{{ asset('assets/files/' . $button->file) }}">{{ $button->name }}</a>
                                    <a class="view-more Spanish" href="{{ asset('assets/files/' . $button->file) }}"
                                        hidden>{{ $button->name_es }}</a>
                                @endif
                            @endforeach
                        </div>
                        <!--END SITE-->
                    </div>
                    <!-- /col-md-6 -->
                </div>
            </div>
            <!-- Icono de Edición -->
            <div class="alignc col-md-2">
                <a href="#" data-toggle="modal" data-target="#ModalRVC"><i id="btn-rc-{{ $rc->id }}" class="edit-revenuecenter fas fa-pen fa-lg" style="color: #e0b16f"></i></a>
            </div>
        </section>
    @endforeach
    <!--END REVENUECENTERS -->

    <!--START FOOTER -->
    <footer>
        <div class="container">
            <!-- ROW -->
            <div class="row alignc" style="align-items: center">
                <!-- FOOTER COLUMN 1 -->
                <!-- FOOTER COLUMN 2 -->
                <div class="col-md-12">
                    <div class="footer-content">
                        <h5>1 Homes Cabo Preview:</h5>
                        <p>Paseo de La Marina 4732, Col.
                            El Médano
                            23453 Cabo San Lucas, B.C.S.
                            Mexico
                        </p>
                    </div>
                </div>
                <!-- FOOTER COLUMN 3 -->
            </div>
            <!-- /ROW -->
            <!-- FOOTER SOCIAL -->
            <ul class="footer-social">
                <li><a class="social-facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li><a class="social-twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a class="social-tripadvisor" href="#" target="_blank"><i
                            class="fab fa-tripadvisor"></i></a></li>
                <li><a class="social-pinterest" href="#" target="_blank"><i class="fab fa-pinterest"></i></a>
                </li>
                <li><a class="social-instagram" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
            <!-- /FOOTER SOCIAL -->
            <!-- FOOTER SCROLL UP -->
            <div class="scrollup">
                <a class="scrolltop" href="#">
                    <i class="fas fa-chevron-up"></i>
                </a>
            </div>
            <!-- /FOOTER SCROLL UP -->
        </div>
        <!--container-->
    </footer>
    <!-- /FOOTER -->


    <!------------------------------------------FORMULARIOS------------------------------------------>
    <form action="" method="post" enctype="multipart/form-data">
        <div id="ModalHeader" class="modal fade text-left" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">EDITAR PROPIEDAD</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <h6 style="padding: 3px;">Titulo de la pagina</h6>
                            <input type="text" name="" id="" class="reservation-fields"
                                value="{{ $properties->title }}">
                        </div>
                        <div>
                            <h6 style="padding: 3px;">Nombre de la propiedad</h6>
                            <input type="text" name="" id="" class="reservation-fields"
                                value="{{ $properties->name }}">
                        </div>
                        <div>
                            <h6 style="padding: 3px;">Logo centro</h6>
                            <div class="alignc"
                                style="height: 120px; width: 200px; background-color: rgba(0, 0, 0, 0.2)">
                                <img src="{{ asset('assets/images/icons/' . $properties->image) }}"
                                    alt="{{ $properties->image }}" style="max-height: 120px;">
                            </div>
                            <input type="file" name="" id="" class="reservation-fields"
                                value="{{ $properties->image }}">
                        </div>
                        <div>
                            <h6 style="padding: 3px;">Logo top</h6>
                            <div class="alignc"
                                style="height: 120px; width: 200px; background-color: rgba(0, 0, 0, 0.2)">
                                <img src="{{ asset('assets/images/icons/' . $properties->logo) }}"
                                    alt="{{ $properties->logo }}" style="max-height: 120px;">
                            </div>
                            <input type="file" name="" id="" class="reservation-fields"
                                value="{{ $properties->logo }}">
                        </div>
                        <div>
                            <h6 style="padding: 3px;">Baner</h6>
                            <div class="alignc"
                                style="height: 120px; width: 200px; background-color: rgba(0, 0, 0, 0.2)">
                                <img src="{{ asset('assets/images/backgrounds/' . $properties->background) }}"
                                    alt="{{ $properties->background }}" style="max-height: 120px;">
                            </div>
                            <input type="file" name="" id="" class="reservation-fields"
                                value="{{ $properties->background }}">
                        </div>
                        <div class="more-btn">
                            <a class="view-more Spanish">Guardar cambios</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div id="ModalRVC" class="modal fade text-left" tabindex="-1" role="dialog" aria-hidden="true"
        data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document" style="max-width: 80%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edición de contenido</h4>
                    <button type="button" id="close-rvc" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="rvc-tab" data-toggle="tab" href="#TabRCV"
                                role="tab" aria-controls="tabrvc" aria-selected="true">Centro de consumo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="content-tab" data-toggle="tab" href="#TabContent"
                                role="tab" aria-controls="content" aria-selected="false">Contenido</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="buttons-tab" data-toggle="tab" href="#Tabbuttons"
                                role="tab" aria-controls="buttons" aria-selected="false">Botones</a>
                        </li>
                    </ul>

                    <!-- Tab content: Se debe usar una sola estructura de tab-content -->
                    <div class="tab-content" id="myTabContent">
                        <!-- Tab 1: Centro de consumo -->
                        <div class="tab-pane fade show active" id="TabRCV" role="tabpanel"
                            aria-labelledby="rvc-tab">
                            <section class="page-content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="page-holder custom-page-template mt-2">
                                                <p class="alignc">Datos generales</p>
                                            </div>
                                            <div class="reservation_txt">
                                                <form method="post" id="reservation-form"
                                                    action="include/reservation-process.php"
                                                    enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-md-12 text-center">
                                                            <h3 id="title-revenuecenter"
                                                                class="margin-b24 title-site title-headline"
                                                                contenteditable="true"
                                                                style="outline: none; cursor: text;text-transform: uppercase;">
                                                                CENTRO DE CONSUMO
                                                            </h3>
                                                        </div>
                                                    </div>

                                                    <!-- Imagen mostrada -->
                                                    <div class="row">
                                                        <div class="col-md-12 mobile-margin-b32 text-center">
                                                            <img id="image-revenuecenter"
                                                                class="img-fluid img-feature"
                                                                src="{{ asset('assets/images/blog/blog-1.jpg') }}"
                                                                loading="lazy" alt="about 1">
                                                            <br>
                                                            <small>Cargar imagen (Solo PNG o JPG)</small>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="d-flex align-items-center">
                                                                <!-- Input para seleccionar la imagen -->
                                                                <input type="file" id="image-upload"
                                                                    class="form-control mr-2"
                                                                    accept="image/png, image/jpeg"
                                                                    style="max-width: 800px;">
                                                                <!-- Botón con ícono de regresar -->
                                                                <button id="reset-image"
                                                                    class="btn btn-secondary ms-2">
                                                                    <i class="fas fa-undo"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <!-- Tab 2: Sitios -->
                        <div class="tab-pane fade" id="TabContent" role="tabpanel" aria-labelledby="content-tab">
                            <section class="page-content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="page-holder custom-page-template mt-2">
                                                <p class="alignc">Contenido</p>
                                            </div>
                                            <div class="reservation_txt">
                                                <!-- Contenedor arrastrable -->
                                                <div id="sortable-container" class="sortable-container">
                                                    <!-- Ejemplo de contenedor inicial -->
                                                    <div class="sortable-item" data-position="1">
                                                        <div class="sortable-handle">
                                                            <!-- Icono de arrastre -->
                                                            <i class="fas fa-arrows-alt"></i>
                                                        </div>
                                                        <!-- Icono de eliminar -->
                                                        <i class="remove-btn fas fa-times"
                                                            style="cursor: pointer"></i>

                                                        <h3 class="title-site" contenteditable="true"
                                                            style="outline: none; cursor: text;">SITIO</h3>

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Abierto*</label>
                                                                <p>
                                                                    <select class="form-control avaible">
                                                                        <Option text-es="ABIERTO TODOS LOS DÍAS"
                                                                            text-en="OPEN DAILY" value="all">
                                                                            Todos los dias</Option>
                                                                        <option value="personalized">Definir
                                                                        </option>
                                                                    </select>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>De*</label>
                                                                <p>
                                                                    <select class="form-control firstday"
                                                                        name="firstday" disabled>
                                                                        <option value="1" selected>Lunes
                                                                        </option>
                                                                        <option value="2">Martes</option>
                                                                        <option value="3">Miércoles</option>
                                                                        <option value="4">Jueves</option>
                                                                        <option value="5">Viernes</option>
                                                                        <option value="6">Sábado</option>
                                                                        <option value="7">Domingo</option>
                                                                    </select>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>A*</label>
                                                                <p>
                                                                    <select class="form-control lastday"
                                                                        name="lastday" disabled>
                                                                        <option value="1">Lunes</option>
                                                                        <option value="2">Martes</option>
                                                                        <option value="3">Miércoles</option>
                                                                        <option value="4">Jueves</option>
                                                                        <option value="5">Viernes</option>
                                                                        <option value="6">Sábado</option>
                                                                        <option value="7" selected>Domingo
                                                                        </option>
                                                                    </select>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Desde las*</label>
                                                                <p>
                                                                    <select class="form-control" id="firsthour"
                                                                        name="firsthour">
                                                                        @php
                                                                            $horas = [];
                                                                            // Definimos las horas de apertura entre las 5 AM y 12 AM (medianoche)
                                                                            for ($i = 1; $i <= 24; $i++) {
                                                                                // Hora en formato 24 horas para el valor
                                                                                $hora24 = \Carbon\Carbon::createFromFormat(
                                                                                    'H',
                                                                                    $i,
                                                                                )->format('H:i');
                                                                                // Hora en formato 12 horas con AM/PM para mostrar en el texto
                                                                                $hora12 = \Carbon\Carbon::createFromFormat(
                                                                                    'H',
                                                                                    $i,
                                                                                )->format('g:i A');
                                                                                $horas[] = [
                                                                                    'valor' => $hora24,
                                                                                    'texto' => $hora12,
                                                                                ];
                                                                            }
                                                                        @endphp

                                                                        @foreach ($horas as $hora)
                                                                            <option value="{{ $hora['valor'] }}">
                                                                                {{ $hora['texto'] }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Hasta*</label>
                                                                <p>
                                                                    <select class="form-control" id="lasthour"
                                                                        name="lasthour">
                                                                        @foreach ($horas as $hora)
                                                                            <option value="{{ $hora['valor'] }}">
                                                                                {{ $hora['texto'] }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label>Descripción del sitio</label>
                                                                <p>
                                                                    <textarea name="description" id="description" class="form-control" rows="7"></textarea>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Botón para agregar más contenedores -->
                                                <div class="text-center mt-3">
                                                    <button type="button" class="btn btn-dark"
                                                        id="add-container">+</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>



                        <!-- Tab 3: Botones -->
                        <div class="tab-pane fade" id="Tabbuttons" role="tabpanel" aria-labelledby="buttons-tab">
                            <section class="page-content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="page-holder custom-page-template mt-2">
                                                <p class="alignc">Definir enlaces y botones</p>
                                            </div>

                                            <!-- Tabla de botones creados -->
                                            <div class="table-responsive mt-4" id="databuttons">
                                                <table id="tablebuttons" class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>N°</th>
                                                            <th>Idioma</th>
                                                            <th>Boton</th>
                                                            <th>Funcionalidad</th>
                                                            <th>Dirección</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="button-list">
                                                    
                                                    </tbody>
                                                </table>
                                            </div>

                                            <!-- Botón para agregar más contenedores -->
                                            <div class="text-center mt-3">
                                                <button type="button" class="btn btn-dark"
                                                    id="add-button">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                    </div> <!-- Fin de la única estructura de .tab-content -->

                    <div class="more-btn mt-3">
                        <a class="view-more Spanish">Guardar cambios</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!------------------------------------------/FORMULARIOS------------------------------------------>



    <!-- JS -->
    <script src='{{ asset('assets/js/jquery.js') }}'></script>
    <script src='{{ asset('assets/js/jquery-migrate.min.js') }}'></script>
    <script src='{{ asset('assets/css/bootstrap/js/popper.min.js') }}'></script>
    <script src='{{ asset('assets/css/bootstrap/js/bootstrap.min.js') }}'></script>
    <script src='{{ asset('assets/js/jquery.easing.min.js') }}'></script>
    <script src='{{ asset('assets/js/jquery.fitvids.js') }}'></script>
    <script src='{{ asset('assets/js/jquery.magnific-popup.min.js') }}'></script>
    <script src='{{ asset('assets/js/owl-carousel/owl.carousel.min.js') }}'></script>
    <!-- MAIN JS -->
    <script src='{{ asset('assets/js/init.js') }}'></script>
    <!-- CONTACT FORM JS -->
    <script src='{{ asset('assets/js/jquery.form.min.js') }}'></script>
    <script src='{{ asset('assets/js/contactform.js') }}'></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/module-rc-basics.js') }}"></script>

    <script>
        var url_get_sites = "{{ route('get_sites') }}";
    </script>

</body>

</html>
