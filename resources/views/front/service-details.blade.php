@extends('front.layout.front')
@section('content')
    <!-- start services details page -->
    <div class="service-details-page" >
        <div class="top-section">
            <div class="img-div">
                <img src="{{ URL::asset('./services/' . $service->image) }}" alt="img">
            </div>
            <div class="service-text" >
                <div class="service-title">
                    <p>
                        {{App::isLocale('en') ? $service->name_en : $service->name_ar }}
                    </p>
                </div>
                <div class="text" >
                    <div class="brief">
                        <p>
                            {{ App::isLocale('en') ? $service->description_en : $service->description_ar }}
                        </p>
                    </div>
                    <div class="ul-title" style="grid-auto-flow: dense;"  >
                        <i class="feather icon-list"></i>
                        <p>
                            {{ __('Services provided') }}
                        </p>
                    </div>
                    <ul class="provided-ul">
                        @if (App::isLocale('en'))
                            <li>
                                <?= $service->titel_en ?>
                            </li>
                        @else
                            <li>
                                <?= $service->titel_ar ?>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>

        <div class="bottom-section" >
            <div class="container">
                <div class="doctors-section">
                    <p>
                        {{ __('Doctors') }}
                    </p>
                    <div class="doctors-slick-slider" data-aos="zoom-in-right" data-aos-duration="1500">
                        @foreach ($service->doctor as $value)
                            <a href="{{ route('doctors_show', $value->id) }}">
                                <div class="img-div">
                                    <img src="{{ URL::asset('./doctors/' . $value->image) }}" alt="img">
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="service-appointment-form" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="form-heading">
                        <p>
                            {{ __('Schedule Your Appointment') }}
                        </p>
                    </div>
                    <form action="">
                        <div class="form-div">
                            <input type="text" placeholder="{{ __('Name') }}" id="name">
                            <label for="name">
                                <i class="ion-ios-personadd-outline"></i>
                            </label>
                        </div>
                        <div class="form-div">
                            <input id="email" type="email" placeholder="{{ __('E-mail Address') }}">
                            <label for="email">
                                <i class="ion-ios-email-outline"></i>
                            </label>
                        </div>
                        <div class="form-div">
                            <input id="phone" type="text" placeholder="{{ __('Phone number') }}">
                            <label for="phone">
                                <i class="ion-ios-telephone-outline"></i>
                            </label>
                        </div>
                        <div class="form-div">
                            <select name="" id="">
                                <option value="">
                                    {{ __('Select Specialties') }}
                                </option>
                                @foreach ($serveses as $value)
                                    <option value="{{ $value->id }}">
                                        {{ App::isLocale('en') ? $value->name_en : $value->name_ar }}
                                    </option>
                                @endforeach


                            </select>
                        </div>
                        <div class="form-div">
                            <select name="" id="">
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
                            <input type="text" id="datepicker" placeholder="{{ __('Appointment Date') }}">
                            <label for="datepicker">
                                <i class="ion-ios-calendar-outline"></i>
                            </label>
                        </div>
                        <div class="form-div">
                            <textarea name="" id="" placeholder="{{ __('Message') }}"></textarea>
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
    </div>
    <!-- end services details page -->


    <!-- start survey section -->

    <!-- end survey modal -->
    <!-- end survey section -->
@endsection
