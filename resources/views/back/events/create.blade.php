<x-back-layout titel="Events Create" pagetitel="create" page="Events">

    <form role="form" action="{{route('events.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">

            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='Arabic Name' name='name_ar' type='text' placeholder='Arabic Name' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='English Name' name='name_en' type='text' placeholder='Arabic Name' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='DATE' name='date' type='date' placeholder='date' />

                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='Arabic venue' name='venue_ar' type='text' placeholder='Arabic venue' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='English venue' name='venue_en' type='text' placeholder='English venue' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='Speakers' name='Speakers' type='text' placeholder='Speakers' />

                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='Arabic target' name='target_ar' type='text' placeholder='Arabic target' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='English target' name='target_en' type='text' placeholder='English target' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='time' name='time' type='text' placeholder='time' />

                </div>
               
            </div>

            <div class="form-group">
                <label>Arabic discription</label>
                <textarea name="discription_ar" id="editor"></textarea>
            </div>

            <div class="form-group">
                <label>English discription</label>
                <textarea name="discription_en" id="editor1"></textarea>
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