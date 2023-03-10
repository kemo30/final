<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('assets/front/./css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/linearicons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/ionicons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/featherIcons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/swiper.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/slick.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/fotorama.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/lightgallery.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/aos.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/hamburgers.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/./css/index.css')}}">
  <link rel="stylesheet" href="{{asset('assets/back/plugins/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{asset('assets/back/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <link rel="shortcut icon" href="{{asset('assets/front/./images/favicon.png')}}" type="image/png" sizes="16x16 32x32">
  <title>ASCD</title>
</head>

<body>

  <!-- <div class="loading-div">
    <img src="{{asset('assets/front/./images/icons/loading.gif')}}" alt="img">
  </div> -->

  <!-- start header -->
  <div class="header-md">
    <div class="logo-lines">
      <div class="container">
        <div class="lines hamburger hamburger--elastic">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>
        <div class="logo-img">
          <a href="{{ route('home') }}">
            <img src="{{asset('assets/front/./images/logo/logo.png')}}" alt="img">
          </a>
        </div>
      </div>
    </div>

    <div class="main-header-md-ul-div">
      <ul class="main-header-md-ul">
        <li class="active-li">
          <a href="{{ route('home') }}">
            <span>
              {{ __('Home') }} 
            </span>
          </a>
        </li>
        <li>
          <a href="./about.html">
            <span>
              {{__('About Us')}}
            </span>
          </a>
        </li>
        <li class="drop-li">
          <a href="" class="drop-a">
            <span>
              {{__('Services')}}
            </span>
            <i class="ion-chevron-down"></i>
          </a>
          <ul class="dropped-ul">
            <li>
              <a href="./service-details.html">
                <span>
                  GIT & HEPATOLOGY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  INTERNAL MEDICINE & DIABETES DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  PSYCHIATRIST DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  OPHTHALMOLOGY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  VASCULAR SURGERY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  CARDIOLOGY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  UROLOGY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  OBSTETRIC & GYNECOLOGY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  PEDIATRIC DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  ENT DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  DERMATOLOGY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  DENTAL DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  GENERAL SURGERY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  ORTHOPEDIC & SPINAL SURGERY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  ORTHOPEDIC DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  RHEUMATOLOGY & ARTHRITIS DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  PHYSIOTHERAPY DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  GENERAL PRACTITIONER DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  HOME CARE DEP
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  LABORATORY
                </span>
              </a>
            </li>
            <li>
              <a href="./service-details.html">
                <span>
                  RADIOLOGY DEP
                </span>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="{{ route('doctors') }}">
            <span>
              {{__('Doctors')}}
            </span>
          </a>
        </li>
        <li>
          <a href="{{route('news_events')}}">
            <span>
              {{__('News & Events')}}
            </span>
          </a>
        </li>
       
        <li>
          <a href="{{ route('front.gallery') }}">
            <span>
              {{__('Gallary')}}
            </span>
          </a>
        </li>
        <li>
          <a href="{{ route('front.management') }}">
            <span>
              {{__('Management')}}
            </span>
          </a>
        </li>
        <li>
          <a href="{{ route('front.contact') }}">
            <span>
              {{__('Contact Us')}}
            </span>
          </a>
        </li>
        <li>
          <a href="{{ route('front.careers') }}">
            <span>
              {{__('careers')}}
            </span>
          </a>
        </li>
       
        <li class="lang-li">
          <a href="#">
            <img src="{{asset('assets/front/./images/icons/ar.png')}}" alt="ar">
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="header-lg">

    <a href="{{ route('home') }}">
      <img src="{{asset('assets/front/./images/logo/logo.png')}}" alt="img">
    </a>

    <div class="header-content">
      <div class="header-lg-top">
        <div class="phone-email">
          <div class="phone">
            <i class="ion-ios-telephone-outline"></i>
            <span>20-10458165</span>
          </div>
          <div class="email">
            <i class="ion-ios-email-outline"></i>
            <span>imarketing@ASCD.com</span>
          </div>
        </div>
        <a href="{{ route('front.appointment') }}" class="appointment-link">
          <i class="ion-android-calendar"></i>
          <span>
            {{__('Make An Appointment')}}
          </span>
        </a>
        <ul class="social-ul">
          <li>
            <a href="#">
              <i class="ion-social-facebook"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="ion-social-googleplus"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="ion-social-twitter"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="ion-social-youtube"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="ion-social-linkedin"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="ion-social-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="header-lg-bottom">
        <div class="main-ul-wrapper">
          <ul class="main-header-lg-ul"> 
            <li class="active-li">
              <a href="{{ route('home') }}">
                <span>
                  {{ __('Home') }} 
                </span>
              </a>
            </li>
            <li class="hover-li">
              <a href="{{ route('front.services') }}" class="hover-a">
                <i class="linearicons-chevron-down"></i>
                <span>
                  {{__('Services')}}
                </span>
              </a>
              <ul class="hovered-ul">
                <?php
                use App\Models\service;
                   $Services= service::All() ?>
                @foreach ( $Services as $value)
    

                <li>
                  <a href="{{ route('services_show',$value->id) }}">
                    <div class="img-div">
                      <img src="{{ URL::asset('./services/' . $value->icon) }}" alt="img">
                    </div>
                    <div class="service-title">
                      <p>
                        {{ App::isLocale('en')? $value->name_en : $value->name_ar}}
                      </p>
                    </div>
                  </a>
                </li>
                @endforeach
              </ul>
            </li> 
            <li>
              <a href="{{ route('front.about') }}">
                <span>
                  {{__('About Us')}}
                </span>
              </a>
            </li>
            <li>
              <a href="{{ route('doctors') }}">
                <span>
                  {{__('Doctors')}}
                </span>
              </a>
            </li>
            <li>
              <a href="{{route('news_events')}}">
                <span>
                  {{__('News & Events')}}
                </span>
              </a>
            </li>
            
            <li>
              <a href="{{ route('front.gallery') }}">
                <span>
                  {{__('Gallary')}}
                </span>
              </a>
            </li>
            <li>
              <a href="{{ route('front.management') }}">
                <span>
                  {{__('Management')}}
                </span>
              </a>
            </li>
            <li>
              <a href="{{ route('front.contact') }}">
                <span>
                  {{__('Contact Us')}}
                </span>
              </a>
            </li>
            <li>
              <a href="{{ route('front.careers') }}">
                <span>
                  {{__('careers')}}
                </span>
              </a>
            </li>
            
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        </li>
    @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>







