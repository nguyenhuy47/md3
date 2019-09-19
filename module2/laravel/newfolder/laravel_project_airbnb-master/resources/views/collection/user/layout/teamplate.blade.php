<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>
    <!-- Bootstrap core CSS-->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
{{--<<<<<<< HEAD:resources/views/collection/userPostHouse/layout/teamplate.blade.php--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
{{--=======--}}
{{-->>>>>>> d9f95edbac3fc617a7cfad85f735649a2321c24d:resources/views/collection/user/layout/teamplate.blade.php--}}
</head>
<body id="page-top">
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <a style="color: white" href="{{route('listBockHouse')}}"> Trang Chủ </a>
</nav>
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item">
            <a style="color: white" class="nav-link" href="{{route('editUsers', $user->id)}}">
                <i class="far fa-edit"></i>
                <span>
                    Thay đổi thông tin
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a style="color: white" class="nav-link" href="{{route('showUpdatedHomeStatus', $user->id)}}">
                <i class="far fa-edit"></i>
                <span>
                    Thay đổi trạng thái nhà
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a style="color: white" class="nav-link" href="{{ route('showStatistics', $user->id) }}">
                <i class="fas fa-fw fa-chart-area" style="color: white"></i>
                <span>
                    Thống kê thu nhập
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a style="color: white" class="nav-link" href="{{route('post.create', $user->id)}}">
                <i class="fas fa-fw fa-chart-area" style="color: white"></i>
                <span>
                    Đăng bài
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a style="color: white" class="nav-link" href="{{route('showNewPost', $user->id)}}">
                <i class="fas fa-edit" style="color: white"></i>
                <span>
                    Bài đăng mới
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a style="color: white" class="nav-link" href="{{ route('showCalendar', $user->id) }}">
                <i class="far fa-calendar-alt" style="color: white"></i>
                <span>
                    Lịch
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a style="color: white" class="nav-link" href="#">
                <i class="fas fa-fw fa-chart-area" style="color: white"></i>
                <span>
                    lịch sử thuê nhà
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('forgot-pass',$user->id)}}" style="color: white; margin-left: 38px">
                Đổi mật khẩu
            </a>
            <a class="dropdown-item" href="{{route('logout')}}" style="color: white" >Thoát
            </a>
        </li>

    </ul>
    <div class="container">
        @yield('content')
    </div>
</div>

<a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bạn muốn thoát khỏi ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body"> Chọn đăng xuất" bên dưới nếu bạn muốn thoát.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Thoát lựa chọ</button>
                <a class="btn btn-primary" href="{{asset('sign-in')}}">Thoát</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Core plugin JavaScript-->
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<!-- Page level plugin JavaScript-->
<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>
<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin.min.js')}}"></script>
<!-- Demo scripts for this page-->
<script src="{{asset('js/demo/datatables-demo.js')}}"></script>
<script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
</body>
