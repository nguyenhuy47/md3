@extends('collection.user.layout.teamplate')
@section('content')

    <div class="col-12">
        <form method="post" action="{{route('forgot-password' , $id)}}">
            @csrf
            @if(Session::has('messenger1'))
                <p style="color: red; text-align: center">{{Session::get('messenger1')}}</p>
            @endif

            @if(Session::has('messenger2'))
                <p style="color: red;text-align: center">{{Session::get('messenger2')}}</p>
            @endif

            @foreach($users as $user)
                <div class="form-group">
                    @if($errors->has('password'))
                        <p style="color: red">{{ $errors->first('password') }}</p>
                    @endif
                    <label for="exampleFormControlInput1">Mật khẩu hiện tại:</label>
                    <input class="form-control" type="password" id="exampleFormControlInput1"
                           placeholder="Mật khẩu hiện tại" name="password">
                </div>
                <div class="form-group">
                    @if($errors->has('password-new'))
                        <p style="color: red">{{ $errors->first('password-new') }}</p>
                    @endif
                    <label for="exampleFormControlInput1">Mật khẩu mới:</label>
                    <input class="form-control" type="password" id="exampleFormControlInput1" placeholder="Mật khẩu mới"
                           name="password-new">
                </div>

            @endforeach
            <button type="submit" style="background-color: #00a855; color:white"> Gửi</button>
        </form>
    </div>

@endsection