@yield('content')













   <!-- start all footer -->
   <footer>
    <div class="top-footer">
      <div class="container">

        <div class="section-one">
          <div class="section-body">
            <a href="{{ route('home') }}" class="logo-img">
              <img src="{{asset('assets/front/./images/logo/logo-footer.jpg')}}" alt="img">
            </a>
            <div class="text">
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero at praesentium reprehenderit architecto
                molestiae illo sed velit veniam ad. Nostrum mollitia sapiente molestiae accusantium vero beatae omnis
                fuga dolorem expedita?
              </p>
            </div>
          </div>
        </div>
        <div class="section-two">
          <div class="section-heading">
            <p>
              {{__('QUICK LINKS')}}
            </p>
          </div>
          <div class="section-body">
            <ul class="main-section-ul">
              <li>
                <a href="{{ route('home') }}">
                  <span>
                   {{ __('Home') }} 
                  </span>
                </a>
              </li>
              <li>
                <a href="{{route('news_events')}}">
                  <span>
                    {{__('News & Events')}}
                  </span>
                </a>
              </li>
              <li>
                <a href="{{ route('front.gallery') }}">
                  <span>
                    {{__('Gallary')}}
                  </span>
                </a>
              </li>
              <li>
                <a href="{{ route('front.contact') }}">
                  <span>
                    {{__('Contact Us')}}
                  </span>
                </a>
              </li>
              <li>
                <a href="{{ route('front.about') }}">
                  <span>
                    {{__('About Us')}}
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="section-three">
          <div class="section-heading">
            <p>
              {{__('Contact Us')}}
            </p>
          </div>
          <div class="section-body">
            <ul class="main-section-ul contacts-wrapper">
              <li>
                <div class="phone">
                  <span>
                    {{__('Phone')}}
                  </span>
                  <div>
                    <i class="ion-ios-telephone-outline"></i>
                    <p>
                      20-10622700
                    </p>
                  </div>
                </div>
                <div class="address">
                  <span>
                    {{__('Location')}}
                  </span>
                  <div>
                    <i class="ion-android-pin"></i>
                    <p>
                      Jasmine Tower Building , Airport Road , Beside RAK Bank , Cairo , Egypt
                    </p>
                  </div>
                </div>
                <div class="email">
                  <span>
                    {{__('E-mail Address')}}
                  </span>
                  <div>
                    <i class="ion-ios-email-outline"></i>
                    <p>
                      imarketing@ASCD.com
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="section-four">
          <div class="section-heading">
            <p>
              News Letter
            </p>
            <p>
              Subscribe To ASCD news letter
            </p>
          </div>
          <div class="section-body">
            <div class="news-letter">
              <form action="">
                <input type="email" placeholder="Email Address">
                <button type="submit">Subscribe</button>
              </form>
            </div>

            <ul class="social-links">
              <li>
                <a href="#">
                  <i class="ion-social-facebook-outline"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="ion-social-twitter-outline"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="ion-social-instagram-outline"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="ion-social-youtube-outline"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="bottom-footer">
      <div class="container">
        <p>
          
          2023 &copy Medical team & Dr/ola EGI All rights reserved 
        </p>
      </div>
    </div>
  </footer>
  <!-- end all footer -->

  <script src="{{asset('assets/front/./js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('assets/front/./js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/front/./js/popper.min.js')}}"></script>
  <script src="{{asset('assets/front/./js/jquery.counterup.js')}}"></script>
  <script src="{{asset('assets/front/./js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/front/./js/jquery-ui.min.js')}}"></script>
  <script src="{{asset('assets/front/./js/swiper.min.js')}}"></script>
  <script src="{{asset('assets/front/./js/slick.min.js')}}"></script>
  <script src="{{asset('assets/front/./js/aos.js')}}"></script>
  <script src="{{asset('assets/front/./js/fotorama.js')}}"></script>
  <script src="{{asset('assets/front/./js/lightgallery.js')}}"></script>
  <script src="{{asset('assets/front/./js/lg-thumbnail.js')}}"></script>
  <script src="{{asset('assets/front/./js/index.js')}}"></script>
  <script src="{{asset('assets/back/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
  <script src="{{asset('assets/back/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <script src="{{asset('assets/back/dist/js/demo.js')}}"></script>
  @if (session()->has('success'))
  <script>
   
    Swal.fire(
        'Remind!',
        'successfully!',
        'success'
    );
</script>
@endif
  
</body>

</html>