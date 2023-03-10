<x-back-layout titel="Doctors edit" page="Doctors" pagetitel="edit">

    <form role="form" action="{{route('doctors.update', $doctors->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="card-body">

            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='Arabic Name' value='{{$doctors->name_ar}}' name='name_ar' type='text' placeholder='Arabic Name' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='English Name' value='{{$doctors->name_en}}' name='name_en' type='text' placeholder='Arabic Name' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='phone number' value='{{$doctors->phone}}' name='phone' type='text' placeholder='phone number' />

                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='facebook link' value='{{$doctors->facebook}}' name='facebook' type='text' placeholder='facebook' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='twitter link' value='{{$doctors->twitter}}' name='twitter' type='text' placeholder='twitter' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='instagram link' value='{{$doctors->instagram}}' name='instagram' type='text' placeholder='instagram' />

                </div>
            </div>

            <div class="row">

                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='whatsapp link' value='{{$doctors->whatsapp}}' name='whatsapp' type='text' placeholder='whatsapp' />
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Service select</label>
                        <select class="form-control" name='services_id' id="exampleFormControlSelect1">
                        <option disabled selected> Service</option>
                            @foreach($service as $value)
                            <option @if($value->id == $doctors->services_id) selected @endif value="{{$value->id}}">{{$value->name_en}}</option>
                            @endforeach
                           
                        </select>
                    </div>
                </div>

            </div>







            <div class="form-group">
                <label>Arabic Titel</label>
                <textarea name="titel_ar" id="editor">{{$doctors->titel_ar}}</textarea>
            </div>

            <div class="form-group">
                <label>English Titel</label>
                <textarea name="titel_en" id="editor1">{{$doctors->titel_en}}</textarea>
            </div>
            <div class="row">

                <div class="col-sm-6">
                    <x-file-inpout name='image' label='doctor Image' />
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