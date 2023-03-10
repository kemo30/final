<x-back-layout titel="Appointments" page="Appointments" pagetitel="table" >

    <div class="content">
        <div class="container-fluid">
            
            <div class="card">
                
                <!-- /.card-header -->
                <div class="card-body">
                    <a href="{{route('appointment.create')}}">
                        <button type="button" style="width: 80px ; margin-bottom:20px" class="btn btn-block btn-outline-primary">{{__('create')}}</button>
                    </a>
                    <form class="" method="POST" action="{{ route('app.search') }}" style="max-width: 300px;  margin: 20px 0px" >
                        @csrf
                       <div style="display: flex">
                        <input type="text" class="form-control" placeholder="search" name="search" style="display: inline" style="min-width: 200px">
                        <input class="btn btn-primary" type="submit" style="margin:0 20px" value="search">
                       </div>
                       
                        
                     </form>
                    
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row">

                                            <th style="max-width: 300px" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">{{__('Name')}}</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">{{__('phone')}}</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">{{__('doctor')}}</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">{{__('service')}}</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">{{__('date')}}</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">{{__('oprations')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($appointments as $appointment)
                                        <tr role="row" id="sid{{$appointment->id}}" class="odd">
                                            <td ><a href="">{{$appointment->name}}</a></td>
                                            <td>{{$appointment->phone}}</td>
                                            <td>{{$appointment->doctors->name_en}}</td>
                                            <td>{{$appointment->services->name_en}}</td>
                                            <td>{{$appointment->date}}</td>
                                            <td>
                                                <a class="modal-effect btn btn-sm btn-info" href="{{route('appointment.edit', $appointment->id,$appointment->id)}}" title="edit">
                                                    Edit
                                                </a>

                                                <a style="margin: auto;" class="modal-effect btn btn-sm btn-danger deleteProduct" data-token='{{ csrf_token() }}' data-id='{{$appointment->id}}' title="delete">
                                                    Delete
                                                </a>


                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-12 col-md-7">
                                {{$appointments->links()}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <x-slot name='script'>
        <x-alert></x-alert>
        <script>
            $(".deleteProduct").click(function(e) {
                e.preventDefault();
                var id = $(this).data("id");
                var token = $(this).data("token");
                $.ajax({
                    url: "appointment/"+id,
                    type: 'DELETE',
                    dataType: "JSON",
                    data: {


                        "_token": token,
                    },
                    success: function(date) {
                        $("#sid" + id).remove();
                        Swal.fire(
                            'Remind!',
                            'Company deleted successfully!',
                            'success'
                        );
                    }

                });


            });
        </script>
    </x-slot>
</x-back-layout>