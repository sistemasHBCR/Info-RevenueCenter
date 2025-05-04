<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $property->title }} - DO</title>
    <meta name="robots" content="noodp" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/u80xw4p0r3an4ddwr5v3deb3rarjokle36c4i2duyh0cvgm5/tinymce/7/tinymce.min.js"
            referrerpolicy="strict-origin-when-cross-origin"></script>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' id='dina-bootstrap-css-css' href='{{ env('BASE_URL') . 'assets/css/bootstrap/css/bootstrap.min.css' }}'
        type='text/css' media='all' />
    <!-- Font Awesome Icons CSS -->
    <link rel='stylesheet' id='dina-font-awesome-css'
        href='{{ env('BASE_URL') . 'assets/css/fontawesome/css/font-awesome.min.css' }}' type='text/css' media='all' />
    <!-- Main CSS File -->
    <link rel='stylesheet' id='dina-style-css-css' href='{{ env('BASE_URL') . 'assets/style.css' }}' type='text/css'
        media='all' />
    <!-- favicons -->
    <link rel="icon" href="{{ env('BASE_URL') . 'assets/images/1HOMES/icons/' . $property->logo }}" sizes="32x32" />
    <link rel="icon" href="{{ env('BASE_URL') . 'assets/images/1HOMES/icons/' . $property->logo }}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{ env('BASE_URL') . 'assets/images/1HOMES/icons/' . $property->logo }}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <style>
        @font-face {
            font-family: 'lineto-brown-bold';
            src: url('/qr/public/assets/fonts/1HOMES/lineto-brown-bold.ttf') format('truetype');
        }
        .lineto-brown-bold {
            font-family: 'lineto-brown-bold';
        }
        @font-face {
            font-family: 'lineto-brown-regular';
            src: url('/qr/public/assets/fonts/1HOMES/lineto-brown-regular.ttf') format('truetype');
        }
        .lineto-brown-regular {
            font-family: 'lineto-brown-regular';
        }
        @font-face {
            font-family: 'BrownLL-Medium';
            src: url('/qr/public/assets/fonts/1HOMES/BrownLL-Medium.otf') format('opentype');
        }
        .BrownLL-Medium {
            font-family: 'BrownLL-Medium';
        }

		html {
			scroll-behavior: smooth;
		}

        /* Botones */
        .more-btn {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        /* Navegación movil */
        .nav-holder-2 {
            margin-top: 0%;
        }

        /* Cabecera de las secciones */
        .header-section {
            scroll-margin-top: 120px;
        }

        /* Imagenes de las actividades */
        .homes-img {
            width: 100%; 
            height: 350px;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Contenedor de fecha dentro del Swiper */
        .date-container {
            background: rgba(237, 229, 221, 0.85);
            padding: 1vw 1.5vw;
            width: min-content;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            text-align: center;
        }

        /* Texto dentro del Contenedor de fecha */
        .date-container span {
            height: min-content;
            font-size: 18px;
        }

        /* Texto resaltado dentro del Contenedor de fecha */
        .date-container span strong {
            font-size: 20px;
        }

        /* Horario dentro del texto resaltado */
        .date-container .happH {
            white-space: nowrap;
            font-size: 12px;
        }

        /* Swiper happening */
        .swiper {
            width: 100%;
            height: 25vw;
            min-height: 250px;
        }

        /* Paginación dentro del Swiper */
        .swiper-pagination {
            width: 80% !important;
            height: 6px !important;
            margin-left: 10% !important;
            bottom: 0 !important;
            top: auto !important;
            background: rgba(188, 141, 75, 0.25);
        }

        /* Barra de progreso de la paginación */
        .swiper-pagination-progressbar-fill {
            background: #BC8D4B !important;
        }

        /* Botón izquierdo de navegación */
        .swiper-button-prev {
            color: #000000 !important;
            --swiper-navigation-size: 34px;
        }

        /* Botón derecho de navegación */
        .swiper-button-next {
            color: #000000 !important;
            --swiper-navigation-size: 34px;
        }

        /* Contenedor de información del happening */
        .show-info {
            width:80% !important;
            height:25vw;
            backdrop-filter: blur(20px);
            position: absolute;
            z-index: 3;
            align-content: center;
            margin: auto;
            min-height: 250px;
            cursor: pointer;
        }

        /* Texto dentro del Contenedor de información */
        .show-info div span {
            font-size:18px;
        }

        /* Contenedor de vista previa del Swiper */
        .home-featured-item {
            height: 25vw !important;
            min-height: 250px;
        }

        /* Contenedor dentro del Slide */
        .display-happ {
            width: 80% !important;
            margin: auto !important;
        }

        /* --- Tamaño de la vista menor o igual a 11000px --- */
        @media (max-width: 1100px) {
            .show-info {
                height:50vw;
            }

            .show-info .row span {
                font-size: 17px;
            }

            .home-featured-item {
                height: 50vw !important;
            }

            .swiper {
                height: 50vw !important;
            }
        }

        /* --- Tamaño de la vista menor o igual a 600px --- */
        @media (max-width: 600px) {
            .more-btn {
                display: flex;
                flex-wrap: wrap;
                /* Permite que los botones se muevan a la siguiente línea si es necesario */
                gap: 10px;
                /* Espacio entre los botones */
                margin-left: 50px;
            }

            .description_rc {
                font-size: 14px;
            }

            .titlerevenuecenter {
                font-size: 35px;
            }

            .section-rc2 {
                padding-top: 5%;
                padding-bottom: 5%;
                margin-left: 1%;
                margin-right: 1%;
                border-bottom: 1px solid #111111;
                scroll-margin-top: 75px;
            }

            .homes-img {
                height: 250px;
            }

            .date-container {
                padding: 3vw 4vw;
            }

            .show-info {
                height: 100vw;
            }

            .show-info .row span {
                font-size: 16px;
            }

            .swiper {
                width: 100% !important;
                height: 100vw !important;
            }

            .home-featured-item {
                height: 100vw !important;
                margin-bottom: 5% !important;
            }
        }
    </style>
</head>

<body class="body-header1">
    <!-- MOBILE MENU -->
    <div class="mask-nav-2">
        <nav class="navbar navbar-2 nav-mobile">
            <div class="nav-holder nav-holder-2">
                <ul id="menu-menu-2" class="menu-nav-2">
                    <li class="menu-item menu-item-has-children">
                        <a href="" class="BrownLL-Medium">TASTE</a>
                        <ul class="sub-menu">
                            @foreach ($revenue_centers as $rc)
                                <li class="menu-item">
                                    <a href="{{ url('1homes') }}#container_{{ $rc->id }}{{ $rc->name }}" class="BrownLL-Medium">{{ $rc->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="" class="BrownLL-Medium">DO</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#happenings-section" class="BrownLL-Medium rc-select">Happenings</a></li>
                            <li class="menu-item" style="display: none"><a href="#activities-section" class="BrownLL-Medium rc-select">Activities</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ url('1homes-wellness') }}" class="BrownLL-Medium">WELLNESS</a>
                        <ul class="sub-menu">
                            @foreach ($property->wellness as $wellness)
                                <li class="menu-item">
                                    <a href="{{ url('1homes-wellness') }}#container_well_{{ $wellness->id }}{{ $wellness->name }}" class="BrownLL-Medium" style="font-size: 15px;">{{ $wellness->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
					<li class="menu-item menu-item-has-children">
                        <a href="" class="BrownLL-Medium English">LANGUAGE</a>
                        <a href="" class="BrownLL-Medium Spanish" hidden>IDIOMA</a>
                        <ul class="sub-menu">
							@foreach($languages as $i => $language)
                                @if ($i == 0)
                                    <li name="to-{{ $language->name }}" class="menu-item change_lang current-menu-item this_change_too" value="{{ $language->id }}"><a class="BrownLL-Medium white rc-select" style="cursor: pointer; font-size: 15px;">{{ $language->name }}</a></li>
                                @else
                                    <li name="to-{{ $language->name }}" class="menu-item change_lang" value="{{ $language->id }}"><a class="BrownLL-Medium white rc-select" style="cursor: pointer; font-size: 15px;">{{ $language->name }}</a></li>
                                @endif
							@endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="rightside-nav-2">
            <ul class="right-side-contact">
                <li class="English lineto-brown-regular">A resort inspired by the natural beauty of Baja, homes from one to seven bedrooms in a modern Hacienda style bring the outdoors in, with views of Land’s End and Marina Cabo San Lucas.</li>
                <li class="Spanish lineto-brown-regular" hidden>Un resort inspirado en la belleza natural de Baja, casas de uno a siete dormitorios en un moderno estilo Hacienda que traen el aire libre al interior, con vistas a Land's End y Marina Cabo San Lucas.</li>
            </ul>
            <!-- SOCIAL ICONS -->
            <ul class="search-social search-social-2">
                <li><a class="social-instagram" href="https://www.instagram.com/1hotel.cabo/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a class="social-facebook" href="https://www.facebook.com/1hotelandhomescabo/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a class="social-youtube" href="https://www.youtube.com/channel/UCH2q5uF3_ga9bucN1OTnNpg" target="_blank"><i class="fab fa-youtube"></i></a></li>
                <li><a class="social-facebook" href="https://www.linkedin.com/company/1-hotels/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a class="social-spotify" href="https://open.spotify.com/user/qca21ppzzndotj8cfgbdmy442" target="_blank"><i class="fab fa-spotify"></i></a></li>
            </ul>
            <!-- /SOCIAL ICONS -->
        </div>
    </div>
    <!-- /MOBILE MENU -->

    <!-- HEADER -->
    <header id="header-4" class="navbar-fixed-top">
        <div class="headerWrap-4">

            <!-- LOGO -->
            <div class="logo-4 alignc"><a href="{{ url('1homes')}}"><img class="img-fluid" src="{{ env('BASE_URL') . 'assets/images/1HOMES/icons/' . $property->image }}" alt="1Homes" style="width: 120px; height: auto;"/></a></div>
            <!-- MENU -->
            <div class="nav-holder nav-holder-4">
                <ul id="menu-menu-1" class="menu-nav menu-nav-1">
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ url('1homes') }}" class="BrownLL-Medium" style="font-size: 15px;">TASTE</a>
                        <ul class="sub-menu">
                            @foreach ($revenue_centers as $rc)
                                <li class="menu-item">
                                    <a href="{{ url('1homes') }}#container_{{ $rc->id }}{{ $rc->name }}" class="BrownLL-Medium" style="font-size: 15px;">{{ $rc->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="" class="BrownLL-Medium" style="font-size: 15px;">DO</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#happenings-section" class="BrownLL-Medium" style="font-size: 15px;">HAPPENINGS</a></li>
                            <li class="menu-item" style="display: none"><a href="#activities-section" class="BrownLL-Medium" style="font-size: 15px;">ACTIVITIES</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ url('1homes-wellness') }}" class="BrownLL-Medium" style="font-size: 15px;">WELLNESS</a>
                        <ul class="sub-menu">
                            @foreach ($property->wellness as $wellness)
                                <li class="menu-item">
                                    <a href="{{ url('1homes-wellness') }}#container_{{ $wellness->id }}{{ $wellness->name }}" class="BrownLL-Medium" style="font-size: 15px;">{{ $wellness->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item"><a href="">|</a></li>
                    <li class="menu-item menu-item-has-children">
                        <a href="" class="BrownLL-Medium English" style="font-size: 15px;">Language</a>
                        <a href="" class="BrownLL-Medium Spanish" style="font-size: 15px;" hidden>IDIOMA</a>
                        <ul class="sub-menu">
                            @foreach ($languages as $i => $language)
                                @if ($i == 0)
                                    <li name="to-{{ $language->name }}" class="BrownLL-Medium menu-item change_lang current-menu-item this_change" value="{{ $language->id }}"><a class="white" style="cursor: pointer; font-size: 15px;">{{ $language->name }}</a></li>
                                @else
                                    <li name="to-{{ $language->name }}" class="BrownLL-Medium menu-item change_lang" value="{{ $language->id }}"><a class="white" style="cursor: pointer; font-size: 15px;">{{ $language->name }}</a></li>
                                @endif
                            @endforeach
                        </ul>
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
            </div>
            <div class="btn-header btn-header4">{{--<a href="#" class="view-more more-white">Book a Table</a>--}}</div>
        </div>
        <!--headerWrap-->
    </header>
    <!-- /HEADER -->

    <!-- HOME HERO IMAGE -->
    <section id="home-content-9" class="no-parallax bkg-img-100vh margin-b72" style="background-image:url('{{ env('BASE_URL') . 'assets/images/1HOMES/backgrounds/' . $property->background }}');">
        <!-- container-->
        <div class="item-content-bkg" style="background-color: rgba(0,0,0,0.15)">
            <div class="inner-desc">
                <img id="logoHeader" src="{{ env('BASE_URL') . 'assets/images/1HOMES/icons/' . $property->logo }}" class="img-fluid"
                    alt="Logo" style="width: 70px; height: auto;">
                <h1 id="propertyName" class="BrownLL-Medium post-title single-post-title">{{ $property->name }}</h1>
                <span class="lineto-brown-bold white" style="font-size: 25px">DO</span>
            </div>
        </div>
        <!-- /container-->
    </section>
    <!-- /HOME HERO IMAGE -->

    <!-- HAPPENINGS LIST -->
    <section id="happenings-section" class="margin-tb72 header-section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="alignc margin-b54">
                        <h2 class="home-title margin-b24 title-headline lineto-brown-bold">HAPPENINGS</h2>
                    </div>
                </div>
            </div>
            <!-- HAPPENING MODAL BTN -->
            <div class="row">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($property->happening as $i => $happening)
                            <div class="swiper-slide">
                                <div class="display-happ">
                                    <div id="happ_container_{{ $happening->id }}" class="show-info thenHide" style="opacity: 0">
                                        <div class="row">
                                            <span class="lineto-brown-bold white" style="width: 80%; margin:auto; font-size: 20px"><strong>{{ $happening->name }}</strong></span>
                                            <span class="lineto-brown-bold white English" style="width: 80%; margin:auto; font-size: 18px">{{ $happenings[$i]['schedule_spe_day'] != null ? $happenings[$i]['dayName'] . ', ' . $happenings[$i]['month'] . ' ' . $happenings[$i]['dayNum'] : $happenings[$i]['dayRange'] }}</span>
                                            <span class="lineto-brown-bold white Spanish" style="width: 80%; margin:auto" hidden>{{ $happenings[$i]['schedule_spe_day'] != null ? $happenings[$i]['dayName_es'] . ', ' . $happenings[$i]['month_es'] . ' ' . $happenings[$i]['dayNum'] : $happenings[$i]['dayRange_es'] }}</span>
                                            @php
                                            $rangueH_ing = "";
                                            $rangueH_esp = "";
                                            switch (true) {
                                                case $happenings[$i]['hStart'] == $happenings[$i]['hEnd'] && $happenings[$i]['hStart'] != '12:00 am' && $happenings[$i]['hEnd'] != '12:00 am':
                                                    $rangueH_ing = $happenings[$i]['hStart'];
                                                    $rangueH_esp = $happenings[$i]['hStart'];
                                                    break;
                                                
                                                case $happenings[$i]['hStart'] == '12:00 am' && $happenings[$i]['hEnd'] == '12:00 am':
                                                    $rangueH_ing = 'All Day';
                                                    $rangueH_esp = 'Todo el dia';
                                                    break;
                                                
                                                default:
                                                    $rangueH_ing = $happenings[$i]['hStart'] . ' to ' . $happenings[$i]['hEnd'];
                                                    $rangueH_esp = $happenings[$i]['hStart'] . ' a ' . $happenings[$i]['hEnd'];
                                                    break;
                                            }
                                            @endphp
                                            <span class="lineto-brown-bold white English" style="width: 80%; margin:auto">{{ $rangueH_ing }}{{ $happening->location != null ? ', in ' . $happening->location : '' }}</span>
                                            <span class="lineto-brown-bold white Spanish" style="width: 80%; margin:auto" hidden>{{ $rangueH_esp }}{{ $happening->location != null ? ', en ' . $happening->location : '' }}</span>
                                            <span class="lineto-brown-regular white English" style="width: 80%; margin:auto">{{ $happenings[$i]['description'] }}</span>
                                            <span class="lineto-brown-regular white Spanish" style="width: 80%; margin:auto" hidden>{{ $happenings[$i]['description_es'] }}</span>
                                        </div>
                                    </div>
                                    <div class="home-featured-item">
                                        <div style="z-index:2; position: absolute; backdrop-filter: blur(20px)">
                                            <div class="date-container">
                                                @if($happenings[$i]['schedule_spe_day'] != null)
                                                    <span class="lineto-brown-regular English">{{ $happenings[$i]['dayAbbr']}}</span>
                                                    <span class="lineto-brown-regular Spanish" hidden>{{ $happenings[$i]['dayAbbr_es']}}</span>
                                                    <span class="lineto-brown-bold"><strong>{{ $happenings[$i]['dayNum']}}</strong></span>
                                                    <span class="lineto-brown-regular English">{{ $happenings[$i]['month']}}</span>
                                                    <span class="lineto-brown-regular Spanish" hidden>{{ $happenings[$i]['month_es']}}</span>
                                                @elseif($happenings[$i]['schedule_day_start'] == 1 && $happenings[$i]['schedule_day_end'] == 7 || $happenings[$i]['schedule_day_start'] == $happenings[$i]['schedule_day_end'])
                                                    <span class="English lineto-brown-bold"><strong>{{ $happenings[$i]['dayRange']}}</strong></span>
                                                    <span class="Spanish lineto-brown-bold" hidden><strong>{{ $happenings[$i]['dayRange_es']}}</strong></span>
                                                @else
                                                    <span class="lineto-brown-bold English"><strong>{{ $happenings[$i]['dayStart']}}</strong></span>
                                                    <span class="lineto-brown-bold Spanish" hidden><strong>{{ $happenings[$i]['dayStart_es']}}</strong></span>
                                                    <span class="lineto-brown-bold English"><strong>to</strong></span>
                                                    <span class="lineto-brown-bold Spanish" hidden><strong>a</strong></span>
                                                    <span class="lineto-brown-bold English"><strong>{{ $happenings[$i]['dayEnd']}}</strong></span>
                                                    <span class="lineto-brown-bold Spanish" hidden><strong>{{ $happenings[$i]['dayEnd_es']}}</strong></span>
                                                @endif
                                                @if($happenings[$i]['hStart'] == $happenings[$i]['hEnd'] && $happenings[$i]['hStart'] != '12:00 am' && $happenings[$i]['hEnd'] != '12:00 am')
                                                    <span class="lineto-brown-regular happH">{{ $happenings[$i]['hStart'] }}</span>
                                                @elseif($happenings[$i]['hStart'] == '12:00 am' && $happenings[$i]['hEnd'] == '12:00 am')
                                                    <span class="lineto-brown-regular happH English">All Day</span>
                                                    <span class="lineto-brown-regular happH Spanish" hidden>Todo el dia</span>
                                                @else
                                                    <span class="lineto-brown-regular happH">{{ $happenings[$i]['hStart'] }}</span>
                                                    <span class="lineto-brown-regular happH">{{ $happenings[$i]['hEnd'] }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="home-featured-img" style="background-image:url('{{ env('BASE_URL') . 'assets/images/1HOMES/happenings/' . $happening->image }}');"> </div>
                                        <a id="{{ $happening->id }}_happening_modal" class="happening_modal" happ="{{ $happening->id }}">
                                            <div class="grid-overlay"></div>
                                            <div class="featured-item-content" style="backdrop-filter: blur(0px)">
                                                <h6 class="lineto-brown-bold white">{{ $happening->subtitle }}</h6>
                                                <h5 class="lineto-brown-bold">{{ $happening->name }}</h5>
                                                <div class="English lineto-brown-regular featured-short-desc">More...</div>
                                                <div class="Spanish lineto-brown-regular featured-short-desc" hidden>Más...</div>
                                            </div>
                                        </a>
                                    </div>	
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- /HAPPENING MODAL BTN -->
        </div>
    </section>
    <!-- /HAPPENINGS LIST -->
    
    <!-- ACTIVITIES LIST -->
    <section style="display: none" id="activities-section" class="margin-tb72 header-section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="alignc margin-b54">
                        <h2 class="home-title margin-b24 title-headline lineto-brown-bold">Activities</h2>
                    </div>
                </div>
            </div>
            @foreach ($property->activity as $activities)
                <div id="container_well_{{ $activities->id }}{{ $activities->name }}" class="row section-rc2">
                    <div class="col-md-6">
                        <div class="margin-b32">
                            <h2 class="home-title margin-b24 lineto-brown-bold titlerevenuecenter">{{ $activities->name }}</h2>
                            <p class="English lineto-brown-regular description_rc">{{ $activities->description }}</p>
                            <p class="Spanish lineto-brown-regular description_rc" hidden>{{ $activities->description_es }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-fluid margin-b24 homes-img" style="background-image: url('{{ env('BASE_URL') . 'assets/images/1HOMES/activities/' . $activities->image }}');"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- /ACTIVITIES LIST -->

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <!-- ROW -->
            <div class="row alignc" style="align-items: center">
                <!-- FOOTER COLUMN 1 -->
                <!-- FOOTER COLUMN 2 -->
                <div class="col-md-12">
                    <div class="footer-content">
                        <h5 class="BrownLL-Medium">1 Homes Cabo Preview:</h5>
                        <p class="lineto-brown-regular">Paseo de La Marina 4732, Col.
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
                <li><a class="social-instagram" href="https://www.instagram.com/1hotel.cabo/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a class="social-facebook" href="https://www.facebook.com/1hotelandhomescabo/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a class="social-youtube" href="https://www.youtube.com/channel/UCH2q5uF3_ga9bucN1OTnNpg" target="_blank"><i class="fab fa-youtube"></i></a></li>
                <li><a class="social-facebook" href="https://www.linkedin.com/company/1-hotels/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a class="social-spotify" href="https://open.spotify.com/user/qca21ppzzndotj8cfgbdmy442" target="_blank"><i class="fab fa-spotify"></i></a></li>
            </ul>
            <!-- /FOOTER SOCIAL -->
            <!-- FOOTER COPYRIGHT -->
            {{--<div class="copyright">
                Copyright &copy; 2021, Dina . Designed by MatchThemes.com
            </div>--}}
            <!-- /FOOTER COPYRIGHT -->
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

    <!-- JS -->
    <script src='{{ env('BASE_URL') . 'assets/js/jquery.js' }}'></script>
    <script src='{{ env('BASE_URL') . 'assets/js/jquery-migrate.min.js' }}'></script>
    <script src='{{ env('BASE_URL') . 'assets/css/bootstrap/js/popper.min.js' }}'></script>
    <script src='{{ env('BASE_URL') . 'assets/css/bootstrap/js/bootstrap.min.js' }}'></script>
    <script src='{{ env('BASE_URL') . 'assets/js/jquery.easing.min.js' }}'></script>
    <script src='{{ env('BASE_URL') . 'assets/js/jquery.fitvids.js' }}'></script>
    <script src='{{ env('BASE_URL') . 'assets/js/jquery.magnific-popup.min.js' }}'></script>
    <script src='{{ env('BASE_URL') . 'assets/js/owl-carousel/owl.carousel.min.js' }}'></script>
    <!-- MAIN JS -->
    <script src='{{ env('BASE_URL') . 'assets/js/init.js' }}'></script>
    <!-- CONTACT FORM JS -->
    <script src='{{ env('BASE_URL') . 'assets/js/jquery.form.min.js' }}'></script>
    <script src='{{ env('BASE_URL') . 'assets/js/contactform.js' }}'></script>
    <!-- GENERAL JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ env('BASE_URL') . 'assets/js/module-rc-basics.js' }}"></script>
    <script src="{{ env('BASE_URL') . 'assets/js/module_happ.js' }}"></script>
</body>

</html>
