<x-back-layout titel="Service Create" pagetitel="edit"  page="Delma">

    <form role="form" action="{{route('delma.update',$delma->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="card-body">

            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <x-text-input label='Arabic Name' value='{{$delma->name_ar}}' name='name_ar' type='text' placeholder='Arabic Name' />

                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <x-text-input label='English Name' value='{{$delma->name_en}}' name='name_en' type='text' placeholder='Arabic Name' />

                </div>
                
               
            </div>
            <div class="form-group">
                <label>Arabic Titel</label>
                <textarea name="titel_ar" id="editor">{{$delma->titel_ar}}</textarea>
            </div>

            <div class="form-group">
                <label>English Titel</label>
                <textarea name="titel_en" id="editor1">{{$delma->titel_en}}</textarea>
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