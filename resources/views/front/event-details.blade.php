@extends('front.layout.front')
@section('content')

  <!-- event details page -->
  <div class="event-details-page">
    <div class="event-section">
      <div class="event-img">
        <img src="{{ URL::asset('./news/' . $event->image) }}" alt="img">
      </div>
      <div class="event-body">
        <div class="event-heading">
          <p>
            {{ App::isLocale('en') ? $event->name_en : $event->name_ar }}
          </p>
        </div>
        <div class="event-details">
          <div class="text">
            <p>
              @if( App::isLocale('en') )
              <?= $event->discription_en ?>
              @else
              <?= $event->discription_ar ?>
              @endif
            </p>
          </div>
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
                  {{ $event->Speakers }}
                </span>
              </li>
              
            </ul>
          </div>
          <div class="date">
            <div class="heading">
              <i class="ion-ios-compose"></i>
              <p>
                Date & Time
              </p>
            </div>
            <ul>
              <li>
                <i class="ion-ios-calendar-outline"></i>
                <span>
                  {{ $event->date }}
                </span>
              </li>
              <li>
                <i class="ion-ios-time-outline"></i>
                <span>
                  {{ $event->time }}
                </span>
              </li>
            </ul>
          </div>
          <div class="venue">
            <div class="heading">
              <i class="ion-navigate"></i>
              <p>
                Venue
              </p>
            </div>
            <ul>
              <li>
                <i class="ion-radio-waves"></i>
                <span>

                  {{ App::isLocale('en') ?$event->venue_en : $event->venue_ar }}

                </span>
              </li>
            </ul>
          </div>
          <div class="target">
            <div class="heading">
              <i class="ion-ios-people"></i>
              <p>
                Target
              </p>
            </div>
            <ul>
              <li>
                <i class="ion-ios-people-outline"></i>
                <span>
                  {{ App::isLocale('en') ? $event->target_en : $event->target_ar}}
                </span>
              </li>
            </ul>
          </div>
        </div>
        <a href="./register-event.html" class="register-link">
          <i class="feather icon-log-in"></i>
          <span>
            Register
          </span>
        </a>
      </div>
    </div>
  </div>
  <!-- event details page -->

  <!-- start survey section -->
  <div class="survey-btn">
    <img src="{{asset('assets/front/./images/icons/survey.png')}}" alt="survey">
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