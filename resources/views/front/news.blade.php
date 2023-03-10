
@extends('front.layout.front')
@section('content')
  <!-- news events page -->
  <div class="news-events-page">
    <!-- start latest news section -->
    <!-- blogs section -->
    <div class="blogs-section">
      <div class="container">

        <div class="section-heading">
          <p>
            Lates News
          </p>
        </div>
      </div>
      <div class="section-body">
        <div class="container">
          <div class="section-body">
            <ul class="main-section-ul">
              @foreach($news as $new)
              <li class="news-li" data-aos="zoom-in" data-aos-duration="1500">
                <a class="news-a" href="{{route('news_show',$new->id)}}">
                  <div class="news-img">
                    <img src="{{ URL::asset('./news/' . $new->image) }}" alt="img">
                  </div>
                  <div class="news-body">
                    <div class="news-heading-date">
                      <div class="heading">
                        <p>
                          {{$new->name_en}}
                        </p>
                      </div>
                      <div class="date">
                        <i class="ion-ios-calendar-outline"></i>
                        <span>
                         {{ date('d/m', strtotime($new->date))}}
                        </span>
                      </div>
                    </div>
                    <div class="news-text">
                      <p>
                        <?php echo $new->titel_en ?>
                      </p>
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
            Upcoming Events
          </p>
        </div>
        <div class="section-body">
          <ul class="main-section-ul">
            @foreach($events as $event)
            <li data-aos="zoom-in" data-aos-duration="1500">
              <a href=" {{ route('event_show',$event->id) }}">
                <div class="event-img">
                  <img src="{{ URL::asset('./news/' . $event->image) }}" alt="">
                </div>
                <div class="event-body">
                  <div class="event-heading">
                    <p>
                      {{$event->name_en}}
                    </p>
                  </div>
                  <div class="event-details">
                    <div class="speakers">
                      <div class="heading">
                        <i class="ion-android-microphone"></i>
                        <p>
                          Speakers
                        </p>
                      </div>
                      <ul>
                        <li>
                          <i class="ion-android-checkmark-circle"></i>
                          <span>
                          {{$event->Speakers}}
                          </span>
                        </li>
                       
                      </ul>
                    </div>
                    <div class="text">
                      <p>
                     <?= $event->discription_en ?> 
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
  </div>
  <!-- end upcoming events section -->
  <!-- news events page -->

  <!-- start survey section -->
  <div class="survey-btn">
    <img src="./images/icons/survey.png" alt="survey">
    <div class="survey-text">
      <span>
        Take our survey
      </span>
      <span>
        and get a discount!
      </span>
    </div>
  </div>

  <!-- start survey modal -->
  <div class="survey-modal">

    <div class="modal-body container">
      <div class="heading">
        <p>
          Take our survey and get a discount!
        </p>
      </div>
      <div class="survey-wrapper">
        <div class="modal-close">
          <i class="linearicons-cross2"></i>
        </div>

        <form class="survey-form">
          <ul class="main-form-ul">
            <li class="form-li">
              <div class="question">
                <p>
                  How nurses communicate well with patients?
                </p>
              </div>
              <ul class="answers-ul">
                <li>
                  <label for="a-0-1">
                    <input type="radio" name="a-0" id="a-0-1">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Not Sure
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-0-2">
                    <input type="radio" name="a-0" id="a-0-2">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Bad
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-0-3">
                    <input type="radio" name="a-0" id="a-0-3">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Good
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-0-4">
                    <input type="radio" name="a-0" id="a-0-4">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Very Good
                    </span>
                  </label>
                </li>
              </ul>
            </li>
            <li class="form-li">
              <div class="question">
                <p>
                  How doctors communicate well with patients?
                </p>
              </div>
              <ul class="answers-ul">
                <li>
                  <label for="a-1-1">
                    <input type="radio" name="a-1" id="a-1-1">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Not Sure
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-1-2">
                    <input type="radio" name="a-1" id="a-1-2">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Bad
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-1-3">
                    <input type="radio" name="a-1" id="a-1-3">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Good
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-1-4">
                    <input type="radio" name="a-1" id="a-1-4">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Very Good
                    </span>
                  </label>
                </li>
              </ul>
            </li>
            <li class="form-li">
              <div class="question">
                <p>
                  What about the patients' rooms and bathrooms?
                </p>
              </div>
              <ul class="answers-ul">
                <li>
                  <label for="a-2-1">
                    <input type="radio" name="a-2" id="a-2-1">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Not Sure
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-2-2">
                    <input type="radio" name="a-2" id="a-2-2">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Bad
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-2-3">
                    <input type="radio" name="a-2" id="a-2-3">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Good
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-2-4">
                    <input type="radio" name="a-2" id="a-2-4">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Very Good
                    </span>
                  </label>
                </li>
              </ul>
            </li>
            <li class="form-li">
              <div class="question">
                <p>
                  What about the patients' rooms and bathrooms?
                </p>
              </div>
              <ul class="answers-ul">
                <li>
                  <label for="a-3-1">
                    <input type="radio" name="a-3" id="a-3-1">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Not Sure
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-3-2">
                    <input type="radio" name="a-3" id="a-3-2">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Bad
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-3-3">
                    <input type="radio" name="a-3" id="a-3-3">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Good
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-3-4">
                    <input type="radio" name="a-3" id="a-3-4">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Very Good
                    </span>
                  </label>
                </li>
              </ul>
            </li>
            <li class="form-li">
              <div class="question">
                <p>
                  How do patients rate the hospital?
                </p>
              </div>
              <ul class="answers-ul">
                <li>
                  <label for="a-4-1">
                    <input type="radio" name="a-4" id="a-4-1">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Not Sure
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-4-2">
                    <input type="radio" name="a-4" id="a-4-2">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Bad
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-4-3">
                    <input type="radio" name="a-4" id="a-4-3">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Good
                    </span>
                  </label>
                </li>
                <li>
                  <label for="a-4-4">
                    <input type="radio" name="a-4" id="a-4-4">
                    <i class="ion-android-checkbox-blank"></i>
                    <span>
                      Very Good
                    </span>
                  </label>
                </li>
              </ul>
            </li>
          </ul>
          <div class="name-phone-email">
            <input type="text" placeholder="Name :">
            <input type="email" placeholder="Email :">
            <input type="text" placeholder="Phone :">
          </div>
          <button type="submit">
            Submit
          </button>
        </form>
      </div>
    </div>
  </div>
  <!-- end survey modal -->
  <!-- end survey section -->


  @endsection