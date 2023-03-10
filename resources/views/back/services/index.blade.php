<x-back-layout titel="Service Edit" page="Service" pagetitel="table">
<div class="content">
        <div class="container-fluid">
            <div class="card">
                

                <!-- /.card-header -->
                <div class="card-body">
                    <a href="{{route('services.create')}}">
                        <button type="button" style="width: 80px ; margin-bottom:20px" class="btn btn-block btn-outline-primary">{{__('create')}}</button>
                    </a>
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
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">{{__('Id')}}</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">{{__('Name')}}</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">{{__('created at')}}</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">{{__('Opration')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($services as $service)
                                        <tr role="row" id="sid{{$service->id}}" class="odd">
                                            <td tabindex="0" class="sorting_1">{{$service->id}}</td>
                                            <td><a href="">{{$service->name_en}}</a></td>
                                            <td>{{$service->created_at}}</td>
                                            <td style="max-width:20px ;">
                                                <a  class="modal-effect btn btn-sm btn-info" href="{{route('services.edit',$service->id)}}" title="edit">
                                                Edit
                                                </a>

                                                <a style="margin: auto;" class="modal-effect btn btn-sm btn-danger deleteProduct" data-token='{{ csrf_token() }}' data-id='{{$service->id}}' title="delete">
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
                                {{$services->links()}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <x-slot name='script'>
    <x-alert ></x-alert>
<script>
    $(".deleteProduct").click(function(e){
        e.preventDefault();
        var id = $(this).data("id");
        var token = $(this).data("token");

        $.ajax(
        {
            url: "services/"+id,
            type: 'DELETE',
            dataType: "JSON",
            data: {
               
               
                "_token": token,
            },
            success:function (date){
               $("#sid"+id).remove();
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