@extends('front.layout.front')
@section('content')

  <!-- doctors page -->
  <div class="doctors-page">
    <div class="page-heading">
      <div class="img-div">
        <img src="{{asset('assets/front/./images/bkgs/doctors-bkg.jpg')}}" alt="img">
      </div>
      <p>
        {{__('Our Doctors')}}
      </p>
    </div>
    <div class="container">
      <div class="page-body">
        <ul class="main-page-ul">
          @foreach($doctors as $doctor)
          <li>
            <div class="img-div">
              <img src="{{ URL::asset('./doctors/' . $doctor->image) }}" style="max-height: 300px" alt="img">
            </div>
            <div class="body" style="margin-top: -20px">
              <div class="name">
                @if(App::isLocale('en'))
                <img src="{{asset('assets/front/./images/icons/idoctor.svg')}}" alt="img">
               @endif
                <span>
                  {{App::isLocale('en')? $doctor->name_en:$doctor->name_ar }}
                </span>
                @if(App::isLocale('ar'))
                <img src="{{asset('assets/front/./images/icons/idoctor.svg')}}" alt="img">
               @endif

              </div>
              <div class="job-description">
                <p>
                  {{App::isLocale('en')? $doctor->service->name_en : $doctor->service->name_ar}}
                </p>
              </div>
              <div class="btns">
                <a href="{{ route('doctors_show',$doctor->id) }}" class="profile-link">
                  <span>
                    {{__('Profile')}}
                  </span>
                  <i class="linearicons-chevron-right"></i>
                </a>
                <a href="./appointment.html" class="book-link">
                  <span>
                    {{__('Book')}}
                  </span>
                  <i class="linearicons-check"></i>
                </a>
              </div>
            </div>
          </li>
         @endforeach
        </ul>

        <!-- start pagination -->
        {{$doctors->links()}}
        <!-- end pagination -->
      </div>
    </div>
  </div>
  <!-- doctors page -->

  

  @endsection