@extends('front.layout.front')
@section('content')


  <!-- contact us page -->
  <div class="contact-page">
    <div class="container">
      <div class="page-body">
        <ul class="branches">
          <li>
            <div class="branch-heading">
              <p>
                {{ __('Cairo Branch')}}
              </p>
            </div>
            <div class="working-hours-phones">
              <div class="working-hours">
                <ul class="week-days">
                  <li>
                    <span>
                      {{__('Sat')}}
                    </span>
                    <span>
                      8 AM - 9 PM
                    </span>
                  </li>
                  <li>
                    <span>
                      {{__('Sun')}}
                    </span>
                    <span>
                      8 AM - 9 PM
                    </span>
                  </li>
                  <li>
                    <span>
                      {{__('Mon')}}
                    </span>
                    <span>
                      8 AM - 9 PM
                    </span>
                  </li>
                  <li>
                    <span>
                      {{__('Tus')}}
                    </span>
                    <span>
                      8 AM - 9 PM
                    </span>
                  </li>
                  <li>
                    <span>
                      {{__('Wed')}}
                    </span>
                    <span>
                      8 AM - 9 PM
                    </span>
                  </li>
                  <li>
                    <span>
                      {{__('Thu')}}
                    </span>
                    <span>
                      {{__('Closed')}}
                    </span>
                  </li>
                  <li>
                    <span>
                      {{__('Fri')}}
                    </span>
                    <span>
                      {{__('Closed')}}
                    </span>
                  </li>
                </ul>
              </div>
              <ul class="phones">
                <li>
                  <span class="feather icon-phone-call"></span>
                  <span>
                    +2015484856
                  </span>
                </li>
                <li>
                  <span class="feather icon-phone-call"></span>
                  <span>
                    +233389315
                  </span>
                </li>
              </ul>
            </div>
            <div class="location">
              <span class="feather icon-map-pin"></span>
              <span>
                Jasmine Tower Building, Airport Road, Beside RAK Bank - cairo - Egypt
              </span>
            </div>
          </li>
        </ul>

        <div class="form-wrapper">
          <div class="form-heading">
            <p>
              {{__('Contact Us')}}
            </p>
          </div>
          <form action="">
            <div class="form-div">
              <input type="text" name="name" placeholder="Name*">
            </div>
            <div class="form-div">
              <input type="email" name="email" placeholder="E-mail address*">
            </div>
            <div class="form-div">
              <input type="text" name="phone" placeholder="Pone number*">
            </div>
            <div class="form-div">
              <input type="text" name="subject-title" id="" placeholder="Message title* ">
            </div>
            <div class="form-div">
              <textarea name="message-details" placeholder="Message"></textarea>
            </div>
            <button type="submit">
              <span class="feather icon-send"></span>
              <span>
                Submit
              </span>
            </button>
          </form>
        </div>
      </div>

     
    </div>


    <div class="map-wrapper">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13810.273315112216!2d31.342725649999995!3d30.077905700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1564997275330!5m2!1sar!2seg"
        frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

  </div>
  <!-- contact us page -->

  @endsection