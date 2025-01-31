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

    <style>
		html {
			scroll-behavior: smooth;
		};
        .section-rc:hover{
            background: rgb(255,255,255);
            background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(255,241,225,1) 15%, rgba(255,241,225,1) 85%, rgba(255,255,255,1) 100%);
            
        };
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
                    @foreach ($revenue_centers as $rc)
                        <li class="menu-item">
                            <a href="#{{ $rc->id }}{{ $rc->name }}">{{ $rc->name }}</a>
                        </li>
                    @endforeach
					<li class="menu-item menu-item-has-children">
                        <a href="">Language</a>
                        <ul class="sub-menu">
							@foreach($languages as $language)
								<li class="menu-item"><a href="">{{ $language->name }}</a></li>
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
            <div class="logo-4 alignc"><a href="{{ url('/') }}"><img class="img-fluid" src="{{ asset('assets/images/icons/' . $properties->image) }}" alt="1Homes" style="width: 120px; height: auto;"/></a></div>
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
                    <li class="menu-item menu-item-has-children">
                        <a href="">Inicio</a>
                        <ul class="sub-menu">
                            <li class="menu-item current-menu-item"><a class="white" style="cursor: pointer">Revenue Centers</a></li>
                            <li class="menu-item"><a href="{{ url('spa') }}" class="white" style="cursor: pointer">SPA</a></li>
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
                        <a href="" data-toggle="modal" data-target="#ModalHeader"><i class="fas fa-cogs fa-lg" style="color: #e0b16f"></i></a>
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
                <div class="btn-header btn-header4"><a href="" data-toggle="modal" data-target="#ModalHeader"><i class="fas fa-cogs fa-lg"></i></a></div>
            </div>
            <div class="btn-header btn-header4"></div>
        </div>
        <!--headerWrap-->
    </header>
    <!-- /HEADER -->
    <!-- HOME HERO IMAGE -->
    <section id="home-content-9" class="no-parallax bkg-img-100vh margin-b72"
        style="background-image:url('{{ asset('assets/images/backgrounds/' . $properties->background) }}');">
        <div class="item-content-bkg">
            <div class="inner-desc">
                <img id="logoHeader" src="{{ asset('assets/images/icons/' . $properties->logo ) }}" class="img-fluid"
                    alt="Logo" style="width: 55px; height: auto;">
                <h1 id="propertyName" class="post-title single-post-title">{{ $properties->name }}</h1>
                {{--<span class="post-subtitle" style="font-size: 35px">TASTE</span>--}}
            </div>
        </div>
        <!-- /container-->
    </section>
    <!-- /HOME HERO IMAGE -->
    @foreach ($revenue_centers as $i => $rc)
        <section  id="{{ $rc->id }}{{ $rc->name }}" class="section-rc" style="padding-top: 90px;">
            <div class="alignr" style="padding-right: 5%"><a href="#" id="" data-toggle="modal" data-target="#ModalRCenter"><i class="fas fa-pen fa-lg" style="color: #e0b16f"></i></a></div>
            <div class="container">
                @if ($i % 2 == 0)
                    <div class="row" style="padding-bottom: 72px;">
                        <div class="col-md-6 mobile-margin-b54">
                            <div class="margin-r54">
                                <img class="img-fluid"
                                    src="{{ asset('assets/images/revenuecenters/' . $rc->image) }}"
                                    alt="{{ $rc->name }}" />
                            </div>
                        </div>
                        <!-- /col-md-6 -->
                        <div class="col-md-6">
                            {{--<h3 class="home-subtitle">Experience</h3>--}}
                            <h2 id="{{ $rc->id }}{{ $rc->name }}" class="home-title margin-b24 title-headline">{{ $rc->name }}</h2>
                            @foreach ($sites as $site)
                                @if ($site->rc_id == $rc->id)
                                    <h6>{{ $site->name }}</h6>
									<span class="English">{{ $site->schedule_day != '' ? $site->schedule_day : '' }} {{ $site->schedule_hour != '' ? '| ' . $site->schedule_hour : '' }}</span>
									<span class="Spanish" hidden>{{ $site->schedule_day_es != '' ? $site->schedule_day_es : '' }} {{ $site->schedule_hour_es != '' ? '| ' . $site->schedule_hour_es : '' }}</span>
                                    <p class="English">{{ $site->description }}</p>
                                    <p class="Spanish" hidden>{{ $site->description_es }}</p>
                                @endif
                            @endforeach
                            <div class="more-btn">
                                @foreach ($buttons as $button)
                                    @if ($button->rc_id == $rc->id)
                                        <a class="view-more English"  href="{{ asset('assets/files/' . $button->file) }}">{{ $button->name }}</a>
                                        <a class="view-more Spanish"  href="{{ asset('assets/files/' . $button->file) }}" hidden>{{ $button->name_es }}</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <!-- /col-md-6 -->
                    </div>
                @else
                    <div class="row" style="padding-bottom: 72px;">
                        <div class="col-md-6 alignl order2">
                            {{--<h3 class="home-subtitle">Discover</h3>--}}
                            <h2 class="home-title margin-b24 title-headline">{{ $rc->name }}</h2>
                            @foreach ($sites as $site)
                                @if ($site->rc_id == $rc->id)
                                    <h6>{{ $site->name }}</h6>
									<span class="English">{{ $site->schedule_day != '' ? $site->schedule_day : '' }} {{ $site->schedule_hour != '' ? '| ' . $site->schedule_hour : '' }}</span>
									<span class="Spanish" hidden>{{ $site->schedule_day_es != '' ? $site->schedule_day_es : '' }} {{ $site->schedule_hour_es != '' ? '| ' . $site->schedule_hour_es : '' }}</span>
                                    <p class="English">{{ $site->description }}</p>
                                    <p class="Spanish" hidden>{{ $site->description_es }}</p>
                                @endif
                            @endforeach
                            <div class="more-btn">
                                @foreach ($buttons as $button)
                                    @if ($button->rc_id == $rc->id)
                                        <a class="view-more English"  href="{{ asset('assets/') }}">{{ $button->name }}</a>
                                        <a class="view-more Spanish"  href="{{ asset('assets/') }}"  hidden>{{ $button->name_es }}</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <!-- /col-md-6 -->
                        <div class="col-md-6 mobile-margin-b54 order1">
                            <div class="margin-l54">
                                <img class="img-fluid"
                                    src="{{ asset('assets/images/revenuecenters/' . $rc->image) }}"
                                    alt="{{ $rc->name }}" />
                            </div>
                        </div>
                        <!-- /col-md-6 -->
                    </div>
                @endif
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
                            <input type="text" name="" id="" class="reservation-fields" value="{{ $properties->title }}">
                        </div>
                        <div>
                            <h6 style="padding: 3px;">Nombre de la propiedad</h6>
                            <input type="text" name="" id="" class="reservation-fields" value="{{ $properties->name }}">
                        </div>
                        <div>
                            <h6 style="padding: 3px;">Logo centro</h6>
                            <div class="alignc" style="height: 120px; width: 200px; background-color: rgba(0, 0, 0, 0.2)">
                                <img src="{{ asset('assets/images/icons/' . $properties->image) }}" alt="{{$properties->image}}" style="max-height: 120px;">
                            </div>
                            <input type="file" name="" id="" class="reservation-fields" value="{{ $properties->image}}">
                        </div>
                        <div>
                            <h6 style="padding: 3px;">Logo top</h6>
                            <div class="alignc" style="height: 120px; width: 200px; background-color: rgba(0, 0, 0, 0.2)">
                                <img src="{{ asset('assets/images/icons/' . $properties->logo) }}" alt="{{$properties->logo}}" style="max-height: 120px;">
                            </div>
                            <input type="file" name="" id="" class="reservation-fields" value="{{ $properties->logo }}">
                        </div>
                        <div>
                            <h6 style="padding: 3px;">Baner</h6>
                            <div class="alignc" style="height: 120px; width: 200px; background-color: rgba(0, 0, 0, 0.2)">
                                <img src="{{ asset('assets/images/backgrounds/' . $properties->background) }}" alt="{{$properties->background}}" style="max-height: 120px;">
                            </div>
                            <input type="file" name="" id="" class="reservation-fields" value="{{ $properties->background }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form action="" method="post" enctype="multipart/form-data">
        <div id="ModalRCenter" class="modal fade text-left" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">EDITAR CENTRO DE CONSUMO</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5>Centro de consumo</h5>
                        <div>
                            <h6>Nombre del centro de consumo</h6>
                            <input type="text" name="nameRC" id="nameRC" class="reservation-fields">
                        </div>
                        <div>
                            <h6>Imagen del centro de consumo</h6>
                            <div class="alignc" style="height: 120px; width: 200px; background-color: rgba(0, 0, 0, 0.2)">
                                <img src="{{ asset('assets/images/backgrounds/' . $properties->background) }}" alt="{{$properties->background}}" style="max-height: 120px;">
                            </div>
                            <input type="file" name="" id="" class="reservation-fields">
                        </div>
                        <div id="container-sites">
                            <h5>Sitios</h5>
                            <div>
                                <h6 style="padding: 3px;">Nombre del sitio</h6>
                                <input type="text" name="nameSite" id="nameSite" class="reservation-fields">
                            </div>
                            <div>
                                <h6 style="padding: 3px;">Dias de apertura (Inglés)</h6>
                                <input type="text" name="scheduleDaySite" id="scheduleDaySite" class="reservation-fields">
                            </div>
                            <div>
                                <h6 style="padding: 3px;">Dias de apertura (Español)</h6>
                                <input type="text" name="scheduleDayEsSite" id="scheduleDayEsSite" class="reservation-fields">
                            </div>
                            <div>
                                <h6 style="padding: 3px;">Horario de apertura (Inglés)</h6>
                                <input type="text" name="scheduleHourSite" id="scheduleHourSite" class="reservation-fields">
                            </div>
                            <div>
                                <h6 style="padding: 3px;">Horario de apertura (Español)</h6>
                                <input type="text" name="scheduleHourEsSite" id="scheduleHourEsSite" class="reservation-fields">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
    <script src='{{ 'assets/js/init.js' }}'></script>
    <!-- CONTACT FORM JS -->
    <script src='{{ asset('assets/js/jquery.form.min.js') }}'></script>
    <script src='{{ asset('assets/js/contactform.js') }}'></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/module-rc-basics.js') }}"></script>
    
</body>

</html>
