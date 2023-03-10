<x-back-layout titel="Service Create" pagetitel="create" page="Sercice">

    <form role="form" action="{{route('services.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">

            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <x-text-input label='Arabic Name' name='name_ar' type='text' placeholder='Arabic Name' />

                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <x-text-input label='English Name' name='name_en' type='text' placeholder='Arabic Name' />

                </div>

                <div class="col-sm-12">
                    <x-text-area label='Arabic Discription' name='description_ar' placeholder='Arabic Discription' />
                </div>
                <div class="col-sm-12">
                    <x-text-area label='English Discription' name='description_en' placeholder='Arabic Discription' />
                </div>
            </div>

            <div class="form-group">
            <label>Arabic Titel</label>
            <textarea name="titel_ar"  id="editor" ></textarea>
            </div>
            <div class="form-group">
            <label>English Titel</label>
            <textarea name="titel_en"   id="editor1" ></textarea>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <x-file-inpout name='icon' label='Service Icon' />
                </div>
                <div class="col-sm-6">
                    <x-file-inpout name='image' label='Service Image' />
                </div>
            </div>
            <input class="btn btn-primary" type="submit">

        </div>





    </form>
    <x-slot name='script'>
        
     <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ))
    
    
    
  
       
       
    </script>
    
     <script>
    ClassicEditor
        .create( document.querySelector( '#editor1' ) )
       
    </script>
       
        <x-alert></x-alert>
        <script src="{{asset('assets/back/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
        <script src="{{asset('assets/back/plugins/summernote/summernote-bs4.min.js')}}"></script>
        <script src="{{asset('assets/back/dist/js/demo.js')}}"></script>
    </x-slot>


</x-back-layout>