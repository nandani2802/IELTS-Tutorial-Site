@extends('layouts.app')

@section('content')
<!--==========================
      Product Featuress Section
    ============================-->
    <section id="features">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 offset-lg-4">
            <div class="section-header wow fadeIn" data-wow-duration="1s">
              <h3 class="section-title">How To Book Test?</h3>
              <span class="section-divider"></span>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 features-img">
            <img src="img/product-features.png" alt="" class="wow fadeInLeft">
          </div>

          <div class="col-lg-8 col-md-7 ">

            <div class="row">

              <div class="col-lg-6 col-md-6 box wow fadeInRight">
                <div class="icon"><img src="img/number-1.png"></div>
                <h4 class="title"><a href="">Search for the nearest test location</a></h4>
                <br>
                <p class="description">There are over 1,100 test locations across 140 countries carrying out IELTS Tests on multiple dates every year. You can find your nearest test centre <a href="https://www.ielts.org/book-a-test/find-a-test-location" target="_blank">here</a>.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                <div class="icon"><img src="img/number-2.png"></div>
                <h4 class="title"><a href="">Register for your IELTS Test</a></h4>
                <p class="description">IELTS Test booking can be done online by registering and making the payment.
                <br>
                Book your IELTS Test online with:
                <br>
                  <a href="https://ielts.britishcouncil.org/Default.aspx" target="_blank">British Council</a> OR
                  <a href="https://my.ieltsessentials.com/Home?_ga=2.158994746.1493429334.1586365382-1442951662.1586168875" target="_blank">IDP</a>
                <br>
                You can also <a href="https://www.britishcouncil.in/sites/default/files/ielts_registration_form_0.pdf" target="_blank">download the application form</a>, print it, fill up your details and submit it at your local test centre.
                <br><br>
                </p>
              </div>
              <div class="col-lg-12 col-md-12 box wow fadeInRight" data-wow-delay="0.2s">
                <div class="icon"><img src="img/numbre-3.png"></div>
                <h4 class="title"><a href="">Your test is booked</a></h4>
                <p class="description">Once your application gets processed, the centre will send you a confirmation letter providing the details about the date and time of your test.</p>
              </div>
              <!--<div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum dinoun trade capsule.</p>
              </div>-->
            </div>

          </div>

        </div>

      </div>

@endsection
