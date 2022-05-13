<!DOCTYPE html>
<html lang="en" data-random-animation="false" data-animation="11">
    
<!-- Mirrored from watson-vcard.netlify.app/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Apr 2022 21:00:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

        <!--Meta Tags-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="keywords" content="vcard, resume, personal, portfolio, cv, card, responsive" />
        <meta name="description" content="vCard / Resume / Personal Template" />
        <meta name="author" content="cosmos-themes" />

        <!--Page Title-->
        <title> Mohammad Nayem | Personal Portfolio</title>

        <!--Plugins Css-->
        <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
        <!--Main Styles Css-->
        <link rel="stylesheet" href="{{ asset('css/style-dark.css') }}">

        <link rel="stylesheet" href="{{ asset('css/style-demo.css') }}">

        <!--Color Css-->
        <link class="site-color" rel="stylesheet" href="{{ asset('css/blue-color.css') }}">

        <!--Modernizr Js-->
        <script src="{{ asset('js/modernizr.js') }}"></script>

        <!--Favicons-->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122650090-3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-122650090-3');
        </script>

    </head>

    <body>

        <div class="theme-options dark">
            <div class="toggle-btn">
                <span><i class="fas fa-cog"></i></span>
            </div>
            <div class="theme-menu">
                <div class="page-transitions">
                    <h4>Page Animation</h4>
                    <select class="demo-select form-control" id="anim-type">
                        <option>Choose</option>
                        <option value="0">Random</option>
                    </select>
                </div>
                <div class="theme-color">
                    <h4 class="mt-20">Colors</h4>
                    <ul>
                        <li><a href="css/blue-color.css" style="background-color: #00A3E1;;"></a></li>
                        <li><a href="css/red-color.css" style="background-color: #E82A2A;"></a></li>
                        <li><a href="css/green-color.css" style="background-color: #6ac045;"></a></li>
                        <li><a href="css/yellow-color.css" style="background-color: #D1A71D;"></a></li>
                        <li><a href="css/pink-color.css" style="background-color: #FF1493;"></a></li>
                        <li><a href="css/purple-color.css" style="background-color: #5078FF;"></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--Preloader Start-->
        <div class="preloader">
            <div class="loader">
                <!--Your Name-->
                <h4>Mohammad Khalid Shaifullah Nayem</h4>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!--Preloader End-->

        <div id="page">

            <!--Header Start-->
            <header>
                <div class="header-content">

                    <!--Mobile Header-->
                    <div class="header-mobile">
                        <a class="header-toggle"><i class="fas fa-bars"></i></a>
                        <h5>Mohammad Khalid Shaifullah Nayem</h5>
                    </div>

                    <!--Main Header-->
                    <div class="header-main" data-simplebar>
                        <div class="image-container">
                            <h2 class="header-name">Mohammad Khalid Shaifullah</h2>
                            <img src="img/profile-img.jpg" alt="profile-pic">
                        </div>

                        <!--Nav Menus-->
                        <nav class="nav-menu">
                           <ul>
                              <li><a href="#home" class="pt-link active"><span class="nav-menu-icon"><i class="lnr lnr-home"></i></span>Home </a> </li>
                              <li><a href="#about" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-user"></i></span>About Me</a></li>
                              <li><a href="#resume" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-license"></i></span>Resume</a></li>
                              <li><a href="#portfolio" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-briefcase"></i></span>Portfolio</a></li>
                              <li><a href="#contact" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-envelope"></i></span>Contact</a></li>
                              @if (Auth::guest())
                                 <li>
                                    <a href="#login" class="pt-link"><span class="nav-menu-icon"> <i class="lnr lnr-user"></i> </span> Admin Login</a>
                                 </li>
                              @else
                                 <li>
                                    @if (Auth::user()->role == 1)
                                       <a href="{{ route('admin.index') }}" class="pt-link"><span class="nav-menu-icon"> <i class="lnr lnr-user"></i> </span> Admin Dashboard</a>
                                    @elseif(Auth::user()->role == 2)
                                       <a href="{{ route('admin.index') }}" class="pt-link"><span class="nav-menu-icon"> <i class="lnr lnr-user"></i> </span> Admin Dashboard</a>
                                    @endif
                                 </li>
                              @endif
                           </ul>
                        </nav>

                        <!--Nav Footer-->
                        <div class="nav-footer">
                            <!--Social Links-->
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance-square"></i></a></li>
                            </ul>
                            <!--Copyright Text-->
                            <div class="copy">
                                <p>2022 &copy; <br>All Right Reserved.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </header>
            <!--Header End-->


            <!--Main Start-->
            <div id="main" class="site-main">

                <!--Banner Section Start-->
                <section id="home" class="banner-section pt-page" style="background-image: url('img/background/home-bg.jpg')">

                    <div class="banner-content">
                        <!--Banner Text-->
                        <h1 class="mb-20">Mohammad Khalid  <span>Shaifullah Nayem</span></h1>

                        <!--Animated Text-->
                        <p class="cd-headline clip is-full-width">
                        <span>I am a </span>
                        <span class="cd-words-wrapper">
                            <b class="is-visible">Website Developer</b>
                            <b>Website Designer</b>
                            <b>Freelancer</b>
                            <b>Business consultent</b>
                            <b>Html5, Css3, Bootstarp, javascript, jquery Expert</b>
                            <b>Php, laravel, My sql Expert</b>
                            <b>Wordpress Expert</b>


                        </span>
                        </p>


                    </div>

                    
                </section>
                <!--Banner Section End-->


                <!--About Section Start-->
                <section id="about" class="about-section pt-page">
                    <div class="section-container">
                        <!--Page Heading-->
                        <div class="page-heading">
                            <span class="icon"><i class="lnr lnr-user"></i></span>
                            <h2>About Me.</h2>
                        </div>

                        <!-- About Info Row Start-->
                        <div class="row about mb-70">

                            <div class="col-lg-8">
                                <!--Personal Intro-->
                                <h3 class="mb-20">Website  Designer & Developer</h3>
                                <p>I am a Wesite Designer & Developer.

