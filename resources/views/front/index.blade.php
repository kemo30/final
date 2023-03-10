@extends('front.layout.front')
@section('content')
    <!-- start home main slider -->
    <div class="swiper-container home-main-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slider-img">
                    <img src="{{ asset('assets/front/./images/home-main-slides/slide-1.jpg') }}" alt="img">
                </div>
                <div class="slider-text">
                    <div class="text-buttons">
                        <div class="text">
                            <p>
                                ASCD
                            </p>
                            <p>
                                {{ __('A bold new concept for healthcare') }}
                            </p>
                        </div>
                        <div class="buttons">
                            <a href="{{ route('doctors') }}">
                                <i class="linearicons-finger-tap2"></i>
                                <span>
                                    {{ __('Doctors') }}
                                </span>
                            </a>
                            <a href="{{ route('front.about') }}">
                                <i class="linearicons-pushpin"></i>
                                <span>
                                    {{ __('About Us') }}
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slider-img">
                    <img src="{{ asset('assets/front/./images/home-main-slides/slide-2.jpg') }}" alt="img">
                </div>
                <div class="slider-text">
                    <div class="text-buttons">
                        <div class="text">
                            <p>
                                ASCD
                            </p>
                            <p>
                                {{ __('We mean quality') }}
                            </p>
                        </div>
                        <div class="buttons">
                            <a href="{{ route('front.services') }}">
                                <i class="linearicons-finger-tap2"></i>
                                <span>
                                    {{ __('Services') }}
                                </span>
                            </a>
                            <a href="{{ route('front.about') }}">
                                <i class="linearicons-pushpin"></i>
                                <span>
                                  {{ __('About Us') }}
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slider-img">
                    <img src="{{ asset('assets/front/./images/home-main-slides/slide-3.jpg') }}" alt="img">
                </div>
                <div class="slider-text">
                    <div class="text-buttons">
                        <div class="text">
                            <p>
                                ASCD
                            </p>
                            <p>
                               {{ __('MODULAR OPERATING THEATRES') }}
                            </p>
                        </div>
                        <div class="buttons">
                            <a href="{{ route('front.services') }}">
                                <i class="linearicons-finger-tap2"></i>
                                <span>
                                  {{ __('Services') }}
                                </span>
                            </a>
                            <a href="{{ route('front.about') }}">
                                <i class="linearicons-pushpin"></i>
                                <span>
                                  {{ __('About Us') }}
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slider-img">
                    <img src="{{ asset('assets/front/./images/home-main-slides/slide-4.jpg') }}" alt="img">
                </div>
                <div class="slider-text">
                    <div class="text-buttons">
                        <div class="text">
                            <p>
                                ASCD
                            </p>
                            <p>
                              {{ __('MODULAR OPERATING THEATRES') }}
                            </p>
                        </div>
                        <div class="buttons">
                            <a href="{{ route('front.gallery') }}">
                                <i class="linearicons-finger-tap2"></i>
                                <span>
                                    {{ __('Gallary') }}
                                </span>
                            </a>
                            <a href="{{ route('front.about') }}">
                                <i class="linearicons-pushpin"></i>
                                <span>
                                  {{ __('About Us') }}
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- rtl code -->
        <!-- <div class="swiper-button-prev home-main-slider-prev">
              <span class="ion-android-arrow-forward"></span>
            </div>
            <div class="swiper-button-next home-main-slider-next">
              <span class="ion-android-arrow-back"></span>
            </div> -->
        <!-- rtl code -->

        <!-- ltr code -->
        <div class="swiper-button-next home-main-slider-next">
            <span class="ion-android-arrow-forward"></span>
        </div>
        <div class="swiper-button-prev home-main-slider-prev">
            <span class="ion-android-arrow-back"></span>
        </div>
        <!-- ltr code -->

        <div class="swiper-pagination home-main-slider-pagination"></div>
    </div>
    <!-- end home main slider -->

    <!-- after slide section -->
    <div class="after-slide-section">
        <ul class="main-section-ul">
            <li>
                <a href="{{ route('front.about') }}">
                    <div class="img-div">
                        <img src="{{ asset('assets/front/./images/after-slide/bx-1.jpg') }}" alt="img">
                    </div>
                    <div class="content">
                        <div class="heading">
                            <p>
                                {{ __('Our Mission') }}
                            </p>
                        </div>
                        <div class="body">
                            <div class="text">
                                <p>
                                    {{ __('Providing compassionate and exceptional healthcare while improving our community shealth') }}
                                </p>
                            </div>
                            <div class="more-btn">
                                <span>
                                  {{ __('Read more') }}
                                </span>
                                <i class="linearicons-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('front.about') }}">
                    <div class="img-div">
                        <img src="{{ asset('assets/front/./images/after-slide/bx2.jpg') }}" alt="img">
                    </div>
                    <div class="content">
                        <div class="heading">
                            <p>
                                {{ __('Our Vision') }}
                            </p>
                        </div>
                        <div class="body">
                            <div class="text">
                                <p>
                                    {{ __('We will enhance our superior quality and service with personalized care, information and leading edge technology...') }}
                                </p>
                            </div>
                            <div class="more-btn">
                                <span>
                                    {{ __('Read more') }}
                                </span>
                                <i class="feather icon-chevrons-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('front.about') }}">
                    <div class="img-div">
                        <img src="{{ asset('assets/front/./images/after-slide/bx3.jpg') }}" alt="img">
                    </div>
                    <div class="content">
                        <div class="heading">
                            <p>
                                {{ __('Our Values') }}
                            </p>
                        </div>
                        <div class="body">
                            <div class="text">
                                <p>
                                    {{ __('Compassion: We believe in providing compassionate care for all. Excellence: We believe in providing the best of care...') }}
                                </p>
                            </div>
                            <div class="more-btn">
                                <span>
                                  {{ __('Read more') }}
                                </span>
                                <i class="feather icon-chevrons-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <!-- after slide section -->

    <!-- appointment working hours  -->
    <div class="appointment-working-hours-wrapper">
        <div class="container">
            <div class="working-hours-wrapper">
                <div class="section-heading">
                    <i class="linearicons-clock2"></i>
                    <p>
                        {{ __('Working Hours') }}
                    </p>
                </div>
                <div class="section-body">
                    <ul class="main-section-ul">
                        <li>
                            <span>
                                {{ __('Sat') }}
                            </span>
                            <span>
                                10AM : 11PM
                            </span>
                        </li>
                        <li>
                            <span>
                                {{ __('Sun') }}
                            </span>
                            <span>
                                10AM : 11PM
                            </span>
                        </li>
                        <li>
                            <span>
                                {{ __('Mon') }}
                            </span>
                            <span>
                                10AM : 11PM
                            </span>
                        </li>
                        <li>
                            <span>
                                {{ __('Tus') }}
                            </span>
                            <span>
                                {{ __('Closed') }}
                            </span>
                        </li>
                        <li>
                            <span>
                                {{ __('Wed') }}
                            </span>
                            <span>
                                10AM : 11PM
                            </span>
                        </li>
                        <li>
                            <span>
                                {{ __('Thu') }}
                            </span>
                            <span>
                                10AM : 11PM
                            </span>
                        </li>
                        <li>
                            <span>
                                {{ __('Fri') }}
                            </span>
                            <span>
                                10AM : 11PM
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="service-appointment-form" data-aos="zoom-in" data-aos-duration="1500">
                <div class="form-heading">
                    <p>
                        {{ __('Schedule Your Appointment') }}
                    </p>
                </div>
                <form action="{{route('front.appointment_make')}} " method="post">
                  @csrf
                    <div class="form-div">
                        <input type="text" name="name" placeholder="{{ __('Name') }}" id="name">
                        <label for="name">
                            <i class="ion-ios-personadd-outline"></i>
                        </label>
                    </div>
                    <div class="form-div">
                        <input id="email" type="email" name="email" placeholder="{{ __('E-mail Address') }}">
                        <label for="email">
                            <i class="ion-ios-email-outline"></i>
                        </label>
                    </div>
                    <div class="form-div">
                        <input id="phone" type="text" name="phone" placeholder="{{ __('Phone number') }}">
                        <label for="phone">
                            <i class="ion-ios-telephone-outline"></i>
                        </label>
                    </div>
                    <div class="form-div">
                        <select name="service" id="">
                            <option value="">
                                {{ __('Select Specialties') }}
                            </option>
                            @foreach ($services as $value)
                                <option value="{{ $value->id }}">
                                    {{ App::isLocale('en') ? $value->name_en : $value->name_ar }}
                                </option>
                            @endforeach


                        </select>
                    </div>
                    <div class="form-div">
                        <select name="doctor" id="">
                            <option value="">
                                {{ __('Select doctor') }}
                            </option>
                            @foreach ($doctors as $value)
                                <option value="{{ $value->id }}">
                                    {{ App::isLocale('en') ? $value->name_en : $value->name_ar }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-div">
                        <input type="text" id="datepicker" name="date" placeholder="{{ __('Appointment Date') }}">
                        <label for="datepicker">
                            <i class="ion-ios-calendar-outline"></i>
                        </label>
                    </div>
                    <div class="form-div">
                        <textarea name="message" id="" placeholder="{{ __('Message') }}"></textarea>
                    </div>
                    <div class="form-div submit-div">
                        <button type="submit">
                            <i class="ion-ios-paperplane"></i>
                            <span>
                                {{ __('Submit') }}
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- appointment working hours  -->

Our Vision
    <!-- start home servcies section -->
    <div class="home-services-section">
        <div class="section-heading">
            <p>
                {{ __('Our Services') }}
            </p>
        </div>
        <div class="section-body">
            <div class="swiper-container home-services-slider">
                <div class="swiper-wrapper">
                    @foreach ($services as $value)
                        <div class="swiper-slide">

                            <a href="{{ route('services_show', $value->id) }}">
                                <div class="img-div">
                                    <img src="{{ URL::asset('./services/' . $value->icon) }}" alt="img">
                                </div>
                                <div class="service-text">
                                    <div class="heading">
                                        <p>
                                            {{ App::isLocale('en') ? $value->name_en : $value->name_ar }}
                                        </p>
                                    </div>
                                    <div class="service-content">
                                        <ul>

                                            <li>

                                                @if (App::isLocale('en'))
                                                    <span>
                                                        <?= $value->description_en ?>
                                                    </span>
                                                @else
                                                    <span>
                                                        <?= $value->description_ar ?>
                                                    </span>
                                                @endif
                                            </li>




                                        </ul>
                                    </div>
                                    <div class="read-more">
                                        <i class="linearicons-link"></i>
                                        <span>
                                            {{ __('Read more') }}
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>

                <!-- rtl code -->
                <!-- <div class="swiper-button-prev home-services-slider-prev">
                <span class="ion-android-arrow-forward"></span>
              </div>
              <div class="swiper-button-next home-services-slider-next">
                <span class="ion-android-arrow-back"></span>
              </div> -->
                <!-- rtl code -->

                <!-- ltr code -->
                <div class="swiper-button-next home-services-slider-next">
                    <span class="ion-android-arrow-forward"></span>
                </div>
                <div class="swiper-button-prev home-services-slider-prev">
                    <span class="ion-android-arrow-back"></span>
                </div>
                <!-- ltr code -->

            </div>
        </div>
    </div>
    <!-- end home servcies section -->

    <!-- star home counter section -->
    <div class="home-counter-section">
        <ul class="main-section-ul">
            <li data-aos="zoom-in" data-aos-duration="1500">
                <div class="counter-img">
                    <img src="{{ asset('assets/front/./images/counter/medal.png') }}" alt="img">
                </div>
                <div class="counter-body">
                    <div class="number-div">
                        <span class="counter-number">
                            15
                        </span>
                        <span>
                            {{ __('Yr') }}
                        </span>
                        <span class="ion-ios-plus-empty"></span>
                    </div>
                    <div class="counter-title">
                        <p>
                            {{ __('Experience') }}
                        </p>
                    </div>
                </div>
            </li>
            <li data-aos="zoom-in" data-aos-duration="1500">
                <div class="counter-img">
                    <img src="{{ asset('assets/front/./images/counter/heart.png') }}" alt="img">
                </div>
                <div class="counter-body">
                    <div class="number-div">
                        <span class="counter-number">
                            2300
                        </span>
                        <span class="ion-ios-plus-empty"></span>
                    </div>
                    <div class="counter-title">
                        <p>
                            {{ __('Happy Clients') }}
                        </p>
                    </div>
                </div>
            </li>
            <li data-aos="zoom-in" data-aos-duration="1500">
                <div class="counter-img">
                    <img src="{{ asset('assets/front/./images/counter/staff.png') }}" alt="img">
                </div>
                <div class="counter-body">
                    <div class="number-div">
                        <span class="counter-number">
                            280
                        </span>
                        <span class="ion-ios-plus-empty"></span>
                    </div>
                    <div class="counter-title">
                        <p>
                            {{ __('Staff') }}
                        </p>
                    </div>
                </div>
            </li>
            <li data-aos="zoom-in" data-aos-duration="1500">
                <div class="counter-img">
                    <img src="{{ asset('assets/front/./images/counter/patient.png') }}" alt="img">
                </div>
                <div class="counter-body">
                    <div class="number-div">
                        <span class="counter-number">
                            5103
                        </span>
                        <span>
                            / {{ __('Yr') }}
                        </span>
                        <span class="ion-ios-plus-empty"></span>
                    </div>
                    <div class="counter-title">
                        <p>
                            {{ __('Patients') }}
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- end home counter section -->




    <!-- blogs section -->
    <div class="blogs-section">
        <div class="container">

            <div class="section-heading">
                <p>
                    {{ __('Lates News') }}
                </p>
            </div>
        </div>
        <div class="section-body">
            <div class="container">
                <div class="section-body">
                    <ul class="main-section-ul">
                        @foreach ($news as $value)
                            <li class="news-li" data-aos="zoom-in" data-aos-duration="1500">
                                <a class="news-a" href="{{ route('news_show', $value->id) }}">
                                    <div class="news-img">
                                        <img src="{{ URL::asset('./news/' . $value->image) }}" alt="img">
                                    </div>
                                    <div class="news-body">
                                        <div class="news-heading-date">
                                            <div class="heading">
                                                <p>
                                                    {{ App::isLocale('en') ? $value->name_en : $value->name_ar }}
                                                </p>
                                            </div>
                                            <div class="date">
                                                <i class="ion-ios-calendar-outline"></i>
                                                <span>
                                                    {{ date('d/m', strtotime($value->date)) }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="news-text">
                                            @if (App::isLocale('en'))
                                                <p>
                                                    <?php echo $value->titel_en; ?>
                                                </p>
                                            @else
                                                <p>
                                                    <?php echo $value->titel_ar; ?>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </a>

                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- blogs section -->

    <!-- start upcoming events section -->
    <div class="upcoming-events-section">
        <div class="container">
            <div class="section-heading">
                <p>
                    {{ __('Upcoming Events') }}
                </p>
            </div>
            <div class="section-body">
                <ul class="main-section-ul">
                    @foreach ($events as $value)
                        <li data-aos="zoom-in" data-aos-duration="1500">
                            <a href="{{ route('event_show', $value->id) }}">
                                <div class="event-img">
                                    <img src="{{ URL::asset('./news/' . $value->image) }}" alt="">
                                </div>
                                <div class="event-body">
                                    <div class="event-heading">
                                        <p>
                                            {{ App::isLocale('en') ? $value->name_en : $value->name_ar }}
                                        </p>
                                    </div>
                                    <div class="event-details">
                                        <div class="speakers">
                                            <div class="heading">
                                                <i class="ion-android-microphone"></i>
                                                <p>
                                                    {{ __('Speakers') }}
                                                </p>
                                            </div>
                                            <ul>
                                                <li>
                                                    <i class="ion-android-checkmark-circle"></i>
                                                    <span>
                                                        {{ $value->Speakers }}
                                                    </span>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p>
                                                {{ App::isLocale('en') ? $value->description_en : $value->description_ar }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- end upcoming events section -->


    
    <div class="clients-section">
        <div class="section-heading">
            <p>
                {{__('OUR CLIENTS')}}
            </p>
        </div>
        <div class="swiper-container home-clients-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-img">
                        <img src="{{ asset('assets/front/./images/clients/1.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-img">
                        <img src="{{ asset('assets/front/./images/clients/2.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-img">
                        <img src="{{ asset('assets/front/./images/clients/3.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-img">
                        <img src="{{ asset('assets/front/./images/clients/4.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-img">
                        <img src="{{ asset('assets/front/./images/clients/1.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-img">
                        <img src="{{ asset('assets/front/./images/clients/2.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-img">
                        <img src="{{ asset('assets/front/./images/clients/3.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-img">
                        <img src="{{ asset('assets/front/./images/clients/4.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        Swal.fire(
            'Remind!',
            'Company deleted successfully!',
            'success'
        );
    </script>
    <!-- our clients section -->
@endsection
