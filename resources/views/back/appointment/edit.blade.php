<x-back-layout titel="Appointments Create" pagetitel="edit" page="Appointments">

    <form role="form" action="{{route('appointment.update', $appointment->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="card-body">

            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label=' ame' value='{{  $appointment->name}}' name='name' type='text' placeholder='Name' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='email' value='{{  $appointment->email}}' name='email' type='text' placeholder='email' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='phone number' value='{{  $appointment->phone}}' name='phone' type='text' placeholder='phone number' />

                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='date' value='{{  $appointment->date}}' name='date' type='date' placeholder='date' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='message' value='{{  $appointment->message}}' name='message' type='text' placeholder='message' />

                </div>
                
            </div>

            <div class="row">

               
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Service select</label>
                        <select class="form-control" name='service' id="exampleFormControlSelect1">
                        <option disabled selected> Service</option>
                            @foreach($services as $value)
                            <option value="{{$value->id}}" @if($value->id == $appointment->services->id) selected @endif>{{$value->name_en}}</option>
                            @endforeach
                           
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Doctor select</label>
                        <select class="form-control" name='doctor' id="exampleFormControlSelect1">
                        <option disabled selected> Doctor</option>
                            @foreach($doctors as $value)
                            <option value="{{$value->id}}" @if($value->id == $appointment->doctors->id) selected @endif>{{$value->name_en}}</option>
                            @endforeach
                           
                        </select>
                    </div>
                </div>

            </div>







                     
            <input class="btn btn-primary" type="submit">

        </div>






    </form>
    <x-slot name='script'>

        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
        </script>
        <script>
            ClassicEditor
                .create(document.querySelector('#editor1'))
        </script>


        <x-alert></x-alert>
        <script src="{{asset('assets/back/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
        <script src="{{asset('assets/back/plugins/summernote/summernote-bs4.min.js')}}"></script>
        <script src="{{asset('assets/back/dist/js/demo.js')}}"></script>
    </x-slot>


</x-back-layout>