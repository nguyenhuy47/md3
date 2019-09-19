@extends('collection.user.layout.teamplate')
@section('content')
    <div class="col-12">
        <form method="post" action="{{route('editUser', $id)}}">
            @csrf

            @if(Session::has('messenger'))
                <p style="color: red">{{Session::get('messenger')}}</p>
            @endif

            @foreach($users as $user)
            <div class="form-group">
                <label for="exampleFormControlInput1"> Tên</label>
                <input class="form-control" name="name" placeholder="Tên" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email </label>
                <input class="form-control" name="email" placeholder="Email" value="{{$user->email}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Địa chỉ</label>
                <input class="form-control" name="address" placeholder="Địa chỉ" value="{{$user->address}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Số điện thoại</label>
                <input class="form-control" name="phone" placeholder="Số điện thoại" value="{{$user->Phone}}">
            </div>

            @endforeach
            <button type="submit" style="background-color: #00a855; color:white"> Gửi</button>
        </form>
    </div>
@endsection