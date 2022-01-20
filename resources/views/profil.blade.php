<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Halaman @yield ('title')</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        <!-- 
        Multi Profile
        http://www.templatemo.com/preview/templatemo_457_multi_profile
        -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
        <link href="{{ asset('multi/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('multi/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('multi/css/templatemo-style.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="templatemo-container">
        <!-- header -->
        <div class="header-bg">
            <div class="container">
              @yield ('header')  
        </div>
        <!-- end header -->
        <!-- header image -->
        <div class="header-img-3"></div>
        <!-- end header image -->
        <!-- Welcome message -->
        <div class="welcome-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="welcome-wrapper">
                            <h2 class="welcome-title text-uppercase">Work</h2>
                            <img src="{{ asset('multi/img/welcome-divider-lines.png') }}" alt="Welcome divider" class="welcome-divider-lines-img">
                            <p class="welcome-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere lectus augue, non rhoncus erat accumsan eu. Sed dictum sem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome message -->
        <!-- main content -->
        <section class="templatemo-container">
            <div class="container">
                <div class="row margin-bottom-30">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title">Profile</h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small">Proin Gravidani</p>
                    </div>
                </div>
                <div class="row margin-bottom-30">
                    <div class="col-lg-12">
                        <ul id="filters" class="folio-filters">
                            <li class="current"><a href="#" data-filter="*">All</a></li>
                            <li class=""><a href="#" data-filter=".design">Design</a></li>
                            <li class=""><a href="#" data-filter=".web">Web</a></li>
                            <li class=""><a href="#" data-filter=".branding">Branding</a></li>
                            <li class=""><a href="#" data-filter=".print">Print</a></li>
                        </ul>
                    </div>
                </div>
                <div id="folio-container" class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item design">
                        <img src="{{ asset('multi/img/18.jpg') }}" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item design">
                        <img src="{{ asset('multi/img/19.jpg') }}" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item design">
                        <img src="{{ asset('multi/img/20.jpg') }}" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item design">
                        <img src="{{ asset('multi/img/21.jpg') }}" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item web">
                        <img src="{{ asset('multi/img/22.jpg') }}" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item web">
                        <img src="{{ asset('multi/img/23.jpg') }}" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item web">
                        <img src="{{ asset('multi/img/24.jpg') }}" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item branding">
                        <img src="{{ asset('multi/img/25.jpg') }}" alt="Image" class="img-thumbnail">
                        </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item branding">
                        <img src="{{ asset('multi/img/26.jpg') }}" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item branding">
                        <img src="{{ asset('multi/img/27.jpg') }}" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item print">
                        <img src="{{ asset('multi/img/28.jpg') }}" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item print">
                        <img src="{{ asset('multi/img/29.jpg') }}" alt="Image" class="img-thumbnail">
                    </div>
                </div>
            </div>
        </section>
    <div class="blue-divider effect1">
            <div class="dark-blue-bg"></div>
            <div class="blue-divider-bg-graphic"></div>
            <div class="blue-bg"></div>
        </div>
        <section class="templatemo-container blue-bg footer-nav effect1">
            <div class="container">
            <div class="col-lg-2 col-md-2 col-sm-6 footer-block">
                    <h3 class="text-uppercase">Main menu</h3>
                    <nav class="text-uppercase templatemo-nav-2">
                        <ul>
                            <li><a href="{{ asset('multi/index.html') }}">home</a></li>
                            <li><a href="{{ asset('multi/about.html') }}">About</a></li>
                            <li><a href="{{ asset('multi/profile.html') }}">Profile</a></li>
                            <li><a href="{{ asset('multi/contact.html') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 footer-block">
                    
                  @yield ('content')  
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 footer-block">
                    <h3 class="text-uppercase">Resources</h3>
                    <ul>
                        <li><a href="#">Aenean leogula</a></li>
                        <li><a href="#">Porttitor euconsequat</a></li>
                        <li><a href="#">Vitae eleifend ac enim</a></li>
                        <li><a href="#">Aliquam lorante</a></li>
                        <li><a href="#">Phasellus viverra nulla</a></li>
                        <li><a href="#">Dmetus varius</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 footer-block">
                    <h3 class="text-uppercase">Features</h3>
                    <ul>
                        <li><a href="#">lorem quis bibendum</a></li>
                        <li><a href="#">Auctor nisi elit conser</a></li>
                        <li><a href="#">at ipsum, nec sagittis</a></li>
                        <li><a href="#">Duis sed odio sit amet</a></li>
                        <li><a href="#">Fnibh vulpu</a></li>
                        <li><a href="#">ftate cursus a sit amet</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end main content -->
        <footer class="text-center">
            @yield('footer')
        </footer>

        <!-- JS -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>      <!-- Isotope, http://isotope.metafizzy.co -->
        <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
        <script>
            // All images are loaded. Call isotope
            $(window).load(function() {
                 var $container = $('#folio-container');
                // init
                $container.isotope({
                // options
                itemSelector: '.folio-item',
                animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    },
                });

                // filter items when filter link is clicked
                jQuery('#filters a').click(function(){
                    var selector = $(this).attr('data-filter');
                    $container.isotope({ filter: selector });
                    return false;
                });

                jQuery('#filters li a').click(function(){

                    jQuery('#filters li').removeClass('current');
                    jQuery(this).parent().addClass('current');
                });
            });
        </script>
    </body>
</html>