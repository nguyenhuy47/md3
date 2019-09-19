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
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auto-form-wrapper">
                        <form action="{{route('sign-store')}}" method="post">
                            @csrf
                            @if(Session::has('errLogin'))
                                <p style="color: red;text-align: center">{{Session::get('errLogin')}}</p>
                            @endif

                            <div class="form-group">
                                <label class="label">Username</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Username" name="username">
                                    <div class="input-group-append"><span class="input-group-text"><i
                                                    class="mdi mdi-check-circle-outline"></i></span>
                                    </div>
                                </div>

                                @if ($errors->has('password'))
                                    <p style="color: red;text-align: center">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="*********" name="password">
                                    <div class="input-group-append"><span class="input-group-text"><i
                                                    class="mdi mdi-check-circle-outline"></i></span>
                                    </div>
                                </div>

                                @if ($errors->has('password'))
                                    <p style="color: red;text-align: center">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <div class="form-group"><button class="btn btn-primary submit-btn btn-block">Login</button></div>

                            <div class="form-group d-flex justify-content-between">
                                <div class="form-check form-check-flat mt-0">
                                    <label class="form-check-label"><input type="checkbox" class="form-check-input" name="remember_me"> Keep me signed in </label>
                                </div>
                                <a href="#" class="text-small forgot-password text-black">Forgot Password</a>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block g-login">
                                    <img class="mr-3" src="../../images/file-icons/icon-google.svg" alt="">Log in with Google
                                </button>
                            </div>
                            <div class="text-block text-center my-3">
                                <span class="text-small font-weight-semibold"> Not a member ?</span>
                                <a href="{{route('sign-up')}}" class="text-black text-small">Create new account</a>
                            </div>
                        </form>
                    </div>


                    <div class="idv">
                    <ul class="auth-footer">
                        <li>
                            <a href="#">Conditions</a>
                        </li>
                        <li>
                            <a href="#">Help</a>
                        </li>
                        <li>
                            <a href="#">Terms</a>
                        </li>
                    </ul>
                    <p class="footer-text text-center">copyright © 2018 KhaiMaGiao. All rights reserved.</p>
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
