<!DOCTYPE html>
<html lang="en-US">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>1HOMES - MENUS</title>
   <meta name="robots" content="noodp" />
   <!-- Google Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link
       href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:wght@300;400;500;600;700&display=swap"
       rel="stylesheet">
   <!-- Bootstrap CSS -->
   <link rel='stylesheet' id='dina-bootstrap-css-css' href='{{ asset('assets/css/bootstrap/cssbootstrap.min.css') }}'
       type='text/css' media='all' />
   <!-- Font Awesome Icons CSS -->
   <link rel='stylesheet' id='dina-font-awesome-css'
       href='{{ asset('assets/css/fontawesome/css/font-awesome.min.css') }}' type='text/css' media='all' />
   <!-- Main CSS File -->
   <link rel='stylesheet' id='dina-style-css-css' href='{{ asset('assets/style.css') }}' type='text/css'
       media='all' />
   <!-- favicons -->
   <link rel="icon" href="{{ asset('assets/images/icons/1HClogo.ico') }}" sizes="32x32" />
   <link rel="icon" href="{{ asset('assets/images/icons/1HClogo.ico') }}" sizes="192x192" />
   <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/icons/1HClogo.ico') }}" />
   <style>
      @media (max-width: 0px) {
         .select-lang li a {
            padding: 8px 0;
         }
      }
   </style>

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body class="body-header1">

   <!-- MOBILE MENU -->
   {{--<div class="mask-nav-2">
      <!-- MENU -->
      <nav class="navbar navbar-2 nav-mobile">
         <div class="nav-holder nav-holder-2">
            <ul id="menu-menu-2" class="menu-nav-2">
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
               <li class="menu-item menu-item-has-children">
                  <a href="#">Pages</a>
                  <ul class="sub-menu">
                     <li class="menu-item menu-item-has-children">
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
                     <li class="menu-item"><a href="gallery-full-screen-3-cols.html">Gallery Full Screen 3 Cols</a></li>
                     <li class="menu-item"><a href="gallery-full-screen-4-cols.html">Gallery Full Screen 4 Cols</a></li>
                  </ul>
               </li>
               <li class="menu-item menu-item-has-children current-menu-item">
                  <a href="blog.html">Blog</a>
                  <ul class="sub-menu">
                     <li class="menu-item"><a href="blog-single-post.html">Blog Single Post</a></li>
                     <li class="menu-item"><a href="blog.html">Blog List</a></li>
                     <li class="menu-item"><a href="blog-classic.html">Blog Classic</a></li>
                     <li class="menu-item"><a href="blog-grid.html">Blog Grid</a></li>
                     <li class="menu-item"><a href="blog-grid-3-cols.html">Blog Grid 3 Cols</a></li>
                     <li class="menu-item current-menu-item"><a href="blog-fullwidth.html">Blog FullWidth</a>
                     </li>
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
            </ul>
         </div>
      </nav>
        <!-- /MENU -->

        <!-- RIGHT SIDE -->
      <div class="rightside-nav-2">
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
      </div>
      <!-- /RIGHT SIDE -->
   </div>--}}
   <!-- /MOBILE MENU -->

   <!-- START HEADER -->
   {{--<header id="header-1">
      <div class="headerWrap-1">
         <nav class="navbar-1">
            <!-- TOP LEFT PAGE TEXT  -->
            <div class="top-location">
                <span class="info-txt">40 Park Ave, Brooklyn, </span>
                <span class="info-txt">New York 70250</span>
            </div>
            <!-- TOP LEFT PAGE TEXT  -->
            <div class="book-now">
                <span class="info-txt">Book Now</span>
                <span class="info-txt">+1-222-333-444</span>
            </div>
            <!-- MOBILE BUTTON NAV  -->
            <div class="nav-button-holder nav-btn-mobile inactive">
               <span class="menu-txt">MENU</span>
               <button type="button" class="nav-button">
                  <span class="icon-bar"></span>
               </button>
            </div>
            <div class="nav-content-1">
                 <!-- LOGO -->
                 <div class="logo-1"><a href="index.html"><img class="img-fluid" src="{{ asset('assets/images/logo-dina-white.png') }}" alt="" /></a></div>
                 <!-- MENU -->
               <div class="nav-holder nav-holder-1 nav-holder-desktop">
                  <ul id="menu-menu-1" class="menu-nav menu-nav-1">
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
                     <li class="menu-item menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                           <li class="menu-item menu-item-has-children">
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
                           <li class="menu-item"><a href="gallery-full-screen-3-cols.html">Gallery Full Screen 3 Cols</a></li>
                           <li class="menu-item"><a href="gallery-full-screen-4-cols.html">Gallery Full Screen 4 Cols</a></li>
                        </ul>
                     </li>
                     <li class="menu-item menu-item-has-children current-menu-item">
                        <a href="blog.html">Blog</a>
                        <ul class="sub-menu">
                           <li class="menu-item"><a href="blog-single-post.html">Blog Single Post</a></li>
                           <li class="menu-item"><a href="blog.html">Blog List</a></li>
                           <li class="menu-item"><a href="blog-classic.html">Blog Classic</a></li>
                           <li class="menu-item"><a href="blog-grid.html">Blog Grid</a></li>
                           <li class="menu-item"><a href="blog-grid-3-cols.html">Blog Grid 3 Cols</a></li>
                           <li class="menu-item current-menu-item"><a href="blog-fullwidth.html">Blog FullWidth</a></li>
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
                  </ul>
               </div>
               <!-- /MENU  -->
            </div>
         </nav>
      </div>
      <!--headerWrap-->
   </header>--}}
   <!-- /HEADER -->
   <header id="header-1">
      <div class="headerWrap-1">
         <nav class="navbar-1">
            <div class="nav-holder nav-holder-1 book-now" style="display: block">
               <ul id="menu-menu-1" class="menu-nav menu-nav-1 select-lang">
                  <li class="menu-item menu-item-has-children">
                     <a>Languagues</a>
                     <ul class="sub-menu">
                        @foreach($languages as $i => $language)
                           @if($i == 0)
                              <li class="menu-item current-menu-item change_lang" value="{{ $language->id }}"><a style="cursor: pointer">{{ $language->name }}</a></li>
                           @else
                              <li class="menu-item change_lang" value="{{ $language->id }}"><a style="cursor: pointer">{{ $language->name }}</a></li>
                           @endif
                        @endforeach
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
   </header>

   <!-- TOP IMAGE HEADER -->
   <section class="topSingleBkg topPageBkg">
      <div class="item-content-bkg">
         <div class="item-img" style="background-image:url('{{ asset('assets/images/revenuecenters/playafondo.jpg') }}');"></div>
         <div class="inner-desc">
            <img id="logoHeader" src="{{ asset('assets/images/icons/1HClogo.ico') }}" class="img-fluid" alt="Logo" style="width: 50px; height: auto;">
            <h1 id="propertyName" class="post-title single-post-title">HOMES CABO</h1>
            <span class="post-subtitle">TASTE</span>
         </div>
      </div>
   </section>

    <!-- CONTENEDOR PRINCIPAL -->
    <section id="wrap-content" class="blog-1col-list-left">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    @foreach ($revenue_centers as $rc)
                        <!-- BLOQUE:  -->
                        <article class="blog-item blog-item-1col">
                            <div class="post-category"><a href="#" rel="category tag">Revenue Center</a></div>
                            <h2 class="article-title"><a href="#">{{ $rc->name }}</a></h2>
                            {{--<ul class="post-meta">
                                <li class="meta-date">November 11, 2021</li>
                                <li class="post-author"><a href="#"> <img alt=''
                                            src='{{ asset('assets/images/gravatar.jpg') }}' height='20'
                                            width='20' /> Silvia Just</a></li>
                            </ul>--}}
                            <!-- CONTENEDOR DE IMAGEN -->
                            <div class="post-image">
                                <a href="#">
                                    <img width="900" height="500"
                                        src="{{ asset('assets/images/revenuecenters/' . $rc->image) }}"
                                        class="img-fluid img-featured" alt="Epic Egg Salad" title="Epic Egg Salad" />
                                </a>
                            </div>
                            <!-- CONTENEDOR PARA LA INFORMACION DE LOS SITES Y BOTONES CORRESPONDIENTES AL REVENUE CENTER-->
                            <div class="post-holder post-holder-all">
                                <!-- BLOQUE: SITES -->
                                @foreach ($sites as $site)
                                    @if ($site->rc_id == $rc->id)
                                        <div class="post-content">
                                            <h5 class="English">{{ $site->name }}
                                                {{ $site->schedule_day != '' ? '| ' . $site->schedule_day : '' }}
                                                {{ $site->schedule_hour != '' ? '| ' . $site->schedule_hour : '' }}
                                            </h5>
                                            <h5 class="Spanish" hidden>{{ $site->name }}
                                                {{ $site->schedule_day != '' ? '| ' . $site->schedule_day : '' }}
                                                {{ $site->schedule_hour != '' ? '| ' . $site->schedule_hour : '' }}
                                            </h5>
                                            <p class="English">{{ $site->description }}</p>
                                            <p class="Spanish" hidden>{{ $site->description }}</p>
                                        </div>
                                    @endif
                                @endforeach
                                <!-- BLOQUE: BUTTONS -->
                                <div class="more-btn">
                                    @foreach ($buttons as $button)
                                        @if ($button->rc_id == $rc->id)
                                            <a class="view-more English" href="{{ asset('assets/')}}">{{ $button->name }}</a>
                                            <a class="view-more Spanish" href="{{ asset('assets/')}}" hidden>{{ $button->name }}</a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <!--post holder-->
                        </article>
                    @endforeach
                    {{--
                  <article class="blog-item blog-item-1col" >
                     <div class="post-category"><a href="#" rel="category tag">Food</a></div>
                     <!--post-category-->
                     <h2 class="article-title"><a href="#">Beach Pool Deck</a></h2>
                     <ul class="post-meta">
                        <li class="meta-date">November 11, 2021</li>
                        <li class="post-author"><a href="#"> <img alt='' src='{{ asset('assets/images/gravatar.jpg') }}' height='20' width='20' /> Silvia Just</a></li>
                     </ul>
                     <div class="post-image">
                        <a href="#">
                        <img width="900" height="500" src="{{ asset('assets/images/revenuecenters/beachpoolST.jpg') }}" class="img-fluid img-featured" alt="Epic Egg Salad" title="Epic Egg Salad"/>      
                        </a>
                     </div>
                     <!--post-image-->
                     <div class="post-holder post-holder-all">
                        <div class="post-content">
                           <h5>BEACH POOL DECK | OPEN DAILY FROM 10AM-6PM</h5>
                           <p>Lounge in the sun and take a dip in our beach front infinity pools, whilst grabbing a drink and enjoying the freshest seafood from our food truck.</p>
                        </div>
                        <div class="post-content">
                           <h5>FOOD TRUCK | BEACH POOL | OPEN DAILY FROM 10AM-6PM</h5>
                           <p>Savor authentic Baja cuisine with ocean views and enjoy the freshest seafood selection at our farm-to-food truck concept located at our beach front pool.</p>
                        </div>
                        <!--post-content-->
                        <div class="more-btn">
                           <a class="view-more" href="#">Food Truck</a>
                           <a class="view-more" href="#">Beverages</a>
                           <a class="view-more" href="#">Beach & Vibes (FRI 6-9pm)</a>
                        </div>
                     </div>
                     <!--post holder-->
                  </article>
                  
                  <article class="blog-item blog-item-1col" >
                     <div class="post-category"><a href="#" rel="category tag">Desserts</a></div>
                     <!--post-category-->
                     <h2 class="article-title"><a href="#">Room Services</a></h2>
                     <ul class="post-meta">
                        <li class="meta-date">November 11, 2021</li>
                        <li class="post-author"><a href="#"> <img alt='' src='{{ asset('assets/images/gravatar.jpg') }}' height='20' width='20' /> Silvia Just</a></li>
                     </ul>
                     <div class="post-image">
                        <a href="#">
                        <img width="900" height="500" src="{{ asset('assets/images/revenuecenters/roomserviceST.jpg') }}" class="img-fluid img-featured" alt="Epic Egg Salad" title="Epic Egg Salad" />      
                        </a>
                     </div>
                     <!--post-image-->
                     <div class="post-holder post-holder-all">
                        <div class="post-content">
                           <h5>ROOM SERVICES</h5>
                           <p>Convenience at your fingertips. Enjoy the ease of requesting services and meals from the comfort of your room, straight from our menu.</p>
                        </div>
                        <!--post-content-->
                        <div class="more-btn">
                           <a class="view-more" href="#">Menu</a>
                        </div>
                     </div>
                     <!--post holder-->
                  </article>
                  
                  <article class="blog-item blog-item-1col" >
                     <div class="post-category"><a href="#" rel="category tag">Recipes</a></div>
                     <!--post-category-->
                     <h2 class="article-title"><a href="#">Chef Services</a></h2>
                     <ul class="post-meta">
                        <li class="meta-date">November 11, 2021</li>
                        <li class="post-author"><a href="#"> <img alt='' src='{{ asset('assets/images/gravatar.jpg') }}' height='20' width='20' /> Silvia Just</a></li>
                     </ul>
                     <div class="post-image">
                        <a href="#">
                        <img width="900" height="500" src="{{ asset('assets/images/revenuecenters/chefserviceST.jpg') }}" class="img-fluid img-featured" alt="Epic Egg Salad" title="Epic Egg Salad" />      
                        </a>
                     </div>
                     <!--post-image-->
                     <div class="post-holder post-holder-all">
                        <div class="post-content">
                           <h5>CHEF SERVICES</h5>
                           <p>You'll nd menus designed around the seasons, full of fresh, local ingredients and dishes that are both good and good for you.</p>
                        </div>
                        <!--post-content-->
                        <div class="more-btn">
                           <a class="view-more" href="#">Menu</a>
                        </div>
                     </div>
                     <!--post holder-->
                  </article>
                  
                  <article class="blog-item blog-item-1col" >
                     <div class="post-category"><a href="#" rel="category tag">Desserts</a></div>
                     <!--post-category-->
                     <h2 class="article-title"><a href="#">Grab N'GO</a></h2>
                     <ul class="post-meta">
                        <li class="meta-date">November 11, 2021</li>
                        <li class="post-author"><a href="#"> <img alt='' src='{{ asset('assets/images/gravatar.jpg') }}' height='20' width='20' /> Silvia Just</a></li>
                     </ul>
                     <div class="post-image">
                        <a href="#">
                        <img width="900" height="500" src="{{ asset('assets/images/revenuecenters/grabngoST.jpg') }}" class="img-fluid img-featured" alt="Epic Egg Salad" title="Epic Egg Salad" />      
                        </a>
                     </div>
                     <!--post-image-->
                     <div class="post-holder post-holder-all">
                        <div class="post-content">
                           <h5>GRAB & GO | LOBBY | AVAILABLE DAILY FROM 6AM-7PM</h5>
                           <p>Thoughtfully curated selection of ready-made local, artisan goods available in a convivial neighborhood gathering spot to Grab N'Go.</p>
                        </div>
                        <!--post-content-->
                        <div class="more-btn">
                           <a class="view-more" href="#">Menu</a>
                        </div>
                     </div>
                     <!--post holder-->
                  </article>
                  
                  <article class="blog-item blog-item-1col" >
                     <div class="post-category"><a href="#" rel="category tag">Italian Recipes</a></div>
                     <!--post-category-->
                     <h2 class="article-title"><a href="#">Mezcal Bar</a></h2>
                     <ul class="post-meta">
                        <li class="meta-date">November 11, 2021</li>
                        <li class="post-author"><a href="#"> <img alt='' src='{{ asset('assets/images/gravatar.') }}jpg' height='20' width='20' /> Silvia Just</a></li>
                     </ul>
                     <div class="post-image">
                        <a href="#">
                        <img width="900" height="500" src="{{ asset('assets/images/revenuecenters/mezcalST.jpg') }}" class="img-fluid img-featured" alt="Epic Egg Salad" title="Epic Egg Salad" />      
                        </a>
                     </div>
                     <!--post-image-->
                     <div class="post-holder post-holder-all">
                        <div class="post-content">
                           <h5>MEZCAL BAR | LOBBY | OPEN TUESDAY TO SUNDAY FROM 3PM-11PM</h5>
                           <p>Inspired by the true style of a Mexican Mezcal bar, enjoy the finest selection of mezcal & tequila offerings.</p>
                        </div>
                        <!--post-content-->
                        <div class="more-btn">
                           <a class="view-more" href="#">Menu</a>
                        </div>
                     </div>
                     <!--post holder-->
                  </article>
               --}}
                </div>
                <!--col-md-10-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </section>
    <!-- /MAIN WRAP CONTENT -->

    <!-- FOOTER -->
    {{-- <footer>
         <div class="container">
         	            
            <!-- ROW -->
            <div class="row alignc">
            
            	<!-- FOOTER COLUMN 1 -->
               <div class="col-md-4">
                  <div class="footer-content">
                     <h5>ADDRESS:</h5>
                     <p>Dina Restaurant <br/>
                        40 Park Ave, Brooklyn, New York 70250
                     </p>
                  </div>
               </div>
               
               <!-- FOOTER COLUMN 2 -->
               <div class="col-md-4">
                  <div class="footer-content">
                     <h5>RESERVATION:</h5>
                     <p>000-111-222 <br/>
                        contact@dina.com
                     </p>
                  </div>
               </div>
               
               <!-- FOOTER COLUMN 3 -->
               <div class="col-md-4">
                  <div class="footer-content">
                     <h5>OPEN HOURS:</h5>
                     <p>Monday - Friday: 10 AM - 11 PM <br/>
                        Saturday - Sunday: 9 AM - 1 PM
                     </p>
                  </div>
               </div>
               
            </div>
            <!-- /ROW -->
            
            <!-- FOOTER SOCIAL -->
            <ul class="footer-social">
               <li><a class="social-facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
               <li><a class="social-twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
               <li><a class="social-tripadvisor" href="#" target="_blank"><i class="fab fa-tripadvisor"></i></a></li>
               <li><a class="social-pinterest" href="#" target="_blank"><i class="fab fa-pinterest"></i></a></li>
               <li><a class="social-instagram" href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <!-- /FOOTER SOCIAL -->
            
            <!-- FOOTER COPYRIGHT -->
            <div class="copyright">
               Copyright &copy; 2021, Dina . Designed by MatchThemes.com
            </div>
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
         
      </footer> --}}
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
    <script src='{{ asset('assets/js/init.js') }}'></script>
    <!-- JQUERY -->
    <script>
      var url_change_language = "{{ route('change_language' )}}";
    </script>
    <script src="{{ asset('assets/js/module-rc-basics.js')}}"></script>
</body>

</html>
