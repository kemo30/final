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
        <li>
          <div class="li-img">
            <img src="{{ URL::asset('./delma/' . $delma->image) }}" alt="img">
          </div>
          <div class="li-text">
            <div class="text-heading">
              <p>
                {{ $delma->name_en }}
              </p>
            </div>
            <ul class="inside-ul">
              <li>
                <i class="linearicons-checkmark-circle"></i>
                <p>
                  <?= $delma->titel_en ?>
                </p>
              </li>
              
              
            </ul>
          </div>
        </li>
       
      </ul>
    </div>
  </div>
  <!-- ./new branch page -->

  <!-- start survey section -->
  
  <!-- end survey modal -->
  <!-- end survey section -->
  @endsection