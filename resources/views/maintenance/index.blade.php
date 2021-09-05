<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $maintenance->title }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('public/images/logo_kecil.png') }}">

    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900" rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ url('public/frontend_2/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('public/frontend_2/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/frontend_2/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/frontend_2/css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('public/frontend_2/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('public/frontend_2/css/jquery.mCustomScrollbar.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ url('public/frontend_2/css/style.css') }}">
</head>

<body>
    <div class="background">
        <div class="layer background-image page-bg-1"></div>
        
        <div class="layer clouds">
              <div class="cloud cloud-1">
                  <img src="{{ url('public/frontend_2/content/img/cloud-1.png') }}" width="1600" height="850" alt="#">
              </div>
              
              <div class="cloud cloud-2">
                  <img src="{{ url('public/frontend_2/content/img/cloud-2.png') }}" width="1600" height="850" alt="#">
              </div>
              
              <div class="cloud cloud-3">
                  <img src="{{ url('public/frontend_2/content/img/cloud-1.png') }}" width="1600" height="850" alt="#">
              </div>
        </div>
      </div><!-- .background -->
      
      <header class="site-header">
        <div class="row header-wrap">
              <div class="col-sm-5 header-box">
                  <div id="main-menu" class="main-menu">
                      <ul>
                          <li>
                              <a href="#about">
                                  <span class="hidden-xs hidden-sm">
                                      <i class="hover-label">About</i>
                                      About
                                  </span>
                                  <span class="hidden-md hidden-lg icon">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve" width="25" height="25">
                                          <path fill="#333333" d="M12.5,25C5.6,25,0,19.4,0,12.5C0,5.6,5.6,0,12.5,0C19.4,0,25,5.6,25,12.5C25,19.4,19.4,25,12.5,25L12.5,25z
                                          M12.5,0.9C6.1,0.9,0.9,6.1,0.9,12.5c0,6.4,5.2,11.6,11.6,11.6c6.4,0,11.6-5.2,11.6-11.6C24.1,6.1,18.9,0.9,12.5,0.9L12.5,0.9z
                                          M11.6,20.2V9.3h1.8v10.9H11.6L11.6,20.2z M12.5,7.5c-0.8,0-1.4-0.6-1.4-1.4c0-0.8,0.6-1.4,1.4-1.4c0.8,0,1.4,0.6,1.4,1.4
                                          C13.9,6.9,13.3,7.5,12.5,7.5L12.5,7.5z"/>
                                      </svg>
                                  </span>
                              </a>
                          </li><!--
                          --><li>
                              <a href="#contact">
                                  <span class="hidden-xs hidden-sm">
                                      <i class="hover-label">Contact</i>
                                      Contact
                                  </span>
                                  <span class="hidden-md hidden-lg icon">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 29 18" enable-background="new 0 0 29 18" xml:space="preserve" width="29" height="18">
                                          <path fill="#333333" d="M26.4,0H2.6C1.2,0,0,1.2,0,2.6v12.9C0,16.8,1.2,18,2.6,18h23.7c1.5,0,2.6-1.1,2.6-2.6V2.6
                                          C29,1.2,27.8,0,26.4,0L26.4,0z M26.4,1c0.2,0,0.3,0,0.4,0.1l-12.3,9.5L2.2,1.1C2.3,1.1,2.5,1,2.6,1H26.4L26.4,1z M2.6,17
                                          c-0.2,0-0.3,0-0.4-0.1l8.4-6.5L9.8,9.7l-8.4,6.5c-0.2-0.2-0.3-0.5-0.3-0.8V2.6c0-0.3,0.1-0.6,0.3-0.8l13.2,10.2L27.7,1.7
                                          c0.2,0.2,0.3,0.5,0.3,0.8v12.9c0,0.3-0.1,0.6-0.3,0.8l-8.5-6.5l-0.8,0.7l8.4,6.5c-0.1,0-0.3,0.1-0.4,0.1H2.6L2.6,17z"/>
                                      </svg>
                                  </span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div><!-- .header-box -->
              
              <div class="col-sm-2 header-box logo-box text-center">
                  <a href="index.html"><img src="{{ url('public/images/logo_majutokoku.png') }}" width="208" height="78" alt="#"></a>
              </div><!-- .header-box -->
              
              <div class="col-sm-5 header-box text-right hidden-xs">
                  <!-- demonstration - //keith-wood.name/countdownRef.html -->
                  <div class="countdown-box">
                      {{-- <div class="countdown" data-date="2021, 12, 1"></div> --}}
                      <div class="countdown" data-date="{{ \Carbon\Carbon::parse($maintenance->sampai)->format('Y, m, d') }}"></div>
                  </div>
              </div><!-- .header-box -->
        </div>
      </header><!-- .site-header -->
      
      <div class="main">
        <section id="home" class="section active">
              <div class="section-wrap">
                  <div class="section-content">
                      <div class="container">
                          <div class="text-center">
                              <div class="clearfix"></div>
                              <h1 class="h1-section-title"
                                  data-animation="fadeInDown"
                                  data-out-animation="fadeOutUp"
                                  data-out-animation-delay="300">{{ $maintenance->title }}</h1>
                              
                              <div class="row section-description">
                                  <div class="col-sm-8 col-sm-offset-2">
                                      <p class="lead"
                                          data-animation="fadeInDown"
                                          data-animation-delay="300"
                                          data-out-animation="fadeOutUp"
                                          data-out-animation-delay="300">{{ $maintenance->deskripsi }}</p>
                                  </div>
                              </div>
                              
                              {{-- <a href="#"
                                  class="btn btn-default"
                                  data-hover="Notify me"
                                  data-animation="fadeInDown"
                                  data-animation-delay="600"
                                  data-out-animation="fadeOutUp"
                                  data-out-animation-delay="600"
                                  data-toggle="modal"
                                  data-target="#notify-my"><span class="button-label">Notify me</span></a> --}}
                          </div>
                      </div>
                  </div><!-- .section-content -->
              </div><!-- .section-wrap -->
        </section><!-- #home.section -->
        
        <section id="about" class="section">
              <div class="section-wrap">
                  <div class="section-content">
                      <div class="container">
                          <h2 class="text-center section-title"
                              data-animation="fadeInDown"
                              data-animation-delay="100"
                              data-out-animation="fadeOutUp"
                              data-out-animation-delay="100">About</h2>
                          
                          <div class="row section-description text-center">
                              <div class="col-sm-12 col-md-10 col-md-offset-1">
                                  <p class="lead"
                                      data-animation="fadeInDown"
                                      data-animation-delay="100"
                                      data-out-animation="fadeOutUp"
                                      data-out-animation-delay="200">Portland is a creative, professional, responsive HTML5 coming soon template, perfect to keep your audience informed about the official website launch. If you're looking for something trendy, that's your top choice.</p>
                              </div>
                          </div>
                          
                          <div class="carousel-box">
                              <div class="carousel">
                                  <div class="item" data-animation="fadeInUp" data-animation-delay="100" data-out-animation="fadeOutDown" data-out-animation-delay="100">
                                      <div class="features-box">
                                          <div class="icon">
                                              <img src="{{ url('public/frontend_2/img/svg/features-1.svg') }}" width="90" height="90" alt="#">
                                          </div>
                                          <a href="#" class="btn btn-sm btn-block btn-inverse" data-hover="Read More"><span class="button-label">Responsive</span></a>
                                      </div><!-- .features-box -->
                                  </div>
                                  
                                  <div class="item" data-animation="fadeInUp" data-animation-delay="200" data-out-animation="fadeOutDown" data-out-animation-delay="200">
                                      <div class="features-box">
                                          <div class="icon">
                                              <img src="{{ url('public/frontend_2/img/svg/features-2.svg') }}" width="90" height="90" alt="#">
                                          </div>
                                          <a href="#" class="btn btn-sm btn-block btn-inverse" data-hover="Read More"><span class="button-label">Valid</span></a>
                                      </div><!-- .features-box -->
                                  </div>
                                  
                                  <div class="item" data-animation="fadeInUp" data-animation-delay="300" data-out-animation="fadeOutDown" data-out-animation-delay="300">
                                      <div class="features-box">
                                          <div class="icon">
                                              <img src="{{ url('public/frontend_2/img/svg/features-3.svg') }}" width="90" height="90" alt="#">
                                          </div>
                                          <a href="#" class="btn btn-sm btn-block btn-inverse" data-hover="Read More"><span class="button-label">Customizable</span></a>
                                      </div><!-- .features-box -->
                                  </div>
                                  
                                  <div class="item" data-animation="fadeInUp" data-animation-delay="400" data-out-animation="fadeOutDown" data-out-animation-delay="400">
                                      <div class="features-box">
                                          <div class="icon">
                                              <img src="{{ url('public/frontend_2/img/svg/features-4.svg') }}" width="90" height="90" alt="#">
                                          </div>
                                          <a href="#" class="btn btn-sm btn-block btn-inverse" data-hover="Read More"><span class="button-label">Retina</span></a>
                                      </div><!-- .features-box -->
                                  </div>
                              </div><!-- .carousel -->
                              
                              <div class="carousel-controls">
                                  <a href="#" class="nav-item prev">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 10 11" enable-background="new 0 0 10 11" xml:space="preserve" width="10" height="11">
                                          <path fill="#111111" d="M10,6H0V5h10V6L10,6z M0,6V5l5-5l1,0L0,6z M5,11L0,6V5l6,6L5,11z"/>
                                      </svg>
                                  </a>
                                  <a href="#" class="nav-item next">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 10 11" enable-background="new 0 0 10 11" xml:space="preserve" width="10" height="11">
                                          <path fill="#111111" d="M0,6V5h10v1H0L0,6z M4,0h1l5,5v1L4,0z M4,11l6-6v1l-5,5L4,11z"/>
                                      </svg>
                                  </a>
                              </div>
                          </div><!-- .carousel-box -->
                      </div>
                  </div><!-- .section-content -->
              </div><!-- .section-wrap -->
        </section><!-- #about.section -->
        
        <section id="contact" class="section">
              <div class="section-wrap">
                  <div class="section-content">
                      <div class="container">
                          <div class="contact-wrap relative">
                              <div class="row">
                                  <div class="col-xs-offset-0 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                                      <h2 class="text-center section-title"
                                          data-animation="fadeInDown"
                                          data-animation-delay="900"
                                          data-out-animation="fadeOutUp"
                                          data-out-animation-delay="100">Contact</h2>
                                  
                                      <form class="contact-form" method="post">
                                          <div class="row">
                                              <div class="col-sm-6 form-group name">
                                                  <input type="text"
                                                      class="form-control"
                                                      name="name"
                                                      placeholder="Name"
                                                      data-animation="fadeInLeft"
                                                      data-animation-delay="100"
                                                      data-out-animation="fadeOutLeft"
                                                      data-out-animation-delay="900">
                                              </div>
                                          
                                              <div class="col-sm-6 form-group email">
                                                  <input type="email"
                                                      class="form-control"
                                                      name="email"
                                                      placeholder="Email"
                                                      data-animation="fadeInLeft"
                                                      data-animation-delay="100"
                                                      data-out-animation="fadeOutLeft"
                                                      data-out-animation-delay="900">
                                              </div>
                                          </div>
                              
                                          <div class="form-group comment">
                                              <textarea class="form-control"
                                                  name="comment"
                                                  placeholder="Message"
                                                  data-animation="fadeInLeft"
                                                  data-animation-delay="100"
                                                  data-out-animation="fadeOutLeft"
                                                  data-out-animation-delay="900"></textarea>
                                          </div>
                                          
                                          <div class="button-box text-center">
                                              <button type="submit"
                                                  data-hover="Send"
                                                  class="btn btn-default progress-button btn-submit"
                                                  data-animation="fadeInDown"
                                                  data-animation-delay="900"
                                                  data-out-animation="fadeOutUp"
                                                  data-out-animation-delay="100">
                                                  <span class="button-label">Send</span>
                                                  <span class="success">
                                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 29 23" enable-background="new 0 0 29 23" xml:space="preserve">
                                                          <polyline fill="#FFFFFF" points="0.3,10.2 1.8,8.8 11.4,19.3 27.4,0.4 28.9,1.7 12.9,20.6 11.5,22.3 9.9,20.6 0.3,10.2 "/>
                                                      </svg>
                                                  </span>
                                                  <span class="error"></span>
                                                  <span class="progress"></span>
                                              </button>
                                          </div>
                                      </form>
                                  
                                      <div class="row">
                                          <div class="col-sm-5 col-md-5">
                                              <div class="contacts-box xs-text-center"
                                                  data-animation="fadeInDown"
                                                  data-animation-delay="1000"
                                                  data-out-animation="fadeOutUp"
                                                  data-out-animation-delay="100">
                                                  <div class="icon">
                                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 15 23" enable-background="new 0 0 15 23" xml:space="preserve" width="15" height="23">
                                                          <path fill="#111111" d="M7.5,0C3.4,0,0,3.4,0,7.6c0,1.7,1.1,4.4,3.3,8.4c1.5,2.8,3.1,5.2,3.1,5.3L7.5,23l1.1-1.7
                                                          c0.1-0.1,1.6-2.4,3.1-5.3c2.2-4,3.3-6.7,3.3-8.4C15,3.4,11.6,0,7.5,0L7.5,0z M7.5,11.5c-2.1,0-3.9-1.8-3.9-3.9
                                                          c0-2.2,1.7-3.9,3.9-3.9c2.1,0,3.9,1.8,3.9,3.9C11.4,9.7,9.6,11.5,7.5,11.5L7.5,11.5z"/>
                                                      </svg>
                                                  </div>
                                                  <div class="text">
                                                      <a href="#map" class="map-show">123 Main Street city, AB 0123<br>
                                                      345 Not Main Street city, CD 4567</a>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div class="col-sm-3 col-md-3">
                                              <div class="contacts-box xs-text-center"
                                                  data-animation="fadeInDown"
                                                  data-animation-delay="1000"
                                                  data-out-animation="fadeOutUp"
                                                  data-out-animation-delay="100">
                                                  <div class="icon">
                                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 21" enable-background="new 0 0 20 21" xml:space="preserve" width="20" height="21">
                                                          <path fill="#111111" d="M1.6,2.1c0.3-0.3,0.8-0.7,1.2-0.9C3.3,0.8,4,1,4.9,1.6c1.2,0.8,2.8,2.6,2.6,4.1c-0.1,0.6-0.4,1.2-1,1.8
                                                          C6,8,5.4,8.4,4.9,8.7l7.4,7.3c0.3-0.5,0.7-1.1,1.2-1.7c0.6-0.6,1.2-0.9,1.8-0.9c1.5-0.1,3.4,1.7,4.2,3c0.5,0.8,0.6,1.4,0.3,1.8
                                                          c-0.3,0.5-0.7,1-1.1,1.4c-2.6,2.6-6.3,1.4-8.1,0.2c-1-0.7-3.4-2.5-5.3-4.4c-2-2-3.5-4-4.3-5.1C0.4,9.1-1.2,4.8,1.6,2.1L1.6,2.1z"/>
                                                      </svg>
                                                  </div>
                                                  <div class="text">
                                                      012-345-6789<br>
                                                      025-698-9658
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div class="col-sm-4">
                                              <div class="contacts-box xs-text-center"
                                                  data-animation="fadeInDown"
                                                  data-animation-delay="1000"
                                                  data-out-animation="fadeOutUp"
                                                  data-out-animation-delay="100">
                                                  <div class="icon">
                                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 16" enable-background="new 0 0 24 16" xml:space="preserve" width="24" height="16">
                                                          <path fill="#111111" d="M12,9.8L1.1,1.3C1.4,1.1,1.8,1,2.2,1h19.6c0.4,0,0.8,0.1,1.1,0.3L12,9.8L12,9.8z M23.6,15.1l-7.7-6l-0.7,0.5
                                                          l7.7,6c-0.3,0.2-0.7,0.3-1.1,0.3H2.2c-0.4,0-0.8-0.1-1.1-0.3l7.7-6.1L8.1,9.1l-7.7,6C0.2,14.8,0,14.3,0,13.9V3.1
                                                          c0-0.5,0.2-0.9,0.4-1.3l11.6,9l11.6-9C23.8,2.2,24,2.7,24,3.1v10.7C24,14.3,23.8,14.8,23.6,15.1L23.6,15.1z"/>
                                                      </svg>
                                                  </div>
                                                  <div class="text">
                                                      myemail@example.com<br>
                                                      heremail@sample.com
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                  
                              <div class="clearfix"></div>
                              
                              <div id="map" class="map-box">
                                  <div class="map-wrap">
                                      <a href="#" class="close">&times;</a>
                                      
                                      <div
                                          class="map-canvas"
                                          data-zoom="6"
                                          data-lat="40.748441"
                                          data-lng="-73.985664"
                                          data-title="Bryant Park"
                                          data-content="New York, NY">
                                      </div>
                                  </div>
                              </div>
                          </div><!-- .contact-wrap -->
                      </div>
                  </div><!-- .section-content -->
              </div><!-- .section-wrap -->
        </section><!-- #contact.section -->
      </div><!-- .main -->
      
      <footer class="site-footer">
        <div class="container-fluid text-center" style="margin-top: 5%">
              <div class="copyright">Website by majutokoku<br>©  {{ date('Y') }}. All Right Reserved.</div>
              {{-- <div class="social">
                  <a href="https://www.facebook.com/ItemBridge"><i class="fa fa-facebook"></i></a>
                  <a href="https://twitter.com/Itembridge"><i class="fa fa-twitter"></i></a>
                  <a href="https://plus.google.com/+Itembridge/"><i class="fa fa-google-plus"></i></a>
                  <a href="https://www.behance.net/itembridge"><i class="fa fa-behance"></i></a>
              </div> --}}
        </div>
      </footer><!-- .site-footer -->
      
      <div class="modal fade text-center notify-my" id="notify-my" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                  </div>
                  
                  <div class="modal-body">
                      <h4 class="modal-title">Notify me</h4>
                      <p>Enter your email address to get notified when site is ready</p>
                      
                      <form class="under-construction" method="post">
                          <div class="form-group email">
                              <input class="form-control email" type="email" name="email" placeholder="Insert your e-mail">
                          </div>
                          <button data-hover="Send" class="btn btn-default btn-block progress-button send-email">
                              <span class="button-label">Send</span>
                              <span class="success">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 29 23" enable-background="new 0 0 29 23" xml:space="preserve">
                                      <polyline fill="#FFFFFF" points="0.3,10.2 1.8,8.8 11.4,19.3 27.4,0.4 28.9,1.7 12.9,20.6 11.5,22.3 9.9,20.6 0.3,10.2 "/>
                                  </svg>
                              </span>
                              <span class="error"></span>
                              <span class="progress"></span>
                          </button>
                      </form>
      
                      <!-- MailChimp -->
      <!-- 				<form action="" method="post" name="mc-embedded-subscribe-form" class="validate mailchimp" target="_blank" novalidate>
                          <div id="mc_embed_signup_scroll">
                              <div class="mc-field-group form-group">
                                  <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
                                  <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">
                              </div>
                              <div id="mce-responses" class="clear">
                                  <div class="response" id="mce-error-response" style="display:none"></div>
                                  <div class="response" id="mce-success-response" style="display:none"></div>
                              </div>
                              <div style="position: absolute; left: -5000px;">
                                  <input type="text" name="b_69007f000c70b89e124b9308d_1225ba8aee" tabindex="-1" value="">
                              </div>
                              <div class="clearfix">
                                  <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-default">
                              </div>
                          </div>
                      </form> -->
                  </div>
              </div>
        </div>
      </div>
</body>
<!--[if (!IE)|(gt IE 8)]><!-->
    <script src="{{ url('public/frontend_2/js/jquery-2.1.3.min.js') }}"></script>
    <!--<![endif]-->
    
    <!--[if lte IE 8]>
      <script src="js/jquery-1.9.1.min.js"></script>
    <![endif]-->
    <script src="{{ url('public/frontend_2/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/frontend_2/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('public/frontend_2/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('public/frontend_2/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ url('public/frontend_2/js/jquery.plugin.min.js') }}"></script> 
    <script src="{{ url('public/frontend_2/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ url('public/frontend_2/js/jquery.mCustomScrollbar.min.js') }}"></script>
    <script src="{{ url('public/frontend_2/js/jquery.touchwipe.min.js') }}"></script>
    <script src="{{ url('public/frontend_2/js/included-plagins.js') }}"></script>
    <script src="{{ url('public/frontend_2/js/froogaloop2.min.js') }}"></script>
    <script src="{{ url('public/frontend_2/js/main.js') }}"></script>
</html>