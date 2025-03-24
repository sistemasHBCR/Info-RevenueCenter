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
    <script src="https://cdn.tiny.cloud/1/u80xw4p0r3an4ddwr5v3deb3rarjokle36c4i2duyh0cvgm5/tinymce/7/tinymce.min.js" referrerpolicy="strict-origin-when-cross-origin"></script>
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
    <link rel="icon" href="{{ asset('assets/images/HACIENDA/icons/' . $property->logo) }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/images/HACIENDA/icons/' . $property->logo) }}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/HACIENDA/icons/' . $property->logo) }}" />

    <style>
        @font-face {
            font-family: 'Cinzel-Bold';
            src: url('/qr/public/assets/fonts/HACIENDA/Cinzel-Bold.ttf') format('truetype');
        }
        .Cinzel-Bold {
            font-family: 'Cinzel-Bold';
        }
        @font-face {
            font-family: 'Cinzel-Regular';
            src: url('/qr/public/assets/fonts/HACIENDA/Cinzel-Regular.ttf') format('truetype');
        }
        .Cinzel-Regular {
            font-family: 'Cinzel-Regular';
        }
        @font-face {
            font-family: 'Muli-Bold';
            src: url('/qr/public/assets/fonts/HACIENDA/Muli-Bold.ttf') format('truetype');
        }
        .Muli-Bold {
            font-family: 'Muli-Bold';
        }
        @font-face {
            font-family: 'Muli-Regular';
            src: url('/qr/public/assets/fonts/HACIENDA/Muli-Regular.ttf') format('truetype');
        }
        .Muli-Regular {
            font-family: 'Muli-Regular';
        }

		html {
			scroll-behavior: smooth;
		}
        .nav-hacienda {
            background: #ffffff !important;
            padding-bottom: 8px;
            position: fixed;
            top:0;
            right: 0;
            left: 0;
            z-index: 1030;
            border: none;
            border-bottom: 2px solid #672100;
        }
        .nav-hacienda a:hover {
            text-decoration: underline;
        }
        .sub-menu-hacienda {
            background-color: #fff !important;
            border: none;
            border-right: 2px solid #672100;
            border-left: 2px solid #672100;
        }
        .sub-menu-hacienda li:hover a {
            text-decoration: underline !important;
        }

        .more-btn {
            display: flex;
            flex-wrap: wrap;
            /* Permite que los botones se muevan a la siguiente línea si es necesario */
            gap: 10px;
            /* Espacio entre los botones */
        }
        .hacienda-btn {
            font-family: 'Cinzel-Regular' !important;
            background-color: #672100 !important;
            color: #FFFFFF !important;
            padding: 15px 20px !important;
            border: 1px solid #672100 !important;
            margin-bottom: 5%;
            transition: 0.2s !important;
        }
        .hacienda-btn:hover {
            background-color: #FFFFFF !important;
            color: #672100 !important;
            transition: 0.2s !important;
        }

        @media (max-width: 600px) {
            .more-btn {
                display: flex;
                flex-wrap: wrap;
                /* Permite que los botones se muevan a la siguiente línea si es necesario */
                gap: 10px;
                /* Espacio entre los botones */
                margin-left: 4%;
            }
            .description_rc {
                font-size: 14px;
            }
        }
        .nav-button {
            background-color: #6f4f37;
            border-radius: 50%;
        }
    </style>
</head>

