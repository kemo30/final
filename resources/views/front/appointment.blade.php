@extends('front.layout.front')
@section('content')

  <!-- start appointment page -->
  <div class="appointment-page">
    <div class="container">
      <div class="service-appointment-form" data-aos="zoom-in" data-aos-duration="1500">
        <div class="form-heading">
          <p>
            {{ __('Schedule Your Appointment') }}
          </p>
        </div>
        <form action="{{ route('front.appointment_make') }}" method="post">
          @csrf
          <div class="form-div">
            <input type="text" placeholder="{{__('Name')}}" id="name" name="name">
            <label for="name">
              <i class="ion-ios-personadd-outline"></i>
            </label>
          </div>
          <div class="form-div">
            <input id="email" type="email" placeholder="{{__('E-mail Address')}}" name="email">
            <label for="email">
              <i class="ion-ios-email-outline"></i>
            </label>
          </div>
          <div class="form-div">
            <input id="phone" type="text" placeholder="{{__('Phone number')}}" name="phone">
            <label for="phone">
              <i class="ion-ios-telephone-outline"></i>
            </label>
          </div>
          <div class="form-div">
            <select name="service" id="">
              <option value="">
                {{__('Select Specialties')}} 
              </option>
              @foreach ($services as $value)
                  
              
              <option value="{{ $value->id }}">
                {{App::isLocale('en')? $value->name_en:$value->name_ar }}
              </option>
              @endforeach
              
            </select>
          </div>
          <div class="form-div">
            <select name="doctor" id="">
              <option value="">
                {{__('Select doctor')}}
              </option>
              @foreach ($doctors as $value )
                  
              
              <option value="{{ $value->id }}">{{ App::isLocale('en')? $value->name_en :$value->name_ar}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-div">
            <input type="text" id="datepicker" placeholder="{{__('Appointment Date')}}" name="date">
            <label for="datepicker">
              <i class="ion-ios-calendar-outline"></i>
            </label>
          </div>
          <div class="form-div">
            <textarea name="message" id="" placeholder="{{__('Message')}}"></textarea>
          </div>
          <div class="form-div submit-div">
            <button type="submit">
              <i class="ion-ios-paperplane"></i>
              <span>
                {{  __('Submit')}}
              </span>
              
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end appointment page -->


  @endsection