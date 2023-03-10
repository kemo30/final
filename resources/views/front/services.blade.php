@extends('front.layout.front')
@section('content')
    

  <!-- start services page -->
  <div class="services-page">
    <!-- start home servcies section -->
    <div class="home-services-section">
      <div class="section-heading">
        <p>
          {{__('Our Services')}}
        </p>
      </div>
      <div class="section-body">
        <div class="swiper-container home-services-slider">
          <div class="swiper-wrapper">
@forelse($services as $service)
            <div class="swiper-slide">
              <a href="{{ route('services_show',$service->id) }}">
                <div class="img-div">
                  <img src="{{ URL::asset('./services/' . $service->icon) }}" alt="img">
                </div>
                <div class="service-text">
                  <div class="heading">
                    <p>
                     {{App::isLocale('en')? $service->name_en:$service->name_ar }}
                    </p>
                  </div>
                  <div class="service-content">
                    <ul>
                      @if(App::isLocale('en'))
                      <li>
                   <?= $service->description_en ?>
                      </li>
                      @else
                      <li>
                        <?= $service->description_ar ?>
                           </li>
                      @endif
                  </ul>
                  </div>
                  <div class="read-more">
                    <i class="linearicons-link"></i>
                    <span>
                      {{__('Read more')}}
                    </span>
                  </div>
                </div>
              </a>
            </div>
           

           @endforeach
          </div>

          @if(App::isLocale('ar'))
           <div class="swiper-button-prev home-services-slider-prev">
            <span class="ion-android-arrow-forward"></span>
          </div>
          <div class="swiper-button-next home-services-slider-next">
            <span class="ion-android-arrow-back"></span>
          </div> 
         @else

          <!-- ltr code -->
          <div class="swiper-button-next home-services-slider-next">
            <span class="ion-android-arrow-forward"></span>
          </div>
          <div class="swiper-button-prev home-services-slider-prev">
            <span class="ion-android-arrow-back"></span>
          </div>
          <!-- ltr code -->
        @endif
        </div>
      </div>
    </div>
    <!-- end home servcies section -->
  </div>
  @endsection