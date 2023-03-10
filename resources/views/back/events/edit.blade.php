<x-back-layout titel="Events Edit"  page="Events" pagetitel="edit">

    <form role="form" action="{{route('events.update',$events->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="card-body">

            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='Arabic Name' value='{{$events->name_ar}}' name='name_ar' type='text' placeholder='Arabic Name' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='English Name' value='{{$events->name_en}}' name='name_en' type='text' placeholder='Arabic Name' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='DATE' name='date' value='{{$events->date}}' type='date' placeholder='date' />

                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='Arabic venue' value='{{$events->venue_ar}}' name='venue_ar' type='text' placeholder='Arabic venue' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='English venue' value='{{$events->venue_en}}' name='venue_en' type='text' placeholder='English venue' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='Speakers' value='{{$events->Speakers}}' name='Speakers' type='text' placeholder='Speakers' />

                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='Arabic target' value='{{$events->target_ar}}' name='target_ar' type='text' placeholder='Arabic target' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='English target' value='{{$events->target_en}}' name='target_en' type='text' placeholder='English target' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='English time' value='{{$events->time}}' name='time' type='text' placeholder='English time' />

                </div>
               
            </div>

            <div class="form-group">
                <label>Arabic discription</label>
                <textarea name="discription_ar" id="editor">{{$events->discription_ar}}</textarea>
            </div>

            <div class="form-group">
                <label>English discription</label>
                <textarea name="discription_en" id="editor1">{{$events->discription_en}}</textarea>
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