<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $property->title }} - WELLNESS</title>
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
    <link rel='stylesheet' id='dina-bootstrap-css-css' href='{{ asset('assets/css/bootstrap/css/bootstrap.min.css') }}'
        type='text/css' media='all' />
    <!-- Font Awesome Icons CSS -->
    <link rel='stylesheet' id='dina-font-awesome-css'
        href='{{ asset('assets/css/fontawesome/css/font-awesome.min.css') }}' type='text/css' media='all' />
    <!-- Main CSS File -->
    <link rel='stylesheet' id='dina-style-css-css' href='{{ asset('assets/style.css') }}' type='text/css'
        media='all' />
    <!-- favicons -->
    <link rel="icon" href="{{ asset('assets/images/1HOMES/icons/' . $property->logo) }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/images/1HOMES/icons/' . $property->logo) }}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/1HOMES/icons/' . $property->logo) }}" />

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

        .section-rc2 {
            scroll-margin-top: 120px;
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
            .section-rc2 {
                padding-top: 10%;
                padding-bottom: 5%;
                margin-left: 1%;
                margin-right: 1%;
                border-bottom: 1px solid #111111;
                scroll-margin-top: 75px;
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
                                    <a href="{{ url('1homes')}}#container_{{ $rc->id }}{{ $rc->name }}" class="BrownLL-Medium">{{ $rc->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="" class="BrownLL-Medium">DO</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ url('1homes-happenings')}}#happenings-section" class="BrownLL-Medium">Happenings</a></li>
                            <li class="menu-item" style="display: none"><a href="{{ url('1homes-happenings')}}#activities-section" class="BrownLL-Medium">Activities</a></li>
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
                    <li class="menu-item menu-item-has-children" style="display: none">
                        <a href="{{ url('1homes-more') }}" class="BrownLL-Medium">MORE</a>
                        <ul class="sub-menu">
                            @foreach ($property->more as $more)
                                <li class="menu-item">
                                    <a href="{{ url('1homes-more') }}#container_more_{{ $more->id }}{{ $more->name }}" class="BrownLL-Medium" style="font-size: 15px;">{{ $more->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
					<li class="menu-item menu-item-has-children">
                        <a href="" class="BrownLL-Medium">LANGUAGE</a>
                        <ul class="sub-menu">
							@foreach($languages as $i => $language)
                                @if ($i == 0)
                                    <li name="to-{{ $language->name }}" class="BrownLL-Medium menu-item change_lang current-menu-item this_change_too" value="{{ $language->id }}"><a class="white" style="cursor: pointer; font-size: 15px;">{{ $language->name }}</a></li>
                                @else
                                    <li name="to-{{ $language->name }}" class="BrownLL-Medium menu-item change_lang" value="{{ $language->id }}"><a class="white" style="cursor: pointer; font-size: 15px;">{{ $language->name }}</a></li>
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
            <div class="logo-4 alignc"><a href="{{ url('1homes') }}"><img class="img-fluid" src="{{ env('BASE_URL') . 'assets/images/1HOMES/icons/' . $property->image }}" alt="1Homes" style="width: 120px; height: auto;"/></a></div>
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
                        <a href="{{ url('1homes-happenings')}}" class="BrownLL-Medium" style="font-size: 15px;">DO</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="{{ url('1homes-happenings')}}#happenings-section" class="BrownLL-Medium" style="font-size: 15px;">HAPPENINGS</a></li>
                            <li class="menu-item" style="display: none"><a href="{{ url('1homes-happenings')}}#activities-section" class="BrownLL-Medium" style="font-size: 15px;">ACTIVITIES</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#" class="BrownLL-Medium" style="font-size: 15px;">WELLNESS</a>
                        <ul class="sub-menu">
                            @foreach ($property->wellness as $wellness)
                                <li class="menu-item">
                                    <a href="#container_well_{{ $wellness->id }}{{ $wellness->name }}" class="BrownLL-Medium" style="font-size: 15px;">{{ $wellness->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children" style="display: none">
                        <a href="{{ url('1homes-more') }}" class="BrownLL-Medium" style="font-size: 15px;">MORE</a>
                        <ul class="sub-menu">
                            @foreach ($property->more as $more)
                                <li class="menu-item">
                                    <a href="{{ url('1homes-more') }}#container_more_{{ $more->id }}{{ $more->name }}" class="BrownLL-Medium" style="font-size: 15px;">{{ $more->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item"><a href="">|</a></li>
                    <li class="menu-item menu-item-has-children">
                        <a href="" class="BrownLL-Medium" style="font-size: 15px;">Language</a>
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
        style="background-image:url('{{ asset('assets/images/1HOMES/backgrounds/' . $property->background ) }}');">
        <div class="item-content-bkg" style="background-color: rgba(0,0,0,0.15)">
            <div class="inner-desc">
                <img id="logoHeader" src="{{ asset('assets/images/1HOMES/icons/' . $property->logo ) }}" class="img-fluid"
                    alt="Logo" style="width: 70px; height: auto;">
                <h1 id="propertyName" class="BrownLL-Medium post-title single-post-title">{{ $property->name }}</h1>
                <span class="lineto-brown-bold white" style="font-size: 25px;">WELLNESS</span>
            </div>
        </div>
        <!-- /container-->
    </section>
    <!-- /HOME HERO IMAGE -->
    <section id="home-content-2" class="margin-tb72">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="alignc margin-b54">
                        <h2 class="home-title margin-b24 title-headline lineto-brown-bold">WELLNESS</h2>
                    </div>
                </div>
            </div>
            @foreach ($property->wellness as $wellness)
                <div id="container_well_{{ $wellness->id }}{{ $wellness->name }}" class="row section-rc2">
                    <div class="col-md-6">
                        <div class="margin-b32">
                            <h2 class="home-title margin-b24 lineto-brown-bold titlerevenuecenter">{{ $wellness->name }}</h2>
                            <p class="English lineto-brown-regular description_rc">{{ $wellness->description }}</p>
                            <p class="Spanish lineto-brown-regular description_rc" hidden>{{ $wellness->description_es }}</p>
                            <div class="more-btn">
                                @foreach ($wellness->button as $button)
                                    <a id="btnRC-{{ $wellness->id }}_{{ $button->id }}" class="view-more hacienda-btn English Muli-Regular"  href="{{ url('pdf/' . $button->file) }}">{{ $button->name }}</a>
                                    <a id="btnRC_es-{{ $wellness->id }}_{{ $button->id }}" class="view-more hacienda-btn Spanish Muli-Regular"  href="{{ url('pdf/' . $button->file_es) }}" hidden>{{ $button->name_es }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-fluid margin-b24" style="width: 100%; height: 350px; background-image: url('{{ asset('assets/images/1HOMES/wellness/' . $wellness->image ) }}'); background-position: center center; background-repeat: no-repeat; background-size: cover;"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
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
    <script src='{{ asset('assets/js/jquery.js') }}'></script>
    <script src='{{ asset('assets/js/jquery-migrate.min.js') }}'></script>
    <script src='{{ asset('assets/css/bootstrap/js/popper.min.js') }}'></script>
    <script src='{{ asset('assets/css/bootstrap/js/bootstrap.min.js') }}'></script>
    <script src='{{ asset('assets/js/jquery.easing.min.js') }}'></script>
    <script src='{{ asset('assets/js/jquery.fitvids.js') }}'></script>
    <script src='{{ asset('assets/js/jquery.magnific-popup.min.js') }}'></script>
    <script src='{{ asset('assets/js/owl-carousel/owl.carousel.min.js') }}'></script>
    <!-- MAIN JS -->
    <script src='{{ 'assets/js/init.js' }}'></script>
    <!-- CONTACT FORM JS -->
    <script src='{{ asset('assets/js/jquery.form.min.js') }}'></script>
    <script src='{{ asset('assets/js/contactform.js') }}'></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/module-rc-basics.js') }}"></script>
</body>

</html>
