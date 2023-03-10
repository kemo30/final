@extends('front.layout.front')
@section('content')

  <!-- start doctor profile page -->
  <div class="doctor-profile-page">
    <div class="container">
      <div class="doctor-img-contacts">
        <div class="img-div">
          <img src="{{ URL::asset('./doctors/' . $doctor->image) }}" alt="img">
        </div>
        <div class="doctor-contacts">
          <div class="doctor-name">
            <p>
              {{ App::isLocale('en')? $doctor->name_en:$doctor->name_ar}}
            </p>
          </div>
          <div class="job-description">
            <p>
              {{App::isLocale('en')? $doctor->service->name_en: $doctor->service->name_ar}}
            </p>
          </div>
          <div class="phone-number">
            <i class="linearicons-phone-plus"></i>
            <span>
             {{ $doctor->phone }}
            </span>
          </div>
          <ul class="social-ul">
            <li>
              <a href="{{ $doctor->facebook }}">
                <i class="ion-social-facebook-outline"></i>
              </a>
            </li>
            <li>
              <a href="{{ $doctor->twitter }}">
                <i class="ion-social-twitter-outline"></i>
              </a>
            </li>
            <li>
              <a href="{{ $doctor->instagram }}">
                <i class="ion-social-instagram-outline"></i>
              </a>
            </li>
            <li>
              <a href="{{ $doctor->whatsapp }}">
                <i class="ion-social-whatsapp-outline"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      @if(App::isLocale('en'))
      <div class="details-section">
        <?= $doctor->titel_en ?>
      </div>
     
          
      @else
      <div class="details-section">
        <?= $doctor->titel_ar ?>
      </div>  
      @endif
    </div>
  </div>
  <!-- end doctor profile page -->

  

  @endsection