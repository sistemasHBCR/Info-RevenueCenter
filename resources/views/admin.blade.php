<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $property->title }} - MENUS</title>
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

    <link rel="manifest" href="{{ env('BASE_URL') . 'manifest.json' }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ env('BASE_URL') . 'assets/images/1HOMES/icons/1HClogo.png' }}">
    <meta name="theme-color" content="#317EFB">

    <!-- Para iOS -->
    <link rel="apple-touch-icon" href="{{ env('BASE_URL') . 'assets/images/1HOMES/icons/1HClogo.png' }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

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
        
        .more-btn {
            display: flex;
            flex-wrap: wrap;
            /* Permite que los botones se muevan a la siguiente línea si es necesario */
            gap: 10px;
            /* Espacio entre los botones */
        }

        .nav-holder-2 {
            margin-top: 0%;
        }

        .section-rc {
            padding-bottom: 5%;
            scroll-margin-top: 120px;
        }

        .homes-img {
            width: 100%; 
            height: 350px;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .modal-body iframe {
            width: 100%;
            height: 100%; /* Ajusta según necesites */
            border: none;
        }

        .input_container {
            border: 1px solid #ced4da;
            border-bottom-left-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
        }

        input[type=file]::file-selector-button {
            background-color: #e9ecef;
            color: #495057;
            border: 0px;
            border-right: 1px solid #ced4da;
            padding: 10px 15px;
            margin-right: 20px;
            transition: .5s;
            border-bottom-left-radius: 0.25rem;
        }

        input[type=file]::file-selector-button:hover {
            background-color: #eeeeee;
            border: 0px;
            border-right: 1px solid #e5e5e5;
        }
        
        @media (max-width: 600px) {
            .more-btn {
                display: flex;
                flex-wrap: wrap;
                /* Permite que los botones se muevan a la siguiente línea si es necesario */
                gap: 10px;
                /* Espacio entre los botones */
                margin-left: 15px;
            }
            .description_rc {
                font-size: 14px;
            }
            .titlerevenuecenter {
                font-size: 35px;
            }
            .section-rc {
                padding-bottom: 15%;
                scroll-margin-top: 75px;
            }
            .section-rc2 {
                margin-left: 1%;
                margin-right: 1%;
                border-bottom: 1px solid #111111;
                padding-bottom: 15%;
            }
            .homes-img {
                height: 250px;
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
                            @foreach($revenue_centers as $rc)
                                <li class="menu-item">
                                    <a href="#container_{{ $rc->id }}{{ $rc->name }}" class="BrownLL-Medium rc-select">{{ $rc->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="" class="BrownLL-Medium">DO</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ url('1homes-happenings')}}#happenings-section" class="BrownLL-Medium">HAPPENINGS</a></li>
                            <li class="menu-item" style="display: none"><a href="{{ url('1homes-happenings')}}#activities-section" class="BrownLL-Medium">ACTIVITIES</a></li>
                        </ul>
                    </li>
					<li class="menu-item menu-item-has-children">
                        <a href="" class="BrownLL-Medium English">LANGUAGE</a>
                        <a href="" class="BrownLL-Medium Spanish" hidden>IDIOMA</a>
                        <ul class="sub-menu">
							@foreach($languages as $i => $language)
                                @if ($i == 0)
                                    <li name="to-{{ $language->name }}" class="BrownLL-Medium menu-item change_lang current-menu-item this_change_too" value="{{ $language->id }}"><a class="white rc-select" style="cursor: pointer; font-size: 15px;">{{ $language->name }}</a></li>
                                @else
                                    <li name="to-{{ $language->name }}" class="BrownLL-Medium menu-item change_lang" value="{{ $language->id }}"><a class="white rc-select" style="cursor: pointer; font-size: 15px;">{{ $language->name }}</a></li>
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
            <div class="logo-4 alignc"><a href="#"><img class="img-fluid" src="{{ env('BASE_URL') . 'assets/images/1HOMES/icons/' . $property->image }}" alt="1Homes" style="width: 120px; height: auto;"/></a></div>
            <!-- MENU -->
            <div class="nav-holder nav-holder-4">
                <ul id="menu-menu-1" class="menu-nav menu-nav-1">
                    <li class="menu-item menu-item-has-children">
                        <a href="" class="BrownLL-Medium" style="font-size: 15px;">TASTE</a>
                        <ul class="sub-menu">
                            @foreach($revenue_centers as $rc)
                                <li class="menu-item">
                                    <a href="#container_{{ $rc->id }}{{ $rc->name }}" class="BrownLL-Medium" style="font-size: 15px;">{{ $rc->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ url('1homes-happenings')}}" class="BrownLL-Medium" style="font-size: 15px;">DO</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ url('1homes-happenings')}}#happenings-section" class="BrownLL-Medium" style="font-size: 15px;">HAPPENINGS</a></li>
                            <li class="menu-item" style="display: none"><a href="{{ url('1homes-happenings')}}#activities-section" class="BrownLL-Medium" style="font-size: 15px;">ACTIVITIES</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="">|</a></li>
                    <li class="menu-item menu-item-has-children">
                        <a href="" class="BrownLL-Medium English" style="font-size: 15px;">LANGUAGE</a>
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
    <section id="home-content-9" class="no-parallax bkg-img-100vh margin-b72"
        style="background-image:url('{{ env('BASE_URL') . 'assets/images/1HOMES/backgrounds/' . $property->background }}');">
        <div class="item-content-bkg" style="background-color: rgba(0,0,0,0.15)">
            <div class="inner-desc">
                <img id="logoHeader" src="{{ env('BASE_URL') . 'assets/images/1HOMES/icons/' . $property->logo  }}" class="img-fluid"
                    alt="Logo" style="width: 70px; height: auto;">
                <h1 id="propertyName" class="BrownLL-Medium post-title single-post-title">{{ $property->name }}</h1>
                <span class="lineto-brown-bold white" style="font-size: 25px">TASTE</span>
            </div>
        </div>
        <!-- /container-->
    </section>
    <!-- /HOME HERO IMAGE -->
    @foreach ($revenue_centers as $i => $rc)
        <section id="container_{{ $rc->id }}{{ $rc->name }}" class="section-rc">
            <div class="container">
                <div class="row section-rc2">
                    <!-- contenedor de Imagen -->
                    <div class="col-md-6 {{ $i % 2 == 0 ? 'order-md-1' : 'order-md-2' }} mobile-margin-b24">
                        <div>
                            {{--<img class="img-fluid " src="{{ env('BASE_URL') . 'assets/images/1HOMES/revenuecenters/' . $rc->image }}" alt="{{ $rc->name }}" />--}}
                            <div class="img-fluid homes-img" style="background-image: url('{{ env('BASE_URL') . 'assets/images/1HOMES/revenuecenters/' . $rc->image }}');"></div>
                        </div>
                    </div>
                    <!-- /col-md-6 -->

                    <!-- contenedor de Texto -->
                    <div class="col-md-6 {{ $i % 2 == 0 ? 'order-md-2' : 'order-md-1' }} mobile-margin-b24">
                        <h2 id="RC_{{ $rc->id }}{{ $rc->name }}"
                            class="home-title title-headline titlerevenuecenter lineto-brown-bold">{{ $rc->name }}</h2>
                        <!--START SITE-->
                        @foreach ($sites as $site)
                            @if ($site['rc_id'] == $rc->id)
                                <h6 class="lineto-brown-bold">{{ $site['name'] }}</h6>
                                <span class="English lineto-brown-regular">{{ $site['day_range_ing'] != '' ? $site['day_range_ing'] : '' }}
                                    {{ $site['hour_range_ing'] != null ? '| ' . $site['hour_range_ing'] : '' }}</span>
                                <span class="Spanish lineto-brown-regular"
                                    hidden>{{ $site['day_range_esp'] != '' ? $site['day_range_esp'] : '' }}
                                    {{ $site['hour_range_esp'] != null ? '| ' . $site['hour_range_esp'] : '' }}</span>
                                <p class="English description_rc lineto-brown-regular" style="padding-top: 1.25%">{{ $site['description'] }}</p>
                                <p class="Spanish description_rc lineto-brown-regular" style="padding-top: 1.25%" hidden>{{ $site['description_es'] }}</p>
                            @endif
                        @endforeach
                        <!--END SITE-->
                        <!--START BUTTONS-->
                        <div class="more-btn" style="display: none">
                            @foreach ($buttons as $button)
                                @if ($button->rc_id == $rc->id)
                                    <a id="btnRC-{{ $rc->id }}_{{ $button->id }}" class="btnmenu view-more English lineto-brown-regular" href="#" data-toggle="modal" data-target="#ModalRVC">{{ $button->name }}</a>
                                    <a id="btnRC_es-{{ $rc->id }}_{{ $button->id }}" class="btnmenu view-more Spanish lineto-brown-regular"  href="{{ url('pdf/' . $button->file_es) }}" hidden>{{ $button->name_es }}</a>
                                @endif
                            @endforeach
                        </div>
                        <div class="more-btn">
                            @foreach($rc->button as $button)
                                @if($button->file != "" && $button->file_es != "")
                                    <a href="{{ url('pdf/' . $button->file) }}" class="btnmenu view-more English lineto-brown-regular">{{ $button->name}}</a>
                                    <a href="{{ url('pdf/' . $button->file_es) }}" class="btnmenu view-more Spanish lineto-brown-regular" hidden>{{ $button->name}}</a>
                                @else
                                    <a href="{{ $button->URL }}" style="color: #B25026; border-bottom: 1px solid; margin-bottom: 2vw;" class=" English lineto-brown-regular">{{ $button->name}} <i class="fas fa-arrow-right fa-sm"></i></a>
                                    <a href="{{ $button->URL }}" style="color: #B25026; border-bottom: 1px solid; margin-bottom: 2vw;" class=" Spanish lineto-brown-regular" hidden>{{ $button->name_es}} <i class="fas fa-arrow-right fa-sm"></i></a>
                                @endif
                            @endforeach
                        </div>
                        <!--END SITE-->
                    </div>
                    <!-- /col-md-6 -->
                </div>
            </div>
        </section>
    @endforeach

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
            <!-- FOOTER SCROLL UP -->
            <div class="scrollup">
                <a class="scrolltop" href="#">
                    <i class="fas fa-chevron-up"></i>
                </a>
                <a href="#" id="toModalRVC" data-toggle="modal" data-target="#ModalRVC"><i class="edit-revenuecenter fas fa-pen fa-lg" style="color: #e0b16f"></i></a>
            </div>
            <!-- /FOOTER SCROLL UP -->
        </div>
        <!--container-->
    </footer>
    <!-- /FOOTER -->

    <!-- MODAL PARA MENÚS -->
    <div id="ModalRVC" class="modal fade text-left" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document" style="max-width: 95%; height: 95%;">
            <div class="modal-content" style="height: 100%">
                <div class="modal-header">
                    <h5 class="modal-title btnmenu">EDICIÓN DE CENTROS DE CONSUMO</h5>
                    <button type="button" id="close-rvc" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                @foreach($revenue_centers as $i => $rc)
                                    <button class="nav-link lineto-brown-bold {{ $i == 0 ? 'active' : '' }}" id="v-{{ $rc->id }}-tab" data-toggle="pill" data-target="#v-{{ $rc->id }}" type="button" role="tab" aria-controls="v-{{ $rc->id }}" aria-selected="{{ $i == 0 ? 'true' : 'false' }}" style="border-style: none">{{ $rc->name }}</button>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-8" style="margin: auto; margin-top:0;">
                            <div class="tab-content" id="v-pills-tabContent">
                                @foreach($revenue_centers as $i => $rc)
                                    <div class="tab-pane fade {{ $i == 0 ? 'show active' : '' }}" id="v-{{ $rc->id }}" role="tabpanel" aria-labelledby="v-{{ $rc->id }}-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab{{ $rc->id }}" role="tablist">
                                                <button class="nav-link lineto-brown-bold active" id="nav-rc-tab-{{ $rc->id }}" data-toggle="tab" data-target="#nav-rc-{{ $rc->id }}" type="button" role="tab" aria-controls="nav-rc-{{ $rc->id }}" aria-selected="true">R.C.</button>
                                                <button class="nav-link lineto-brown-bold" id="nav-site-tab-{{ $rc->id }}" data-toggle="tab" data-target="#nav-site-{{ $rc->id }}" type="button" role="tab" aria-controls="nav-site-{{ $rc->id }}" aria-selected="false">Sitios</button>
                                                <button class="nav-link lineto-brown-bold" id="nav-more-tab-{{ $rc->id }}" data-toggle="tab" data-target="#nav-more-{{ $rc->id }}" type="button" role="tab" aria-controls="nav-more-{{ $rc->id }}" aria-selected="false">Más</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade lineto-brown-regular show active" id="nav-rc-{{ $rc->id }}" role="tabpanel" aria-labelledby="nav-rc-tab-{{ $rc->id }}">
                                                <div style="margin-top: 5%; max-width: 900px">
                                                    <span class="BrownLL-Medium">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroup-sizing-default-{{ $rc->id }}">Nombre</span>
                                                            </div>
                                                            <input id="input-name-rc-{{ $rc->id }}" type="text" class="form-control rc-input-name" aria-label="Default" aria-describedby="inputGroup-sizing-default" rc_id="{{ $rc->id }}">
                                                        </div>
                                                        <div class="img-fluid homes-img" style="background-image: url('{{ env('BASE_URL') . 'assets/images/1HOMES/revenuecenters/' . $rc->image }}');"></div>
                                                        <div class="input_container">
                                                            <input type="file" id="input-file-rc-{{ $rc->id }}">
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade lineto-brown-regular" id="nav-site-{{ $rc->id }}" role="tabpanel" aria-labelledby="nav-site-tab-{{ $rc->id }}">
                                                <div style="display: flex; flex-wrap: wrap;">
                                                    <span>Sitios</span>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade lineto-brown-regular" id="nav-more-{{ $rc->id }}" role="tabpanel" aria-labelledby="nav-more-tab-{{ $rc->id }}">
                                                <div style="display: flex; flex-wrap: wrap; flex-direction: column;">
                                                    <span>Botones</span>
                                                    <span>Links</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /MODAL PARA MENÚS -->

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ env('BASE_URL') . 'assets/js/module-rc-basics.js' }}"></script>
    <script src="{{ env('BASE_URL') . 'assets/js/module-rc-admin.js' }}"></script>
    <script>
        var url_get_rc = "{{ route('get_rc') }}";
    </script>
</body>

</html>
