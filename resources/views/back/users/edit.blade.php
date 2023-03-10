<x-back-layout titel="Service Create" pagetitel="edit" page="Users">

    <form role="form" action="{{route('user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="card-body">

            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='Name' value='{{  $user->name}}' name='name' type='text' placeholder='Name' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='Email' value='{{  $user->email}}' name='email' type='text' placeholder='email' />

                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <x-text-input label='Password' value='' name='password' type='password' placeholder='password' />

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