Coding With html5, css3, javascript, jquery, php, laravel, my sql,
 wordpress i can make any kind of perfect website for you. 

                                </p>
                                <p>
Services: <br>

                                    1.Any kind of website design. <br>
                                    2.Psd or any file to html5/bootstrap. <br>
                                    3.Website Development <br>
                                    4.Teaching website design and developemnt. <br>
                                    6.Cpanel file uploading. <br>
                                    7.Helping about domain hosting. <br>
                                    8.Business consultant. <br>
                                    9.Any kind website developed with admin panel dashboard. <br>
                                    10.Wordpress theme customization.  <br>
                                    11.Any kind of wordpress theme collection. <br>
                                    12.Helping about any kind of solution in online.
                                    13.Modify any kind of Website.


                                </p>
                                <!--Signature Image-->
                                <div class="signature mt-20">
                                    <img src="img/signature-white.png" alt="">
                                </div>
                            </div>

                            <!--Personal Info-->
                            <div class="col-lg-4">
                                <div class="about-info">
                                    <h3 class="mb-20">Personal Information</h3>
                                    <ul>
                                        <li><span class="title">Name</span><span class="value">Mohammad Khalid Shaifullah Nayem</span></li>
                                        <li><span class="title">Age</span><span class="value">25 Years</span></li>
                                        <li><span class="title">Residence</span><span class="value">Dhaka, Bangladesh</span></li>
                                        <li><span class="title">Address</span><span class="value">Mirpur Dhaka</span></li>
                                        <li><span class="title">Email</span><span class="value">mk5316222@gmail.com</span></li>
                                        <li><span class="title">Phone</span><span class="value">+8801885989461</span></li>
                                        <li><span class="title">Freelance</span><span class="value">Available</span></li>
                                    </ul>
                                    <div class="resume-button mt-30">
                                        <a class="btn-main" href="#">Download Resume</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- About Info Row End-->

                        <!--Services Row Start-->
                        <div class="row services mb-30">
                            <div class="col-md-12">
                                <div class="subheading">
                                    <h3>Services</h3>
                                </div>
                            </div>

                            <!--Service Item-->
                            <div class="col-lg-3 col-sm-6">
                                <div class="service-item">
                                    <div class="icon"><i class="lnr lnr-laptop"></i></div>
                                    <h4>Web Development</h4>
                                    <p>Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.</p>
                                </div>
                            </div>

                            <!--Service Item-->
                            <div class="col-lg-3 col-sm-6">
                                <div class="service-item">
                                    <div class="icon"><i class="lnr lnr-eye"></i></div>
                                    <h4>Web Design</h4>
                                    <p>Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.</p>
                                </div>
                            </div>

                            <!--Service Item-->
                            <div class="col-lg-3 col-sm-6">
                                <div class="service-item">
                                    <div class="icon"><i class="lnr lnr-laptop-phone"></i></div>
                                    <h4>Responsive Design</h4>
                                    <p>Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.</p>
                                </div>
                            </div>

                            <!--Service Item-->
                            <div class="col-lg-3 col-sm-6">
                                <div class="service-item">
                                    <div class="icon"><i class="lnr lnr-camera"></i></div>
                                    <h4>Website Development</h4>
                                    <p>Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services Row End-->

                        <!--Clients Row Start-->
                        <div class="row clients mb-70">
                            <div class="col-md-12">
                                <div class="subheading">
                                    <h3>Clients</h3>
                                </div>
                            </div>

                            <div class="owl-carousel owl-theme">

                                <!--Client Logo-->
                                <div class="client-logo">
                                    <a href="#">
                                        <img src="{{ asset('img/clients/client-01.png') }}" alt="">
                                    </a>
                                </div>

                                <!--Client Logo-->
                                <div class="client-logo">
                                    <a href="#">
                                        <img src="{{ asset('img/clients/client-02.png') }}" alt="">
                                    </a>
                                </div>

                                <!--Client Logo-->
                                <div class="client-logo">
                                    <a href="#">
                                        <img src="{{ asset('img/clients/client-03.png') }}" alt="">
                                    </a>
                                </div>

                                <!--Client Logo-->
                                <div class="client-logo">
                                    <a href="#">
                                        <img src="{{ asset('img/clients/client-04.png') }}" alt="">
                                    </a>
                                </div>

                                <!--Client Logo-->
                                <div class="client-logo">
                                    <a href="#">
                                        <img src="{{ asset('img/clients/client-05.png') }}" alt="">
                                    </a>
                                </div>

                                <!--Client Logo-->
                                <div class="client-logo">
                                    <a href="#">
                                        <img src="{{ asset('img/clients/client-06.png') }}" alt="">
                                    </a>
                                </div>

                                <!--Client Logo-->
                                <div class="client-logo">
                                    <a href="#">
                                        <img src="{{ asset('img/clients/client-07.png') }}" alt="">
                                    </a>
                                </div>

                                <!--Client Logo-->
                                <div class="client-logo">
                                    <a href="#">
                                        <img src="{{ asset('img/clients/client-08.png') }}" alt="">
                                    </a>
                                </div>

                                <!--Client Logo-->
                                <div class="client-logo">
                                    <a href="#">
                                        <img src="{{ asset('img/clients/client-09.png') }}" alt="">
                                    </a>
                                </div>

                            </div>
                        </div>
                        <!--Clients Row End-->

                        <!--Testimonials Row Start-->
                        <div class="row testimonials mb-50">
                            <div class="col-md-12">
                                <div class="subheading">
                                    <h3>Testimonials</h3>
                                </div>
                                <div class="owl-carousel owl-theme">

                                    <!--Testimonail Item-->
                                    <div class="testimonial-item">
                                        <div class="testimonial-content">
                                            <p>Ipsum ab necessitatibus numquam vitae quis. Nobis nostrum deserunt suscipit eos fugit. Consectetur dolorum temporibus facilis impedit exercitationem dignissimos.</p>
                                        </div>
                                        <div class="testimonial-meta">
                                            <img src="img/testimonials/author-1.jpg" alt="">
                                            <div class="meta-info">
                                                <h4>Kate Fox</h4>
                                                <p>Digital Marketing Executive</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Testimonail Item-->
                                    <div class="testimonial-item">
                                        <div class="testimonial-content">
                                            <p>Ipsum ab necessitatibus numquam vitae quis. Nobis nostrum deserunt suscipit eos fugit. Consectetur dolorum temporibus facilis impedit exercitationem dignissimos.</p>
                                        </div>
                                        <div class="testimonial-meta">
                                            <img src="img/testimonials/author-2.jpg" alt="">
                                            <div class="meta-info">
                                                <h4>Emma Jones</h4>
                                                <p>Creative Director</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Testimonail Item-->
                                    <div class="testimonial-item">
                                        <div class="testimonial-content">
                                            <p>Ipsum ab necessitatibus numquam vitae quis. Nobis nostrum deserunt suscipit eos fugit. Consectetur dolorum temporibus facilis impedit exercitationem dignissimos.</p>
                                        </div>
                                        <div class="testimonial-meta">
                                            <img src="img/testimonials/author-3.jpg" alt="">
                                            <div class="meta-info">
                                                <h4>Jack Smith</h4>
                                                <p>Marketing Director</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--Testimonials Row End-->

                        </div>
                    </div>
                </section>
                <!--About Section Start-->


                <!--Resume Section Start-->
                <section id="resume" class="resume-section pt-page">
                    <div class="section-container">
                        <div class="page-heading">
                            <span class="icon"><i class="lnr lnr-license"></i></span>
                            <h2>My Resume.</h2>
                        </div>

                        <!--Education & Experience Row Start-->
                        <div class="row mb-20">

                            <!--Experience Column Start-->
                            <div class="col-lg-6">
                                <div class="subheading">
                                    <h3>Experience</h3>
                                </div>
                                <ul class="experience">

                                    <!--Experience Item-->
                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>Lead UI Designer</h4>
                                            <h5>Big Design Company, NY, USA</h5>
                                            <p class="info">
                                                Sit cupiditate praesentium ex esse nulla Facere fuga perspiciatis eveniet provident neque Ea ratione non minus temporibus ipsum Sunt minima
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">2018</span>
                                            <span class="from">2016</span>
                                        </span>
                                    </li>

                                    <!--Experience Item-->
                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>Web Designer</h4>
                                            <h5>Design Company, London, UK</h5>
                                            <p class="info">
                                                Dolor id atque accusantium ut impedit odit provident soluta voluptatem Veritatis ipsam neque mollitia vero suscipit a laborum doloremque. Ipsa!
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">2016</span>
                                            <span class="from">2015</span>
                                        </span>
                                    </li>

                                    <!--Experience Item-->
                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>Web Developer</h4>
                                            <h5>Exis Development, London, UK</h5>
                                            <p class="info">
                                                Consectetur pariatur fugiat ipsam aperiam maiores. Nisi in dignissimos debitis expedita asperiores delectus vitae corporis.
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">2015</span>
                                            <span class="from">2014</span>
                                        </span>
                                    </li>

                                </ul>
                            </div>
                            <!--Experience Column End-->

                            <!--Education Column Start-->
                            <div class="col-lg-6">
                                <div class="subheading">
                                    <h3>Education</h3>
                                </div>

                                <ul class="education">

                                    <!--Education Item-->
                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>MA Graphics</h4>
                                            <h5>Royal College of Art, London, UK</h5>
                                            <p class="info">
                                                Consectetur mollitia amet inventore nisi sed. Provident veritatis exercitationem eum doloremque itaque expedita? Ex voluptatem nostrum numquam illum.
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">2014</span>
                                            <span class="from">2013</span>
                                        </span>
                                    </li>

                                    <!--Education Item-->
                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>BA(HONS) Graphics</h4>
                                            <h5>Central Saint Martins, London, UK</h5>
                                            <p class="info">
                                                Elit voluptatibus quas necessitatibus ullam tenetur provident voluptatibus. Ratione delectus lorem minus ipsa architecto. Saepe officiis sint adipisci.
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">2013</span>
                                            <span class="from">2012</span>
                                        </span>
                                    </li>

                                    <!--Education Item-->
                                    <li>
                                        <span class="line-left"></span>
                                        <div class="content">
                                            <h4>Web & Graphics Diploma</h4>
                                            <h5>Tech Arts Institute, CA, USA</h5>
                                            <p class="info">
                                            Ipsum ex exercitationem est aliquid eos saepe. Dolorum aperiam cupiditate labore vero deleniti Aut unde deserunt neque voluptas.
                                            </p>
                                        </div>
                                        <span class="year">
                                            <span class="to">2012</span>
                                            <span class="from">2011</span>
                                        </span>
                                    </li>

                                </ul>
                            </div>
                            <!--Education Column End-->

                        </div>
                        <!--Education & Experience Row End-->


                        <!--Skills Row Start-->
                        <div class="row">

                            <!--Design Skills Column Start-->
                            <div class="col-lg-6 skills">
                                <div class="subheading">
                                    <h3>Design Skills</h3>
                                </div>

                                <!--Design Skill Item-->
                                <div class="skill-item">
                                    <h4 class="progress-title">Html5</h4>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress-value="91">
                                            <div class="progress-value">100%</div>
                                        </div>
                                    </div>
                                </div>

                                <!--Design Skill Item-->
                                <div class="skill-item">
                                    <h4 class="progress-title">Css3</h4>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress-value="82">
                                            <div class="progress-value">100%</div>
                                        </div>
                                    </div>
                                </div>

                                <!--Design Skill Item-->
                                <div class="skill-item">
                                    <h4 class="progress-title">Javascript</h4>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress-value="94">
                                            <div class="progress-value">60%</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="skill-item">
                                    <h4 class="progress-title">jquery</h4>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress-value="94">
                                            <div class="progress-value">60%</div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <!--Design Skills Column End-->

                            <!--Coding Skills Column Start-->
                            <div class="col-lg-6 skills">
                                <div class="subheading">
                                    <h3>Coding Skills</h3>
                                </div>

                                <!--Coding Skill Item-->
                                <div class="skill-item">
                                    <h4 class="progress-title">Php</h4>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress-value="83">
                                            <div class="progress-value">83%</div>
                                        </div>
                                    </div>
                                </div>

                                <!--Coding Skill Item-->
                                <div class="skill-item">
                                    <h4 class="progress-title">laravel</h4>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress-value="75">
                                            <div class="progress-value">95%</div>
                                        </div>
                                    </div>
                                </div>

                                <!--Coding Skill Item-->
                                <div class="skill-item">
                                    <h4 class="progress-title">My sql</h4>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress-value="92">
                                            <div class="progress-value">92%</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="skill-item">
                                    <h4 class="progress-title">Wordpress</h4>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress-value="92">
                                            <div class="progress-value">75%</div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!--Coding Skills Column End-->

                        </div>
                        <!--Skills Row End-->
                    </div>
                </section>
                <!--Resume Section End-->


                <!--Porfolio Section Start-->
                <section id="portfolio" class="portfolio-section pt-page">
                    <div class="section-container">

                        <!--Page Heading-->
                        <div class="page-heading">
                            <span class="icon"><i class="lnr lnr-briefcase"></i></span>
                            <h2>Portfolio.</h2>
                        </div>

                        <div class="row">
                            <!--Portfolio Filter-->
                            <div class="col-md-12 portfolio-filter text-center">
                                <ul>
                                    <li class="active" data-filter="*">All</li>
                                    <li data-filter=".brand">Brand</li>
                                    <li data-filter=".design">Design</li>
                                    <li data-filter=".graphic">Graphic</li>
                                </ul>
                            </div>
                        </div>

                        <!--Portfolio Items-->
                        <div class="row portfolio-items mb-50">

                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 brand graphic">
                                <a class="image-link" href="img/portfolio/img-1.jpg">
                                    <figure>
                                        <img src="img/portfolio/img-1.jpg" alt="">
                                        <figcaption>
                                            <h4>Book Design</h4>
                                            <p>Graphic</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 design">
                                <a class="ajax-link" href="single-work.html">
                                    <figure>
                                        <img src="img/portfolio/img-2.jpg" alt="">
                                        <figcaption>
                                            <h4>Notepad Design</h4>
                                            <p>Design</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 design graphic">
                                <a class="video-link" href="https://www.youtube.com/watch?v=k_okcNVZqqI">
                                    <figure>
                                        <img src="img/portfolio/img-3.jpg" alt="">
                                        <figcaption>
                                            <h4>Creative Cup</h4>
                                            <p>Graphic</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 design">
                                <a class="image-link" href="img/portfolio/img-4.jpg">
                                    <figure>
                                        <img src="img/portfolio/img-4.jpg" alt="">
                                        <figcaption>
                                            <h4>Business Card</h4>
                                            <p>Design</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 brand">
                                <a class="ajax-link" href="single-work.html">
                                    <figure>
                                        <img src="img/portfolio/img-5.jpg" alt="">
                                        <figcaption>
                                            <h4>Back Pack</h4>
                                            <p>Brand</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 design">
                                <a class="ajax-link" href="single-work.html">
                                    <figure>
                                        <img src="img/portfolio/img-6.jpg" alt="">
                                        <figcaption>
                                            <h4>Door Hangar</h4>
                                            <p>Design</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 graphic">
                                <a class="image-link" href="img/portfolio/img-7.jpg">
                                    <figure>
                                        <img src="img/portfolio/img-7.jpg" alt="">
                                        <figcaption>
                                            <h4>Notepad Design</h4>
                                            <p>graphic</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 brand">
                                <a class="image-link" href="img/portfolio/img-8.jpg">
                                    <figure>
                                        <img src="img/portfolio/img-8.jpg" alt="">
                                        <figcaption>
                                            <h4>Creative Flyer</h4>
                                            <p>Brand</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 brand">
                                <a class="video-link" href="https://www.youtube.com/watch?v=k_okcNVZqqI">
                                    <figure>
                                        <img src="img/portfolio/img-9.jpg" alt="">
                                        <figcaption>
                                            <h4>Mobile App</h4>
                                            <p>Brand</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 graphic">
                                <a class="image-link" href="img/portfolio/img-10.jpg">
                                    <figure>
                                        <img src="img/portfolio/img-10.jpg" alt="">
                                        <figcaption>
                                            <h4>Cup Design</h4>
                                            <p>Graphic</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                            <!--Portfolio Item-->
                            <div class="item col-lg-4 col-sm-6 brand graphic">
                                <a class="ajax-link" href="single-work.html">
                                    <figure>
                                        <img src="img/portfolio/img-11.jpg" alt="">
                                        <figcaption>
                                            <h4>Creative Box</h4>
                                            <p>brand</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                        </div>
                    </div>
                </section>
                <!--Porfolio Section End-->


             

                <!--Contact Section Start-->
                <section id="contact" class="contact-section pt-page">
                    <div class="section-container">

                        <!--Page Heading-->
                        <div class="page-heading">
                            <span class="icon"><i class="lnr lnr-envelope"></i></span>
                            <h2>Contact Me.</h2>
                        </div>

                        <!--Form Row-->
                        <div class="row mb-70">
                            <div class="col-lg-8  offset-lg-2">
                                <div class="subheading">
                                    <h3>Let's Talk</h3>
                                </div>

                                <!--Form Start-->
                                <form method="POST" action="{{ route('contact.message') }}">
                                    @csrf
                                    <div class="row">
                                        <!--Name Field-->
                                        <div class="col-md-6 mb-50">
                                            <span class="input">
                                                <input class="input__field cf-validate" type="text" id="cf-name" name="name" required />
                                                @error('name')
                                                   <span class="text-warning fw-bolder">{{ $message }}</span>
                                                @enderror
                                                <label class="input__label" for="cf-name">Name</label>
                                            </span>
                                        </div>

                                        <!--Email Field-->
                                        <div class="col-md-6 mb-50">
                                            <span class="input">
                                                <input class="input__field cf-validate" type="text" id="cf-email" name="email" required />
                                                @error('email')
                                                   <span class="text-warning fw-bolder">{{ $message }}</span>
                                                @enderror
                                                <label class="input__label" for="cf-email">Email</label>
                                            </span>
                                        </div>

                                        <!--Phone Field-->
                                        <div class="col-md-12 mb-50">
                                            <span class="input">
                                                <input class="input__field cf-validate" type="text" id="cf-email" name="phone" required />
                                                @error('phone')
                                                   <span class="text-warning fw-bolder">{{ $message }}</span>
                                                @enderror
                                                <label class="input__label" for="cf-email">Phone</label>
                                            </span>
                                        </div>

                                        <!--Message Box-->
                                        <div class="col-md-12 mb-30">
                                            <span class="input">
                                                <textarea type="text" class="input__field cf-validate" id="cf-message" name="message" rows="5" required ></textarea>
                                                @error('message')
                                                   <span class="text-warning fw-bolder">{{ $message }}</span>
                                                @enderror
                                                <label class="input__label" for="cf-message">How can we help you?</label>
                                            </span>
                                        </div>

                                        <div class="alert-container col-md-12"></div>

                                        <!--Submit Button-->
                                        <div class="col-md-12 text-center">
                                            <button type="submit" id="cf-submit" class="btn-main">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                                <!--Form End-->

                            </div>
                        </div>

                        <!--Contact Info Row Start-->
                        <div class="row contact-info mb-70">

                            <!--Contact Info Item-->
                            <div class="col-md-4 info-item">
                                <span class="icon"><i class="fas fa-paper-plane"></i></span>
                                <h5><a href="mailto:example@example.com">mk5316222@gmail.com</a></h5>
                            </div>

                            <!--Contact Info Item-->
                            <div class="col-md-4 info-item">
                                <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                                <h5>Mirpur Dhaka Bangladesh</h5>
                            </div>

                            <!--Contact Info Item-->
                            <div class="col-md-4 info-item">
                                <span class="icon"><i class="fas fa-phone"></i></span>
                                <h5>+8801885989461</h5>
                            </div>

                        </div>
                        <!--Contact Info Row End-->

                    </div>
                    <!--Google Map Start-->
                    <div class="google-map">
                            <div id="map" data-latitude="-37.817214" data-longitude="144.955925" data-zoom="15"></div>
                           
                    </div>
                    <!--Google Map End-->
                </section>
                <!--Contact Section End-->

               
               <!--Contact Section Start-->
               <section id="login" class="contact-section pt-page">
                  <div class="section-container">

                     <!--Page Heading-->
                     <div class="page-heading">
                           <span class="icon"><i class="lnr lnr-envelope"></i></span>
                           <h2>Only For Admin Login</h2>
                     </div>

                     <!--Form Row-->
                     <div class="row mb-70">
                           <div class="col-lg-8  offset-lg-2">
                              <div class="subheading">
                                 <h3>Admin Login</h3>
                              </div>

                              <!--Form Start-->
                              <form method="post" action="{{ route('login') }}">
                                 @csrf
                                 <div class="row">
                                       <!--Email Field-->
                                       <div class="col-md-12 mb-50">
                                          <span class="input">
                                             <input class="input__field" type="text" name="email" />
                                             @error('email')
                                                   <span class="text-warning fw-bolder">{{ $message }}</span>
                                             @enderror
                                             <label class="input__label" for="cf-email">Email</label>
                                          </span>
                                       </div>

                                       <div class="col-md-12 mb-50">
                                          <span class="input">
                                             <input class="input__field" type="password" name="password" />
                                             @error('password')
                                                   <span class="text-warning fw-bolder">{{ $message }}</span>
                                             @enderror
                                             <label class="input__label" for="cf-email">Password</label>
                                          </span>
                                       </div>

                                       <!--Submit Button-->
                                       <div class="col-md-12 text-center">
                                          <button type="submit" id="cf-submit" class="btn-main w-100"> Login </button>
                                       </div>
                                 </div>
                              </form>
                              <!--Form End-->
                           </div>
                     </div>

                     <!--Contact Info Row Start-->
                     <div class="row contact-info mb-70">

                           <!--Contact Info Item-->
                           <div class="col-md-4 info-item">
                              <span class="icon"><i class="fas fa-paper-plane"></i></span>
                              <h5><a href="mailto:example@example.com">mk5316222@gmail.com</a></h5>
                           </div>

                           <!--Contact Info Item-->
                           <div class="col-md-4 info-item">
                              <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                              <h5>Mirpur Dhaka Bangladesh</h5>
                           </div>

                           <!--Contact Info Item-->
                           <div class="col-md-4 info-item">
                              <span class="icon"><i class="fas fa-phone"></i></span>
                              <h5>+8801885989461</h5>
                           </div>

                     </div>
                     <!--Contact Info Row End-->

                  </div>
                  <!--Google Map Start-->
                  <div class="google-map">
                           <div id="map" data-latitude="-37.817214" data-longitude="144.955925" data-zoom="15"></div>
                        
                  </div>
                  <!--Google Map End-->
               </section>
               <!--Contact Section End-->


            </div>
            <!--Main End-->

        </div>

        <!--Ajax Portfolio Container Start-->
        <div class="ajax-portfolio-popup">
            <span class="ajax-loader"></span>
            <div class="navigation-wrap">
                <span class="popup-close"><i class="fas fa-times-circle"></i></span>
            </div>
            <div class="content-wrap">
                <div class="popup-content"></div>
            </div>
        </div>
        <!--Ajax Portfolio Container End-->

        <!--Jquery JS-->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!--Plugins JS-->
        <script src="{{ asset('js/plugins.min.js') }}"></script>
        <!--Google Map Api-->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key="></script>
        <!--Site Main JS-->
        <script src="{{ asset('js/main.js') }}"></script>

        <script src="{{ asset('js/main-demo.js') }}"></script>

    </body>

<!-- Mirrored from watson-vcard.netlify.app/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Apr 2022 21:00:57 GMT -->
</html>

