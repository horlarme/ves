<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="image/favicon.png">
        <title>VictorEhi - @yield("title","Home")</title>
        <!-- Bootstrap core CSS -->
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('css/settings.css')}}" rel="stylesheet">
        <link href="{{asset('js/google-code-prettify/prettify.css')}}" rel="stylesheet">
        <link href="{{asset('js/fancybox/jquery.fancybox.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('js/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.2')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="{{asset('css/color/aqua.css')}}" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700italic,700,900,900italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
        <link href="{{asset('type/fontello.css')}}" rel="stylesheet">
        <link href="{{asset('type/budicons.css')}}" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src="{{asset('js/html5shiv.js')}}"></script>
              <script src="https://oss.maxcdn.com/libs/respond.{{asset('js/1.3.0/respond.min.js')}}"></script>
              <![endif]-->
    </head>
    <body>
        <div class="body-wrapper">
            <div class="navbar">
                <div class="navbar-header">
                    <div class="container">
                        <div class="basic-wrapper"> <a class="btn responsive-menu pull-right" data-toggle="collapse" data-target=".navbar-collapse"><i class='icon-menu-1'></i></a> <a class="navbar-brand" href="{{route('home_page')}}"><img src="image/logo.png" alt="" data-src="image/logo.png" data-ret="image/logo@2x.png" class="retina" /></a> </div>
                        <nav class="collapse navbar-collapse pull-right">
                            <ul class="nav navbar-nav">
                                <li class="dropdown"><a href="{{route('home_page')}}" class="dropdown-toggle js-activated">Home</a></li>
                                <li class="dropdown"><a href="{{route('about_page')}}" class="dropdown-toggle js-activated">Bio</a></li>
<!--                                <li class="dropdown"><a href="{{route('blog_page')}}" class="dropdown-toggle js-activated">Publications</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Articles</a></li>
                                        <li><a href="#">Press Release</a></li>
                                    </ul>
                                </li>-->
                                <li class="dropdown"><a href="{{route('portfolio_page')}}" class="dropdown-toggle js-activated">Portfolio</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('drawings_page')}}">Drawings</a></li>
                                        <li><a href="{{route('paintings_page')}}">Paintings</a></li>
                                        <li><a href="{{route('installation_page')}}">Installations</a></li>
                                        <li><a href="{{route('sculptings_perforations_page')}}">Sculptings & Perforations</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{route('contact_page')}}" class="dropdown-toggle js-activated">Contact</a>
                                </li>
                            </ul>
                            <ul class="social pull-right">
                                <li><a href="#"><i class="icon-s-instagram"></i></a></li>
                                <li><a href="#"><i class="icon-s-flickr"></i></a></li>
                                <li><a href="#"><i class="icon-s-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-s-facebook"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--/.nav-collapse --> 
            </div>
            <!--/.navbar -->

@yield('content')

        <footer class="footer black-wrapper">
            <div class="container inner">
                <p class="pull-left">© 2014 Victor Ehikamenor Studio. All rights reserved.</a>.</p>
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-s-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-s-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-s-instagram"></i></a></li>
                </ul>
            </div>
            <!-- .container --> 
        </footer>
        <!-- /footer --> 

    </div>
    <!-- /.body-wrapper --> 
    <script src="{{asset('js/jquery.min.js')}}"></script> 
    <script src="{{asset('js/bootstrap.min.js')}}"></script> 
    <script src="{{asset('js/twitter-bootstrap-hover-dropdown.min.js')}}"></script> 
    <script src="{{asset('js/jquery.themepunch.plugins.min.js')}}"></script> 
    <script src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script> 
    <script src="{{asset('js/jquery.fancybox.pack.js')}}"></script> 
    <script src="{{asset('js/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.2')}}"></script> 
    <script src="{{asset('js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.0')}}"></script> 
    <script src="{{asset('js/jquery.isotope.min.js')}}"></script> 
    <script src="{{asset('js/jquery.easytabs.min.js')}}"></script> 
    <script src="{{asset('js/idangerous.swiper-2.1.min.js')}}"></script> 
    <script src="{{asset('js/jquery.fitvids.js')}}"></script> 
    <script src="{{asset('js/jquery.sticky.js')}}"></script> 
    <script src="{{asset('js/google-code-prettify/prettify.js')}}"></script> 
    <script src="{{asset('js/jquery.slickforms.js')}}"></script> 
    <script src="{{asset('js/instafeed.min.js')}}"></script> 
    <script src="{{asset('js/jquery.dcflickr.1.0.js')}}"></script> 
    <script src="{{asset('js/retina.js')}}"></script> 
    <script src="{{asset('js/classie.js')}}"></script> 
    <script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>