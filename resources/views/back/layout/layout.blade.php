<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> {{config('app.name')}} | {{$titel}}</title>
    <link rel="stylesheet" href="{{asset('assets/back/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/back/dist/css/adminlte.min.css')}}">
    <!-- editor -->
    <link rel="stylesheet" href="{{asset('assets/back/plugins/summernote/summernote-bs4.css')}}">
    <!-- sweetalert -->
    <link rel="stylesheet" href="{{asset('assets/back/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('dashboard') }}" class="nav-link">Home</a>
                </li>
               
            </ul>
            

            <!-- SEARCH FORM -->
           

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                
                
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
           

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('assets/back/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{Auth::user()->name}}</a>
                    </div>
                   
                </div>
                
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                       
                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Appointments
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            
                            <ul class="nav nav-treeview" style="margin-left: 10px">
                               

                                <li class="nav-item">
                                    <a href="{{ route('app.today') }}" class="nav-link">
                                        
                                        <p>Today Appointments</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('appointment.index') }}" class="nav-link ">
                                       
                                        <p>Appointments table</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('appointment.create') }}" class="nav-link">
                                       
                                        <p>Create Appointments</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>

                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link ">
                               
                                <i class="nav-icon fas fa-tag"></i>
                                <p>
                                    Services
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview"  style="margin-left: 10px">
                                <li class="nav-item">
                                    <a href="{{ route('services.index') }}" class="nav-link ">
                                       
                                        <p>Services table</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('services.create') }}" class="nav-link">
                                        
                                        <p>Services Create</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link ">
                               
                                
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Users
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview"  style="margin-left: 10px">
                                <li class="nav-item">
                                    <a href="{{ route('user.index') }}" class="nav-link ">
                                       
                                        <p>Users table</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('user.create') }}" class="nav-link">
                                        
                                        <p>Users Create</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-glasses"></i>
                                
                                <p>
                                    Doctors
                                    <i class="right fas fa-angle-left"></i>
                                  
                                </p>
                                
                            </a>
                            <ul class="nav nav-treeview"  style="margin-left: 10px">
                                <li class="nav-item">
                                    <a href="{{ route('doctors.index') }}" class="nav-link ">
                                       
                                        <p>Doctors table</p>
                                        
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('doctors.create') }}" class="nav-link">
                                        
                                        <p>Add New Doctor</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-newspaper"></i>
                                
                                
                                <p>
                                    News
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview"  style="margin-left: 10px">
                                <li class="nav-item">
                                    <a href="{{ route('news.index') }}" class="nav-link ">
                                       
                                        <p>News table</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('news.create') }}" class="nav-link">
                                        
                                        <p>Add New</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        
                        



                        

                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link ">
                               
                                <i class="nav-icon fas fa-marker"></i>
                                <p>
                                    Events
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview"  style="margin-left: 10px">
                                <li class="nav-item">
                                    <a href="{{ route('events.index') }}" class="nav-link ">
                                       
                                        <p>Events table</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('events.create') }}" class="nav-link">
                                        
                                        <p>Add Event</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                       

                       
                        
                    </ul>
                    <div>
                        <form method="post" action="/logout" style="margin-top: 10px">
                            @csrf
                            <button class="btn btn-success" type="submit">Logout</button>
                        </form>
                     </div>

                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">{{$page}}</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">{{$page}}</li>
                                <li class="breadcrumb-item active">{{$pagetitel}}</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            {{$slot}}
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2022-2023 EGI .</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('assets/back/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('assets/back/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/back/dist/js/adminlte.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/decoupled-document/ckeditor.js"></script>
    <script src="{{asset('assets/back/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('assets/back/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('assets/back/dist/js/demo.js')}}"></script>

   
    <script type="text/javascript">
	(function ($) {
    $(function () {

        var addFormGroup = function (event) {
            event.preventDefault();

            var $formGroup = $(this).closest('.form-group');
            var $multipleFormGroup = $formGroup.closest('.multiple-form-group');
            var $formGroupClone = $formGroup.clone();

            $(this)
                .toggleClass('btn-default btn-add btn-danger btn-remove')
                .html('&ndash;');

            $formGroupClone.find('input').val('');
            $formGroupClone.insertAfter($formGroup);

            var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
            if ($multipleFormGroup.data('max') <= countFormGroup($multipleFormGroup)) {
                $lastFormGroupLast.find('.btn-add').attr('disabled', true);
            }
        };

        var removeFormGroup = function (event) {
            event.preventDefault();

            var $formGroup = $(this).closest('.form-group');
            var $multipleFormGroup = $formGroup.closest('.multiple-form-group');

            var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
            if ($multipleFormGroup.data('max') >= countFormGroup($multipleFormGroup)) {
                $lastFormGroupLast.find('.btn-add').attr('disabled', false);
            }

            $formGroup.remove();
        };

        var countFormGroup = function ($form) {
            return $form.find('.form-group').length;
        };

        $(document).on('click', '.btn-add', addFormGroup);
        $(document).on('click', '.btn-remove', removeFormGroup);

    });
})(jQuery);	</script>

    {{$script}}
</body>

</html>