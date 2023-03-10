@extends('front.layout.front')
@section('content')
  <!-- new branch page -->
  <div class="new-branch-page">
    <div class="page-heading">
      <p>
        Delma Branch
      </p>
    </div>
   
    <div class="page-body">
      <ul class="main-section-ul">
       
        @foreach ($delma as $value)
       
        <li>
          <div class="li-img">
            <img src="{{ URL::asset('./delma/' . $value->image) }}" alt="img">
          </div>
          <div class="li-text">
            <div class="text-heading">
              <p>
                {{ $value->name_en }}
              </p>
            </div>
            <ul class="inside-ul">
              <li>
                <i class="linearicons-checkmark-circle"></i>
                <p>
                  <?= $value->titel_en ?>
                </p>
              </li>
              
             
            </ul>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
  <!-- ./new branch page -->

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