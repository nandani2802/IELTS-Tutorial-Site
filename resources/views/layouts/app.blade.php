<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>STUDY OVERSEAS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">


  <!-- Favicons -->
  <link href="img/logo1.png" rel="icon">
  <link href="img/logo1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" type="text/css" href="{{ asset('/lib/bootstrap/css/bootstrap.min.css')  }}">

  <!--Libraries CSS Files -->
  <link rel="stylesheet" type="text/css" href="{{ asset('/lib/animate/animate.min.css')  }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/lib/font-awesome/css/font-awesome.min.css')  }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/lib/ionicons/css/ionicons.min.css')  }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/lib/magnific-popup/magnific-popup.css')  }}">
   
   <link href="{{ asset('/css/aos.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
   <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    
<script src="{{ asset('/js/aos.js') }}" type="text/javascript"></script>


 
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto" style="margin-left:0px">STUDY OVERSEAS</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu" style="margin-right:-30px">
          <li class="menu-active"><a href="{{ route('index') }}">Home</a></li>
          <!--<li><a href="#about">IELTS</a></li>-->
          <li class="menu-has-children"><a href="#">IELTS</a>
                <ul>
                  <li><a href="{{ route('index') }}#about">What is IELTS?</a></li>
                  <li><a href="{{ route('index') }}#pricing">Types of IELTS</a></li>
                  <li><a href="{{ route('index') }}#pricing">Test format</a></li>
                  <li><a href="{{ route('bandDesc') }}#about">Band Calculator</a></li>
                  <li><a href="{{ route('bandDesc') }}#pricing">Band Descriptor</a></li>
                  <li><a href="{{ route('testbook') }}#features">How to book test?</a></li>
                </ul>
          </li>
          <li class="menu-has-children"><a href="#">Study Overseas</a>
                <ul>
                  <li><a href="{{ route('index') }}#team">Tutors</a></li>
                  <li><a href="{{ route('index') }}#gallery">Gallery</a></li>
                  <li><a href="{{ route('index') }}#faq">About Us</a></li>
                </ul>
          </li>
         <!-- <li><a href="#features">Features</a></li>
          <li><a href="#pricing">TYpe</a></li>-->
          <li class="menu-has-children"><a href="">Tutorials</a>
            <ul>
              <li><a href="{{ route('listening') }}#pricing">Listening</a></li>
              <li><a href="{{ route('reading') }}#pricing">Reading</a></li>
              <li class="menu-has-children"><a href="">Writing Task</a>
                <ul>
                  <li><a href="#">Writing Task 1</a>
                    <ul>
                      <li><a href="{{ route('writingT1') }}#pricing">Academic</a></li>
                      <li><a href="{{ route('writingT1GT') }}#pricing">General Tranning</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('writingT2') }}#pricing">Writing Task 2</a></li>
                </ul>
              </li>
              <li><a href="{{ route('speaking') }}#pricing">Speaking</a></li>
            </ul>
          </li>
          @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('login') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                   {{ Auth::user()->name }} <!--<span class="caret"></span>-->
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a style="color: gray;" class="dropdown-item" href="{{ route('logout') }}" 
                  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                  {{ __('Logout') }} </a>
                  
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                </div>
             </li>
           @endguest
          <li><a href="{{route('index')}}#contact">Contact Us</a></li>
          <li><a href="{{route('doubts')}}#pricing"><img src="{{asset('img/doubt.png')}}" height="20" width="20" title="Doubts" data-toggle="tooltip"></a></li>
          <li><a href="{{route('writing')}}#pricing"><img src="{{asset('img/document.png')}}" height="20" width="20" data-toggle="tooltip" title="Writing Task"></a></li>
          
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
 <section id="intro">

    <div class="intro-text">
      <h2>Welcome to STUDY OVERSEAS</h2>
      <p>It’s about pushing your limits and venturing beyond your comfort zone…</p>
      <a href="Evocab#pricing" class="btn-get-started scrollto">Everyday Vocabulary</a>
    </div>

    
    <center><div class="product-screens col-md-12 col-sm-12 col-lg-12 img-responsive">

      <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
        <a href="speaking#pricing"> <img src="img/speak.jpg" alt="" width="auto" ></a>
      </div>

      <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
         <a href="reading#pricing"><img src="img/read.jpg" alt=""  width="auto" ></a>
      </div>

      <div class="product-screen-3 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="0.6s">
        <a href="listening#pricing"> <img src="img/listen.jpg" alt=""  width="auto" ></a>
      </div>
      <div class="product-screen-4 wow fadeInUp" data-wow-duration="0.6s">
        <a href="writingT1#pricing"> <img src="img/write.jpg" alt=""  width="auto" ></a>
      </div>

    </div></center>

  </section><!-- #intro -->

    <main class="py-4">
            @yield('content')
        </main>



  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
      <section id="clients">
      <div class="container">

        <div class="row wow fadeInUp">
          <div class="col-md-6"><h1><a href="#intro" class="scrollto" style="margin-left:0px">STUDY OVERSEAS</a></h1></div>
          <div class="col-md-1"></div>
          <div class="col-md-5" >
            <a href="https://www.britishcouncil.in/" target="_blank"><img src="img/clients/client-1.jpg" alt="" height="80" width="120" style="padding-right: 20px"></a>
            <a href="https://www.idp.com/india/study-abroad/" target="_blank"><img src="img/clients/client-2.png" alt="" height="80" width="120" style="padding-right: 20px"></a>
            <a href="https://www.cambridgeenglish.org/" target="_blank"><img src="img/clients/client-3.jpg" alt="" height="80" width="120" style="padding-right: 20px"></a>
          </div>  
        </div>
      </div>
    </section><!-- #more-features -->

    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
         <!--  <div class="copyright">
            &copy; Copyright <strong>STUDY OVERSEAS</strong>. All Rights Reserved
          </div> -->
          <div class="credits" >
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
           
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
          </div>
        </div>
        <div class="col-lg-6">
          <!--<nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>-->
          <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>

<script>
       AOS.init({
        easing: 'ease-in-out',
        duration: 1000
                   });
</script>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>