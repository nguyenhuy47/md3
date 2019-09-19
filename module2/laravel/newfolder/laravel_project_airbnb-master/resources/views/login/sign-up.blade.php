<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Login </title>
    <link rel="stylesheet" href="{{asset('/logincss/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/logincss/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('/logincss/vendors/css/vendor.bundle.addons.css')}}">
    <link rel="stylesheet" href="{{asset('/logincss/css/style.css')}}">
    <link rel="shortcut icon" href="{{'/logincss/images/favicon.png'}}">
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
        <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <h2 class="text-center mb-4">Register</h2>
                    <form action="{{route('sign-up')}}" method="post">
                        @csrf
                        <div class="auto-form-wrapper">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="name" name="name">
                                    <div class="input-group-append"><span class="input-group-text"><i class="mdi mdi-check-circle-outline"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="email" name="email">
                                    <div class="input-group-append"><span class="input-group-text"><i class="mdi mdi-check-circle-outline"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                    <div class="input-group-append"><span class="input-group-text"><i class="mdi mdi-check-circle-outline"></i></span>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group d-flex justify-content-center">
                                <select name="role" class="select2-container--bootstrap">
                                    <option value="2"> Đăng nhà </option>
                                    <option value="3"> Thuê nhà</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary submit-btn btn-block">Register</button>
                            </div>
                            <div class="text-block text-center my-3">
                                <span class="text-small font-weight-semibold">Already have and account ?</span>
                                <a href="{{route('sign-in')}}" class="text-black text-small"> Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('/logincss/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('/logincss/vendors/js/vendor.bundle.addons.js')}}"></script>
<script src="{{asset('/logincss/js/off-canvas.js')}}"></script>
<script src="{{asset('/logincss/js/misc.js')}}"></script>
</body>
</html>