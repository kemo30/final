@extends('front.layout.front')
@section('content')

  <!-- start jobs page -->
  <div class="careers-page">
    <div class="container">
      <div class="page-heading">
        <p>
          {{__('APPLY FOR A JOB')}}
        </p>
      </div>
    </div>

    <div class="page-body">
      <div class="container">
        <form action="" class="job-form" data-aos="zoom-in-up" data-aos-duration="1500">
          <div class="form-div">
            <input type="text" name="" id="name" placeholder="{{__('Full name')}}">
            <div class="thin-line"></div>
          </div>
          <div class="form-div">
            <input type="email" name="" id="email" placeholder="{{__('E-mail Address')}}">
            <div class="thin-line"></div>
          </div>
          <div class="form-div">
            <input type="text" name="" id="phone" placeholder="{{__('Phone number')}}">
            <div class="thin-line"></div>
          </div>
          <div class="form-div">
            <textarea name="" id="coverLetter" placeholder="{{__('Cover Letter')}}"></textarea>
          </div>
          <div class="form-div">
            <label for="file">
              <i class="feather icon-paperclip"></i>
              <span>
                {{__('Attach your resume')}}
              </span>
            </label>
            <input type="file" name="" id="file" accept=".doc, .docx,.pdf">
          </div>
          <div class="form-div">
            <button type=" submit">
              <i class="feather icon-send"></i>
              <span>
                {{__('Submit')}}
              </span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end jobs page -->

  