<x-back-layout titel="Service Create" pagetitel="create" page="Users">

    <form role="form" action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">

            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='Name' name='name' type='text' placeholder='Name' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='email' name='email' type='text' placeholder='email' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='password' name='password' type='password' placeholder='password' />

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