<body class="body-header1">
    <div class="mask-nav-2">
        <nav class="navbar navbar-2 nav-mobile">
            <div class="nav-holder nav-holder-2">
                <ul id="menu-menu-2" class="menu-nav-2">
                    <li class="menu-item menu-item-has-children">
                        <a href="" class="Cinzel-Bold">TASTE</a>
                        <ul class="sub-menu">
                            @foreach ($hacienda_revenue_centers as $rc)
                                <li class="menu-item">
                                    <a href="{{ url('hacienda') }}#{{ $rc->id }}{{ $rc->name }}" class="Cinzel-Bold">{{ $rc->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="" class="Cinzel-Bold">DO</a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="" class="Cinzel-Bold">WELLNESS</a>
                        <ul class="sub-menu">
                            @foreach ($property->wellness as $wellness)
                                <li class="menu-item">
                                    <a href="#container_well_{{ $wellness->id }}{{ $wellness->name }}" class="BrownLL-Medium" style="font-size: 15px;">{{ $wellness->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="" class="Cinzel-Bold">MORE</a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="" class="Cinzel-Bold">Language</a>
                        <ul class="sub-menu">
                            @foreach ($languages as $i => $language)
                                @if ($i == 0)
                                    <li name="to-{{ $language->name }}" class="menu-item Cinzel-Bold change_lang current-menu-item this_change" value="{{ $language->id }}"><a class="white" style="cursor: pointer; font-size: 15px;">{{ $language->name }}</a></li>
                                @else
                                    <li name="to-{{ $language->name }}" class="menu-item Cinzel-Bold change_lang" value="{{ $language->id }}"><a class="white" style="cursor: pointer; font-size: 15px;">{{ $language->name }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <header id="header-4" class="navbar-fixed-top nav-hacienda">
        <div class="headerWrap-4">
            <div class="logo-4 alignc"><a href="{{ url('admin')}}"><img class="img-fluid" src="{{ asset('assets/images/HACIENDA/icons/' . $property->logo) }}" alt="{{ $property->name }}" style="width: auto; height: 70px;"/></a></div>
            <div class="nav-holder nav-holder-4">
                <ul id="menu-menu-1" class="menu-nav menu-nav-1">
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ url('hacienda') }}" class="Cinzel-Bold" style="font-size: 15px; color: #672100">TASTE</a>
                        <ul class="sub-menu sub-menu-hacienda">
                            @foreach ($hacienda_revenue_centers as $rc)
                                <li class="menu-item">
                                    <a href="{{ url('hacienda') }}#{{ $rc->id }}{{ $rc->name }}" class="Cinzel-Bold" style="cursor: pointer; font-size: 15px; color: #672100;">{{ $rc->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{ url('hacienda-activities') }}" class="Cinzel-Bold" style="font-size: 15px; color: #672100">DO</a>
                        <ul class="sub-menu sub-menu-hacienda">
                            @foreach ($property->activity as $activity)
                                <li class="menu-item">
                                    <a href="{{ url('hacienda-activities') }}#container_do_{{ $activity->id }}{{ $activity->name }}" class="Cinzel-Bold" style="cursor: pointer; font-size: 15px; color: #672100;">{{ $activity->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="" class="Cinzel-Bold" style="cursor: pointer; font-size: 15px; color: #672100">WELLNESS</a>
                        <ul class="sub-menu sub-menu-hacienda">
                            @foreach ($property->wellness as $wellness)
                                <li class="menu-item">
                                    <a href="#container_well_{{ $wellness->id }}{{ $wellness->name }}" class="Cinzel-Bold" style="cursor: pointer; font-size: 15px; color: #672100;">{{ $wellness->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="" class="Cinzel-Bold" style="font-size: 15px; color: #672100">MORE</a>
                    </li>
                    <li class="menu-item"><a href="" style="font-size: 15px; color: #672100">|</a></li>
                    <li class="menu-item menu-item-has-children">
                        <a href="" class="Cinzel-Bold" style="font-size: 15px; color: #672100;">Language</a>
                        <ul class="sub-menu sub-menu-hacienda">
                            @foreach ($languages as $i => $language)
                                @if ($i == 0)
                                    <li name="to-{{ $language->name }}" class="menu-item change_lang current-menu-item this_change" value="{{ $language->id }}"><a class="Cinzel-Bold" style="cursor: pointer; font-size: 15px; color: #672100;">{{ $language->name }}</a></li>
                                @else
                                    <li name="to-{{ $language->name }}" class="menu-item change_lang" value="{{ $language->id }}"><a class="Cinzel-Bold" style="cursor: pointer; font-size: 15px; color: #672100;">{{ $language->name }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="nav-button-holder nav-btn-mobile inactive">
                <button type="button" class="nav-button">
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="btn-header btn-header4">{{--<a href="#" class="view-more more-white">Book a Table</a>--}}</div>
        </div>
    </header>
    <section id="home-content-9" class="no-parallax bkg-img-100vh margin-b72"
        style="background-image:url('{{ asset('assets/images/HACIENDA/backgrounds/' . $property->background) }}');">
        <div class="item-content-bkg" style="background-color: rgba(0,0,0,0.3)">
            <div class="inner-desc">
                <img id="logoHeader" src="{{ asset('assets/images/HACIENDA/icons/' . $property->image ) }}" class="img-fluid"
                    alt="Logo" style="max-width: 50%">
                {{--<h1 id="propertyName" class="post-title single-post-title" style="color: #672100">{{ $property->name }}</h1>--}}
                {{--<span class="post-subtitle" style="font-size: 35px">TASTE</span>--}}
            </div>
        </div>
    </section>
    @foreach ($property->wellness as $i => $wellness)
        <section id="container_well_{{ $wellness->id }}{{ $wellness->name }}" class="home-widget parallax margin-b72" style="background-image:url('{{ asset('assets/images/HACIENDA/sections/' . $wellness->image ) }}');" >
            <div class="parallax-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="alignc">
                                <h3 class="home-subtitle" style="display: none">{{ $wellness->name }}</h3>
                                <h2 class="home-title">{{ $wellness->name }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<section class="margin-b72">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="margin-b32">
							<h2 class="home-title margin-b24 title-headline Cinzel-Bold" style="color: #672100; display: none">{{ $wellness->name }}</h2>
							<p class="English description_rc Muli-Regular" style="color: #672100">{{ $wellness->description }}</p>
							<p class="Spanish description_rc Muli-Regular" style="color: #672100" hidden>{{ $wellness->description_es }}</p>
						</div>
                        <div class="more-btn">
                            @foreach ($buttons as $button)
                                @if ($button->rc_id == $wellness->id)
                                    <a id="btnRC-{{ $wellness->id }}_{{ $button->id }}" class="view-more hacienda-btn English Muli-Regular"  href="{{ url('pdf/' . $button->file) }}">{{ $button->name }}</a>
                                    <a id="btnRC_es-{{ $wellness->id }}_{{ $button->id }}" class="view-more hacienda-btn Spanish Muli-Regular"  href="{{ url('pdf/' . $button->file_es) }}" hidden>{{ $button->name_es }}</a>
                                @endif
                            @endforeach
                        </div>
					</div>
					<div class="col-md-6">
						<img class="img-fluid margin-b24" src="{{ asset('assets/images/HACIENDA/wellness/' . $wellness->image )}}" alt="" loading="lazy" style="display: none">
                        <div style="background-image: url({{ asset('assets/images/HACIENDA/wellness/' . $wellness->image )}}); background-position:center center !important; background-size: cover; width: auto; height: 300px; margin:0% 5%;"></div>
					</div>
				</div>
			</div>
		</section>
    @endforeach
    <footer>
        <div class="container" style="border: none; border-top: 3px solid #672100;">
            <div class="row alignc" style="align-items: center">
                <div class="col-md-12">
                    <div class="footer-content">
                        <h5 class="Muli-Bold" style="color: #672100">Hacienda Beach Club & Residences</h5>
                        <p class="Muli-Regular" style="color: #672100">Paseo de La Marina 4732, Col.
                            El Médano 
							23453 Cabo San Lucas, B.C.S.
							Mexico 
                        </p>
                    </div>
                </div>
            </div>
            <ul class="footer-social">
                <li><a class="social-instagram" href="https://www.instagram.com/haciendacabo/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a class="social-facebook" href="https://www.facebook.com/haciendacabo/?ref=br_rs" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a class="social-twitter" href="https://twitter.com/haciendacabo" target="_blank"><i class="fab fa-twitter"></i></a></li>
            </ul>
            {{--<div class="copyright">
                Copyright &copy; 2021, Dina . Designed by MatchThemes.com
            </div>--}}
            <div class="scrollup">
                <a class="scrolltop" href="#">
                    <i class="fas fa-chevron-up"></i>
                </a>
            </div>
        </div>
    </footer>
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
