<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $properties->title }} - MENUS</title>
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
    <link rel="icon" href="{{ asset('assets/images/1HOMES/icons/' . $properties->logo) }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/images/1HOMES/icons/' . $properties->logo) }}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/1HOMES/icons/' . $properties->logo) }}" />

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
                margin-left: 1%;
                margin-right: 1%;
                border-bottom: 1px solid #111111;
            }
        }
    </style>
</head>

<body class="body-header1">
    <!-- MOBILE MENU -->
    <div class="mask-nav-2">
        <!-- MENU -->
        <nav class="navbar navbar-2 nav-mobile">
            <div class="nav-holder nav-holder-2">
                {{-- <ul id="menu-menu-2" class="menu-nav-2">
                    <li class="menu-item menu-item-has-children">
                        <a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="index.html">Home 1</a></li>
                            <li class="menu-item"><a href="homepage-2.html">Home 2</a></li>
                            <li class="menu-item"><a href="homepage-3.html">Home 3</a></li>
                            <li class="menu-item"><a href="homepage-4.html">Home 4</a></li>
                            <li class="menu-item"><a href="homepage-5.html">Home 5</a></li>
                            <li class="menu-item"><a href="homepage-6.html">Home 6</a></li>
                            <li class="menu-item"><a href="homepage-7.html">Home 7</a></li>
                            <li class="menu-item"><a href="homepage-8.html">Home 8</a></li>
                            <li class="menu-item"><a href="homepage-9.html">Home 9</a></li>
                            <li class="menu-item"><a href="homepage-10.html">Home 10</a></li>
                            <li class="menu-item"><a href="homepage-video.html">Home Video</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="menu-2-col.html">Menu</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="menu-1-col.html">Menu 1 Col</a></li>
                            <li class="menu-item"><a href="menu-2-col.html">Menu 2 Cols</a></li>
                            <li class="menu-item"><a href="menu-3-col.html">Menu 3 Cols</a></li>
                            <li class="menu-item"><a href="menu-accordion.html">Menu Accordion</a></li>
                            <li class="menu-item"><a href="menu-grid-v2.html">Menu Grid v2</a></li>
                            <li class="menu-item menu-item-has-children">
                                <a href="menu-grid-v3.html">Menu Grid v3</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="menu-grid-v3-2cols.html">Menu Grid v3 2 Cols</a></li>
                                    <li class="menu-item"><a href="menu-grid-v3.html">Menu Grid v3 3 Cols</a></li>
                                    <li class="menu-item"><a href="menu-grid-v3-4cols.html">Menu Grid v3 4 Cols</a></li>
                                    <li class="menu-item"><a href="menu-grid-v3-5cols.html">Menu Grid v3 5 Cols</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="menu-grid-image.html">Menu Grid Images</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children current-menu-item">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-has-children current-menu-item">
                                <a href="index.html">Headers</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="index.html">Header 1</a></li>
                                    <li class="menu-item"><a href="header-2.html">Header 2</a></li>
                                    <li class="menu-item"><a href="header-3.html">Header 3</a></li>
                                    <li class="menu-item"><a href="header-4.html">Header 4</a></li>
                                    <li class="menu-item"><a href="header-5.html">Header 5</a></li>
                                    <li class="menu-item"><a href="header-6.html">Header 6</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="about-us.html">About Us</a></li>
                            <li class="menu-item"><a href="about-me.html">About Me</a></li>
                            <li class="menu-item menu-item-has-children">
                                <a href="team.html">Team</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="team-2-cols.html">Team 2 Cols</a></li>
                                    <li class="menu-item"><a href="team-3-cols.html">Team 3 Cols</a></li>
                                    <li class="menu-item"><a href="team.html">Team 4 Cols</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="services.html">Services</a></li>
                            <li class="menu-item"><a href="faq.html">FAQ</a></li>
                            <li class="menu-item"><a href="404-error.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="reservation.html">Reservation</a></li>
                    <li class="menu-item menu-item-has-children">
                        <a href="gallery-3-cols.html">Gallery</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="gallery-3-cols.html">Gallery 3 Cols</a></li>
                            <li class="menu-item"><a href="gallery-4-cols.html">Gallery 4 Cols</a></li>
                            <li class="menu-item"><a href="gallery-full-screen-3-cols.html">Gallery Full Screen 3
                                    Cols</a></li>
                            <li class="menu-item"><a href="gallery-full-screen-4-cols.html">Gallery Full Screen 4
                                    Cols</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="blog.html">Blog</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="blog-single-post.html">Blog Single Post</a></li>
                            <li class="menu-item"><a href="blog.html">Blog List</a></li>
                            <li class="menu-item"><a href="blog-classic.html">Blog Classic</a></li>
                            <li class="menu-item"><a href="blog-grid.html">Blog Grid</a></li>
                            <li class="menu-item"><a href="blog-grid-3-cols.html">Blog Grid 3 Cols</a></li>
                            <li class="menu-item"><a href="blog-fullwidth.html">Blog FullWidth</a></li>
                            <li class="menu-item"><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="contact.html">Contact</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="contact.html">Contact</a></li>
                            <li class="menu-item"><a href="contact-2.html">Contact 2</a></li>
                            <li class="menu-item"><a href="contact-3.html">Contact 3</a></li>
                        </ul>
                    </li>
                </ul> --}}
                <ul id="menu-menu-2" class="menu-nav-2">
                    {{--<li class="menu-item menu-item-has-children">
                        <a href="">Inicio</a>
                        <ul class="sub-menu">
                            <li class="menu-item current-menu-item"><a href="{{ url('/') }}" class="white" style="cursor: pointer">Revenue Centers</a></li>
                            <li class="menu-item"><a href="{{ url('spa') }}" class="white" style="cursor: pointer">SPA</a></li>
                        </ul>
                    </li>--}}
                    @foreach ($revenue_centers as $rc)
                        <li class="menu-item">
                            <a href="#container_{{ $rc->id }}{{ $rc->name }}" class="BrownLL-Medium">{{ $rc->name }}</a>
                        </li>
                    @endforeach
					<li class="menu-item menu-item-has-children">
                        <a href="" class="BrownLL-Medium">Language</a>
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
        <!-- /MENU -->
        {{--<div class="rightside-nav-2">
            <ul class="right-side-contact">
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
            </ul>
        </div>--}}
        <!-- RIGHT SIDE -->
        {{-- <div class="rightside-nav-2">

            <h3>Book Now</h3>
            <ul class="right-side-contact">
                <li><label>Address:</label> 40 Park Ave, Brooklyn, New York 70250</li>
                <li><label>Phone:</label> 000-111-2222</li>
                <li><label>Email:</label> contact@dina.com </li>
            </ul>

            <!-- SOCIAL ICONS -->
            <ul class="search-social search-social-2">
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
            <!-- /SOCIAL ICONS -->
        </div> --}}
        <!-- /RIGHT SIDE -->
    </div>
    <!-- /MOBILE MENU -->
    <!-- HEADER -->
    <header id="header-4" class="navbar-fixed-top">
        <div class="headerWrap-4">

            <!-- LOGO -->
            <div class="logo-4 alignc"><a href="{{ url('admin')}}"><img class="img-fluid" src="{{ asset('assets/images/1HOMES/icons/' . $properties->image) }}" alt="1Homes" style="width: 120px; height: auto;"/></a></div>
            <!-- MENU -->
            <div class="nav-holder nav-holder-4">
                {{-- <ul id="menu-menu-1" class="menu-nav menu-nav-1">
                    <li class="menu-item menu-item-has-children">
                        <a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="index.html">Home 1</a></li>
                            <li class="menu-item"><a href="homepage-2.html">Home 2</a></li>
                            <li class="menu-item"><a href="homepage-3.html">Home 3</a></li>
                            <li class="menu-item"><a href="homepage-4.html">Home 4</a></li>
                            <li class="menu-item"><a href="homepage-5.html">Home 5</a></li>
                            <li class="menu-item"><a href="homepage-6.html">Home 6</a></li>
                            <li class="menu-item"><a href="homepage-7.html">Home 7</a></li>
                            <li class="menu-item"><a href="homepage-8.html">Home 8</a></li>
                            <li class="menu-item"><a href="homepage-9.html">Home 9</a></li>
                            <li class="menu-item"><a href="homepage-10.html">Home 10</a></li>
                            <li class="menu-item"><a href="homepage-video.html">Home Video</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="menu-2-col.html">Menu</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="menu-1-col.html">Menu 1 Col</a></li>
                            <li class="menu-item"><a href="menu-2-col.html">Menu 2 Cols</a></li>
                            <li class="menu-item"><a href="menu-3-col.html">Menu 3 Cols</a></li>
                            <li class="menu-item"><a href="menu-accordion.html">Menu Accordion</a></li>
                            <li class="menu-item"><a href="menu-grid-v2.html">Menu Grid v2</a></li>
                            <li class="menu-item menu-item-has-children">
                                <a href="menu-grid-v3.html">Menu Grid v3</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="menu-grid-v3-2cols.html">Menu Grid v3 2 Cols</a>
                                    </li>
                                    <li class="menu-item"><a href="menu-grid-v3.html">Menu Grid v3 3 Cols</a></li>
                                    <li class="menu-item"><a href="menu-grid-v3-4cols.html">Menu Grid v3 4 Cols</a>
                                    </li>
                                    <li class="menu-item"><a href="menu-grid-v3-5cols.html">Menu Grid v3 5 Cols</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="menu-grid-image.html">Menu Grid Images</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children current-menu-item">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-has-children current-menu-item">
                                <a href="index.html">Headers</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="index.html">Header 1</a></li>
                                    <li class="menu-item"><a href="header-2.html">Header 2</a></li>
                                    <li class="menu-item"><a href="header-3.html">Header 3</a></li>
                                    <li class="menu-item"><a href="header-4.html">Header 4</a></li>
                                    <li class="menu-item"><a href="header-5.html">Header 5</a></li>
                                    <li class="menu-item"><a href="header-6.html">Header 6</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="about-us.html">About Us</a></li>
                            <li class="menu-item"><a href="about-me.html">About Me</a></li>
                            <li class="menu-item menu-item-has-children">
                                <a href="team.html">Team</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="team-2-cols.html">Team 2 Cols</a></li>
                                    <li class="menu-item"><a href="team-3-cols.html">Team 3 Cols</a></li>
                                    <li class="menu-item"><a href="team.html">Team 4 Cols</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="services.html">Services</a></li>
                            <li class="menu-item"><a href="faq.html">FAQ</a></li>
                            <li class="menu-item"><a href="404-error.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="reservation.html">Reservation</a></li>
                    <li class="menu-item menu-item-has-children">
                        <a href="gallery-3-cols.html">Gallery</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="gallery-3-cols.html">Gallery 3 Cols</a></li>
                            <li class="menu-item"><a href="gallery-4-cols.html">Gallery 4 Cols</a></li>
                            <li class="menu-item"><a href="gallery-full-screen-3-cols.html">Gallery Full Screen 3
                                    Cols</a></li>
                            <li class="menu-item"><a href="gallery-full-screen-4-cols.html">Gallery Full Screen 4
                                    Cols</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="blog.html">Blog</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="blog-single-post.html">Blog Single Post</a></li>
                            <li class="menu-item"><a href="blog.html">Blog List</a></li>
                            <li class="menu-item"><a href="blog-classic.html">Blog Classic</a></li>
                            <li class="menu-item"><a href="blog-grid.html">Blog Grid</a></li>
                            <li class="menu-item"><a href="blog-grid-3-cols.html">Blog Grid 3 Cols</a></li>
                            <li class="menu-item"><a href="blog-fullwidth.html">Blog FullWidth</a></li>
                            <li class="menu-item"><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="contact.html">Contact</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="contact.html">Contact</a></li>
                            <li class="menu-item"><a href="contact-2.html">Contact 2</a></li>
                            <li class="menu-item"><a href="contact-3.html">Contact 3</a></li>
                        </ul>
                    </li>
                </ul> --}}
                <ul id="menu-menu-1" class="menu-nav menu-nav-1">
                    {{--<li class="menu-item menu-item-has-children">
                        <a href="" style="font-size: 15px;">Inicio</a>
                        <ul class="sub-menu">
                            <li class="menu-item current-menu-item"><a href="{{ url('/') }}" class="white" style="cursor: pointer">Revenue Centers</a></li>
                            <li class="menu-item"><a href="{{ url('spa') }}" class="white" style="cursor: pointer">SPA</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="">|</a></li>--}}
                    @foreach ($revenue_centers as $rc)
                        <li class="menu-item">
                            <a href="#container_{{ $rc->id }}{{ $rc->name }}" class="BrownLL-Medium" style="font-size: 15px;">{{ $rc->name }}</a>
                        </li>
                    @endforeach
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
        style="background-image:url('{{ asset('assets/images/1HOMES/backgrounds/' . $properties->background) }}');">
        <div class="item-content-bkg" style="background-color: rgba(0,0,0,0.15)">
            <div class="inner-desc">
                <img id="logoHeader" src="{{ asset('assets/images/1HOMES/icons/' . $properties->logo ) }}" class="img-fluid"
                    alt="Logo" style="width: 70px; height: auto;">
                <h1 id="propertyName" class="BrownLL-Medium post-title single-post-title">{{ $properties->name }}</h1>
                {{--<span class="post-subtitle" style="font-size: 35px">TASTE</span>--}}
            </div>
        </div>
        <!-- /container-->
    </section>
    @if (!$happenings)
        <section id="home-content-1" class="margin-tb72">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="alignc margin-b54">
                            <h3 class="home-subtitle English">For Limited Time</h3>
                            <h3 class="home-subtitle Spanish" hidden>Por Tiempo Limitado</h3>
                            <h2 class="home-title margin-b24 title-headline English">SPECIAL EVENTS</h2>
                            <h2 class="home-title margin-b24 title-headline Spanish" hidden>EVENTOS ESPECIALES</h2>
                            <p class="English">We invite you to check some of our special activities, some of them are for limited time, so hutty up.</p>
                            <p class="Spanish" hidden>Te invitamos a revisar una de nuestras actividades especiales, algunas de ellas por tiempo limitado, aprovecha mientras puedas.</p>
                        </div>
                    </div>
                    <!-- /col-md-10 -->
                </div>
                <!-- /row-->
                <div class="row">
                    @foreach($happenings as $happening)
                        <div class="col-md-3 mobile-margin-b54">
                            <div class="service">
                                <img class="img-fluid" src="images/gallery/gallery-2.jpg" loading="lazy" alt="service 1">
                                <h3>{{ $happening->name}}</h3>
                                <p class="English">{{ $happening->description }}</p>
                                <p class="Spanish" hidden>{{ $happening->description_es }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- /row-->
            </div>
            <!-- /container-->
        </section>
    @endif
    <!-- /HOME HERO IMAGE -->
    @foreach ($revenue_centers as $i => $rc)
        <section id="container_{{ $rc->id }}{{ $rc->name }}" class="section-rc" style="padding-top: 95px;">
            <div class="container">
                <div class="row section-rc2" style="padding-bottom: 72px;">
                    <!-- contenedor de Imagen -->
                    <div class="col-md-6 {{ $i % 2 == 0 ? 'order-md-1' : 'order-md-2' }} mobile-margin-b54">
                        <div class="margin-r54">
                            <img class="img-fluid" src="{{ asset('assets/images/1HOMES/revenuecenters/' . $rc->image) }}"
                                alt="{{ $rc->name }}" />
                        </div>
                    </div>
                    <!-- /col-md-6 -->

                    <!-- contenedor de Texto -->
                    <div class="col-md-6 {{ $i % 2 == 0 ? 'order-md-2' : 'order-md-1' }}">
                        <h2 id="RC_{{ $rc->id }}{{ $rc->name }}"
                            class="home-title margin-b24 title-headline titlerevenuecenter lineto-brown-bold">{{ $rc->name }}</h2>
                        <!--START SITE-->
                        @foreach ($sites as $site)
                            @if ($site['rc_id'] == $rc->id)
                                <h6 class="lineto-brown-bold">{{ $site['name'] }}</h6>
                                <span class="English lineto-brown-regular">{{ $site['day_range_ing'] != '' ? $site['day_range_ing'] : '' }}
                                    {{ $site['hour_start_alt'] != '' ? '| ' . $site['hour_start_alt'] . ' - ' . $site['hour_end_alt'] : '' }}</span>
                                <span class="Spanish lineto-brown-regular"
                                    hidden>{{ $site['day_range_esp'] != '' ? $site['day_range_esp'] : '' }}
                                    {{ $site['hour_start_alt'] != '' ? '| ' . $site['hour_start_alt'] . ' - ' . $site['hour_end_alt'] : '' }}</span>
                                <p class="English description_rc lineto-brown-regular" style="padding-top: 1.25%">{{ $site['description'] }}</p>
                                <p class="Spanish description_rc lineto-brown-regular" style="padding-top: 1.25%" hidden>{{ $site['description_es'] }}</p>
                            @endif
                        @endforeach
                        <!--START SITE-->
                        <!--START BUTTONS-->
                        <div class="more-btn">
                            @foreach ($buttons as $button)
                                @if ($button->rc_id == $rc->id)
                                    <a id="btnRC-{{ $rc->id }}_{{ $button->id }}" class="view-more English lineto-brown-regular"  href="{{ url('pdf/' . $button->file) }}">{{ $button->name }}</a>
                                    <a id="btnRC_es-{{ $rc->id }}_{{ $button->id }}" class="view-more Spanish lineto-brown-regular"  href="{{ url('pdf/' . $button->file_es) }}" hidden>{{ $button->name_es }}</a>
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
    <!-- SECTION 1 -->
    {{-- <section id="home-content-9-1" class="home-section margin-b72">
			<div class="container">
				<div class="row margin-b72">
					<div class="col-md-6 mobile-margin-b54">
						<div class="margin-r54">
							<img class="img-fluid" src="{{ asset('assets/images/home/home-9-3.jpg')}}" alt="home 9" />
						</div>
					</div>
					<!-- /col-md-6 -->
					<div class="col-md-6">
						<h3 class="home-subtitle">Experience</h3>
						<h2 class="home-title margin-b24 title-headline">Culinary Art</h2>
						<p>Vestibulum eleifend gravida neque a bibendum. Vivamus viverra velit non cursus elementum. Donec sit amet posuere ipsum. Mauris rutrum sagittis sapien text link. In vitae ipsum eleifend, auctor turpis in, vestibulum dui. Ut vestibulum, lorem id eleifend mollis, urna augue imperdiet ante, vitae aliquam turpis mauris eget nisi.</p>
						<a href="#" class="view-more margin-t36">Find More</a>
					</div>
					<!-- /col-md-6 -->
				</div>
				<!-- /row-->
				<div class="row">
					<div class="col-md-6 alignr order2">
						<h3 class="home-subtitle">Discover</h3>
						<h2 class="home-title margin-b24 title-headline">Delicious food</h2>
						<p>Vestibulum eleifend gravida neque a bibendum. Vivamus viverra velit non cursus elementum. Donec sit amet posuere ipsum. Mauris rutrum sagittis sapien text link. In vitae ipsum eleifend, auctor turpis in, vestibulum dui. Ut vestibulum, lorem id eleifend mollis, urna augue imperdiet ante, vitae aliquam turpis mauris eget nisi.</p>
						<a href="#" class="view-more margin-t36">Find More</a>
					</div>
					<!-- /col-md-6 -->
					<div class="col-md-6 mobile-margin-b54 order1">
						<div class="margin-l54">
							<img class="img-fluid" src="{{ asset('assets/images/home/home-9-2.jpg')}}" alt="home 9" />
						</div>
					</div>
					<!-- /col-md-6 -->
				</div>
				<!-- /row-->
			</div>
			<!-- /container-->
	</section> --}}
    <!-- /SECTION 1 -->
    <!-- SECTION 2 -->
    <!-- Add parallax class to a section and a background image to create the parallax effect -->
    {{-- <section id="home-content-9-2" class="home-section parallax margin-b72"
        style="background-image:url('{{ asset('assets/images/home/about-4.jpg') }}');">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6 mobile-margin-b24">
                        <div class="img-center alignc">
                            <img class="img-fluid margin-b16" src="{{ asset('assets/images/home/icon-91.png') }}"
                                alt="taste-food" />
                            <h5 class="white">LOCAL <br> INGREDIENTS</h5>
                        </div>
                    </div>
                    <!-- /col-lg-3 -->
                    <div class="col-lg-3 col-6 mobile-margin-b24">
                        <div class="img-center alignc">
                            <img class="img-fluid margin-b16" src="{{ asset('assets/images/home/icon-92.png') }}"
                                alt="taste-food" />
                            <h5 class="white">HAUTE <br> CUISINE</h5>
                        </div>
                    </div>
                    <!-- /col-lg-3 -->
                    <div class="col-lg-3 col-6">
                        <div class="img-center alignc">
                            <img class="img-fluid margin-b16" src="{{ asset('assets/images/home/icon-93.png') }}"
                                alt="taste-food" />
                            <h5 class="white">GREATEST <br> CHEFS</h5>
                        </div>
                    </div>
                    <!-- /col-lg-3 -->
                    <div class="col-lg-3 col-6">
                        <div class="img-center alignc">
                            <img class="img-fluid margin-b16" src="{{ asset('assets/images/home/icon-94.png') }}"
                                alt="taste-food" />
                            <h5 class="white">HAPPY <br> CLIENTS</h5>
                        </div>
                    </div>
                    <!-- /col-lg-3 -->
                </div>
                <!--.row-->
            </div>
            <!--.container-->
        </div>
        <!-- /parallax-content -->
    </section> --}}
    <!-- /SECTION 2 -->
    <!-- SECTION 3 -->
    {{-- <section id="home-content-9-3" class="margin-b72">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="alignc margin-b54">
                        <h3 class="home-subtitle">Discover</h3>
                        <h2 class="home-title margin-b24 title-headline">Our Menu</h2>
                        <p>Explore texture, color and of course the ultimate tastes with our menu of the season. All the
                            ingredients are fresh and carefully selected by our chefs. Enjoy an extraordinary dinning
                            experience.</p>
                    </div>
                </div>
                <!-- /col-md-10 -->
            </div>
            <!-- /row-->
            <div class="row">
                <div class="col-md-12">
                    <!-- STARTERS -->
                    <div class="categ-name">
                        <h2>Starters</h2>
                    </div>
                    <div class="menu-holder menu-2col">
                        <div class="menu-post clearfix ">
                            <div class="menu-post-img"><a
                                    href="{{ asset('assets/images/menu/double-tomato-bruschetta.jpg') }}"
                                    class="lightbox" title="Tomato Bruschetta"><img width="400" height="400"
                                        src="images/menu/double-tomato-bruschetta.jpg" class="" alt=""
                                        title="" /> </a> </div>
                            <div class="menu-post-desc">
                                <h4><span class="menu-title">Tomato Bruschetta</span> <span
                                        class="menu-dots"></span><span class="menu-price">$4.00</span></h4>
                                <div class="menu-text"> Tomatoes / Olive Oil / Cheese </div>
                            </div>
                        </div>
                        <div class="menu-post clearfix  last">
                            <div class="menu-post-img"><a
                                    href="{{ asset('assets/images/menu/marinated-grilled-shrimp.jpg') }}"
                                    class="lightbox" title="Marinated Grilled Shrimp"><img width="400"
                                        height="400" src="images/menu/marinated-grilled-shrimp.jpg" class=""
                                        alt="" title="" /> </a> </div>
                            <div class="menu-post-desc">
                                <h4><span class="menu-title">Marinated Grilled Shrimp</span> <span
                                        class="menu-dots"></span><span class="menu-price">$7.00</span></h4>
                                <div class="menu-text"> Fresh Shrimp / Oive Oil / Tomato Sauce </div>
                            </div>
                        </div>
                        <div class="menu-post clearfix">
                            <div class="menu-post-img"><a href="{{ asset('assets/images/menu/avocado-tomato.jpg') }}"
                                    class="lightbox" title="Avocado &#038; Mango Salsa"><img width="400"
                                        height="400" src="images/menu/avocado-tomato.jpg" class=""
                                        alt="" title="" /> </a> </div>
                            <div class="menu-post-desc">
                                <h4><span class="menu-title">Avocado &#038; Mango Salsa</span> <span
                                        class="menu-dots"></span><span class="menu-price">$5.00</span></h4>
                                <div class="menu-text"> Avocado / Mango / Tomatoes </div>
                            </div>
                        </div>
                        <div class="menu-post clearfix last">
                            <div class="menu-post-img"><a
                                    href="{{ asset('assets/images/menu/baked-potato-skins.jpg') }}" class="lightbox"
                                    title="Baked Potato Skins"><img width="400" height="400"
                                        src="images/menu/baked-potato-skins.jpg" class="" alt=""
                                        title="" /> </a> </div>
                            <div class="menu-post-desc">
                                <h4><span class="menu-title">Baked Potato Skins</span> <span
                                        class="menu-dots"></span><span class="menu-price">$9.00</span></h4>
                                <div class="menu-text"> Potatoes / Oil / Garlic </div>
                            </div>
                        </div>
                    </div>
                    <!--menu-2-col-->
                    <!-- /STARTERS -->
                    <!-- MAIN COURSES -->
                    <div class="categ-name">
                        <h2>Main Courses</h2>
                    </div>
                    <div class="menu-holder menu-2col">
                        <div class="menu-post clearfix">
                            <div class="menu-post-img"><a href="{{ asset('assets/images/menu/pork-chops.jpg') }}"
                                    class="lightbox" title="Braised Pork Chops"><img width="400" height="400"
                                        src="images/menu/pork-chops.jpg" class="" alt=""
                                        title="" /> </a> </div>
                            <div class="menu-post-desc">
                                <h4><span class="menu-title">Braised Pork Chops</span> <span
                                        class="menu-dots"></span><span class="menu-price">$21.00</span></h4>
                                <div class="menu-text"> 4 bone-in pork chops, olive oil, garlic, onion </div>
                            </div>
                        </div>
                        <div class="menu-post clearfix last">
                            <div class="menu-post-img"><a
                                    href="{{ asset('assets/images/menu/prime-rib-primer.jpg') }}" class="lightbox"
                                    title="Prime Rib"><img width="400" height="400"
                                        src="images/menu/prime-rib-primer.jpg" class="" alt=""
                                        title="" /> </a> </div>
                            <div class="menu-post-desc">
                                <h4><span class="menu-title">Prime Rib</span> <span class="menu-dots"></span><span
                                        class="menu-price">$20.00</span></h4>
                                <div class="menu-text"> Rib, rosemary, black pepper, red wine </div>
                            </div>
                        </div>
                        <div class="menu-post clearfix">
                            <div class="menu-post-img"><a
                                    href="{{ asset('assets/images/menu/coconut-curry-fried-chicken.jpg') }}"
                                    class="lightbox" title="Coconut Fried Chicken"><img width="400"
                                        height="400" src="images/menu/coconut-curry-fried-chicken.jpg"
                                        class="" alt="" title="" /> </a> </div>
                            <div class="menu-post-desc">
                                <h4><span class="menu-title">Coconut Fried Chicken</span> <span
                                        class="menu-dots"></span><span class="menu-price">$19.00</span></h4>
                                <div class="menu-text"> 8 chicken pieces, coconut milk, oil </div>
                            </div>
                        </div>
                        <div class="menu-post clearfix last">
                            <div class="menu-post-img"><a
                                    href="{{ asset('assets/images/menu/sriracha-beef-skewers.jpg') }}"
                                    class="lightbox" title="Sriracha Beef Skewers"><img width="400"
                                        height="400" src="images/menu/sriracha-beef-skewers.jpg" class=""
                                        alt="" title="" /> </a> </div>
                            <div class="menu-post-desc">
                                <h4><span class="menu-title">Sriracha Beef Skewers</span> <span
                                        class="menu-dots"></span><span class="menu-price">$12.00</span></h4>
                                <div class="menu-text"> Beef, garlic, sesame oil, vinegar </div>
                            </div>
                        </div>
                        <div class="menu-post clearfix ">
                            <div class="menu-post-img"><a href="{{ asset('assets/images/menu/roast-chicken.jpg') }}"
                                    class="lightbox" title="Chicken with Garlic &#038; Tomatoes"><img width="400"
                                        height="400" src="images/menu/roast-chicken.jpg" class=""
                                        alt="" title="" /> </a> </div>
                            <div class="menu-post-desc">
                                <h4><span class="menu-title">Chicken with Garlic &#038; Tomatoes</span> <span
                                        class="menu-dots"></span><span class="menu-price">$12.00</span></h4>
                                <div class="menu-text"> Chicken, cherry tomatoes, olive oil, dry white wine </div>
                            </div>
                        </div>
                    </div>
                    <!--menu-2-col-->
                    <!-- /MAIN COURSES -->
                    <!-- SOUPS -->
                    <div class="categ-name">
                        <h2>Soups</h2>
                    </div>
                    <div class="menu-holder menu-2col">
                        <div class="menu-post clearfix">
                            <div class="menu-post-img"><a
                                    href="{{ asset('assets/images/menu/terrific-turkey-chili.jpg') }}"
                                    class="lightbox" title="Terrific Turkey Chili"><img width="400"
                                        height="400" src="images/menu/terrific-turkey-chili.jpg" class=""
                                        alt="" title="" /> </a> </div>
                            <div class="menu-post-desc">
                                <h4><span class="menu-title">Terrific Turkey Chili</span> <span
                                        class="menu-dots"></span><span class="menu-price">$8.00</span></h4>
                                <div class="menu-text"> Turkey, oregano, tomato paste, peppers </div>
                            </div>
                        </div>
                        <div class="menu-post clearfix  last ">
                            <div class="menu-post-img"><a
                                    href="{{ asset('assets/images/menu/italian-sausage-tortellini-soup.jpg') }}"
                                    class="lightbox" title="Italian Sausage Tortellini"><img width="400"
                                        height="400" src="images/menu/italian-sausage-tortellini-soup.jpg"
                                        class="" alt="" title="" /> </a> </div>
                            <div class="menu-post-desc">
                                <h4><span class="menu-title">Italian Sausage Tortellini</span> <span
                                        class="menu-dots"></span><span class="menu-price">$9.00</span></h4>
                                <div class="menu-text"> Cheese tortellini, sausage, garlic, carrots, zucchini </div>
                            </div>
                        </div>
                        <div class="menu-post clearfix ">
                            <div class="menu-post-img"><a
                                    href="{{ asset('assets/images/menu/cream-asparagus-soup.jpg') }}"
                                    class="lightbox" title="Cream of Asparagus Soup"><img width="400"
                                        height="400" src="images/menu/cream-asparagus-soup.jpg" class=""
                                        alt="" title="" /> </a> </div>
                            <div class="menu-post-desc">
                                <h4><span class="menu-title">Cream of Asparagus Soup</span> <span
                                        class="menu-dots"></span><span class="menu-price">$10.00</span></h4>
                                <div class="menu-text"> Asparagus, potato, celery, onion, pepper </div>
                            </div>
                        </div>
                        <div class="menu-post clearfix last">
                            <div class="menu-post-img"><a
                                    href="{{ asset('assets/images/menu/italian-sausage-soup.jpg') }}"
                                    class="lightbox" title="Italian Sausage Soup"><img width="400" height="400"
                                        src="images/menu/italian-sausage-soup.jpg" class="" alt=""
                                        title="" /> </a> </div>
                            <div class="menu-post-desc">
                                <h4><span class="menu-title">Italian Sausage Soup</span> <span
                                        class="menu-dots"></span><span class="menu-price">$9.00</span></h4>
                                <div class="menu-text"> Italian sausage, garlic, carrots, zucchini </div>
                            </div>
                        </div>
                        <div class="menu-post clearfix ">
                            <div class="menu-post-img"><a
                                    href="{{ asset('assets/images/menu/creamy-chicken-wild-rice-soup.jpg') }}"
                                    class="lightbox" title="Creamy Chicken &#038; Wild Rice Soup"><img width="400"
                                        height="400" src="images/menu/creamy-chicken-wild-rice-soup.jpg"
                                        class="" alt="" title="" /> </a> </div>
                            <div class="menu-post-desc">
                                <h4><span class="menu-title">Creamy Chicken &#038; Wild Rice Soup</span> <span
                                        class="menu-dots"></span><span class="menu-price">$12.00</span></h4>
                                <div class="menu-text"> Cooked chicken, salt, butter, heavy cream </div>
                            </div>
                        </div>
                        <div class="menu-post clearfix  last ">
                            <div class="menu-post-img"><a
                                    href="{{ asset('assets/images/menu/delicious-ham-potato-soup.jpg') }}"
                                    class="lightbox" title="Ham and Potato Soup"><img width="400" height="400"
                                        src="images/menu/delicious-ham-potato-soup.jpg" class="" alt=""
                                        title="" /> </a> </div>
                            <div class="menu-post-desc">
                                <h4><span class="menu-title">Ham and Potato Soup</span> <span
                                        class="menu-dots"></span><span class="menu-price">$10.00</span></h4>
                                <div class="menu-text"> Potatoes, ham, celery, onion, milk </div>
                            </div>
                        </div>
                    </div>
                    <!--menu-2-col-->
                    <!-- /SOUPS -->
                    <!-- DESSERTS -->
                    <div class="categ-name">
                        <h2>Desserts</h2>
                    </div>
                    <div class="menu-holder menu-2col">
                        <div class="menu-post clearfix ">
                            <div class="menu-post-img"><a href="{{ asset('assets/images/menu/summer-berry.jp') }}g"
                                    class="lightbox" title="Summer Berry and Coconut Tart"><img width="400"
                                        height="400" src="images/menu/summer-berry.jpg" class=""
                                        alt="" title="" /> </a> </div>
                            <div class="menu-post-desc">
                                <h4><span class="menu-title">Summer Berry and Coconut Tart</span> <span
                                        class="menu-dots"></span><span class="menu-price">$12.00</span></h4>
                                <div class="menu-text"> Raspberries, blackberries, blueberries, graham cracker crumbs
                                </div>
                            </div>
                        </div>
                        <div class="menu-post clearfix  last ">
                            <div class="menu-post-img"><a
                                    href="{{ asset('assets/images/menu/pumpkin-cookies.jpg') }}" class="lightbox"
                                    title="Pumpkin Cookies Cream Cheese"><img width="400" height="400"
                                        src="images/menu/pumpkin-cookies.jpg" class="" alt=""
                                        title="" /> </a> </div>
                            <div class="menu-post-desc">
                                <h4><span class="menu-title">Pumpkin Cookies Cream Cheese</span> <span
                                        class="menu-dots"></span><span class="menu-price">$10.00</span></h4>
                                <div class="menu-text"> Pumpkin, sugar, butter, eggs </div>
                            </div>
                        </div>
                        <div class="menu-post clearfix ">
                            <div class="menu-post-img"><a
                                    href="{{ asset('assets/images/menu/chocolate-cupcakes.jpg') }}" class="lightbox"
                                    title="Double Chocolate Cupcakes"><img width="400" height="400"
                                        src="images/menu/chocolate-cupcakes.jpg" class="" alt=""
                                        title="" /> </a> </div>
                            <div class="menu-post-desc">
                                <h4><span class="menu-title">Double Chocolate Cupcakes</span> <span
                                        class="menu-dots"></span><span class="menu-price">$7.00</span></h4>
                                <div class="menu-text"> Chocolate, eggs, vanilla, milk </div>
                            </div>
                        </div>
                    </div>
                    <!--menu-2-col-->
                    <!-- /DESSERTS -->
                </div>
                <!-- /col-md-12 -->
            </div>
            <!-- /row -->
            <div class="alignc"><a href="#" class="view-more">View All Menu</a></div>
        </div>
        <!-- /container-->
    </section> --}}
    <!-- /SECTION 3 -->
    <!-- SECTION 4 -->
    {{-- <section id="home-content-9-4" class="home-section parallax margin-b72"
        style="background-image:url('{{ asset('assets/images/top-headers/reservation-image.jpg') }}');">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="alignc margin-b54">
                            <h3 class="home-subtitle">What Clients Say</h3>
                            <h2 class="home-title title-headline">Testimonials</h2>
                        </div>
                    </div>
                    <!-- /col-md-10 -->
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-4 mobile-margin-b24 alignc">
                        <div class="testimonial-txt">"Ferri altera eripuit ne nam. Duo at tibique conclusionemque, nam
                            modo ancillae tacimates et, cu vim omnes phaedrum conclusionemque. Ex tempor eligendi
                            corrumpit vim, sea ei tacimates reformidans. Congue corpora vis ad."</div>
                        <div class="testimonial-client">- Anna Jones -</div>
                        <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    </div>
                    <!--.col-md-4-->
                    <div class="col-md-4 mobile-margin-b24 alignc">
                        <div class="testimonial-txt">"Eam numquam aliquam ea, latine placerat omittantur pri ea. Ius cu
                            nobis numquam vivendo. Bonorum utroque has et, nam cu case clita voluptaria. Est ne error
                            laoreet, te pro stet efficiantur suscipiantur, illum labitur."</div>
                        <div class="testimonial-client">- Louis Rios -</div>
                        <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    </div>
                    <!--.col-md-4-->
                    <div class="col-md-4 alignc">
                        <div class="testimonial-txt">"Mel ea diceret eripuit, has alii solet scribentur ad, vix bonorum
                            tincidunt quaerendum ex. Odio clita has cu, ex per movet malorum, no nusquam officiis
                            nominati mea. Ad graece admodum percipitur cum."</div>
                        <div class="testimonial-client">- Jean Carlson -</div>
                        <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    </div>
                    <!--.col-md-4-->
                </div>
            </div>
            <!-- /container-->
        </div>
        <!-- /parallax-content-->
    </section> --}}
    <!-- /SECTION 4 -->
    <!-- SECTION 5 -->
    {{-- <section id="home-content-9-5" class="home-section margin-b72">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="alignc margin-b54">
                        <h3 class="home-subtitle">Reservation</h3>
                        <h2 class="home-title title-headline margin-b24">Book Your Table</h2>
                    </div>
                    <div id="contact-form-holder">
                        <form method="post" id="contact-form" action='include/contact-process.php'>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                    <p><input type="text" name="name" class="reservation-fields" /></p>
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <p><input type="text" name="email" class="reservation-fields" /></p>
                                </div>
                            </div>
                            <!-- /col-md-6 -->
                            <label>Subject</label>
                            <input type="text" name="subject" class="reservation-fields" />
                            <label>Message</label>
                            <p>
                                <textarea name="message" id="msg-contact" class="reservation-fields" rows="4"></textarea>
                            </p>
                            <p class="antispam">Leave this empty: <input type="text" name="url" /></p>
                            <p class="contact-btn"><input type="submit" value="Send message" id="submit" /></p>
                        </form>
                    </div>
                    <!-- contact-form-holder-->
                    <div id="output-contact"></div>
                </div>
                <!-- /col-md-12-->
            </div>
            <!-- /row-->
        </div>
        <!-- /container-->
    </section> --}}
    <!-- /SECTION 5-->
    <!-- SECTION 6 -->
    {{-- <section id="home-content-9-6">
        <div class="gmaps">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.9762977047603!2d-73.96009086693977!3d40.69651965846399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bc1f922373f%3A0x398427d98fba822e!2sPark+Ave%2C+Brooklyn%2C+NY%2C+USA!5e0!3m2!1sen!2sro!4v1471514814808"
                width="600" height="450" style="border:none;">
            </iframe>
        </div>
        <!--/gmaps-->
    </section> --}}
    <!-- /SECTION 6 -->
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
