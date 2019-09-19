@extends('layouts.home')
@section('title', 'Chỉnh sửa khách hàng')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Chỉnh sửa thông tin</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('employees.update', $employee->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Mã nhân viên</label>
                        <input type="number" class="form-control" name="code" value="{{ $employee->code }}" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label>Tỉnh thành</label>
                        <select class="form-control" name="team_id">
                            @foreach($teams as $team)
                                <option
                                    @if($employee->team_id == $team->id)
                                    {{"selected"}}
                                    @endif
                                    value="{{$team->id}}">{{$team->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tên nhân viên</label>
                        <input type="text" class="form-control" name="name" value="{{ $employee->name }}" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ngày sinh</label>
                        <input type="date" class="form-control" name="dob" value="{{ $employee->dob }}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Giới tính</label>
                        <select class="form-control" name="gender" value="{{ $employee->gender }}">
                            <option value="nam">Nam</option>
                            <option value="nữ">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="number" class="form-control" name="phone" value="{{ $employee->phone }}" placeholder="Enter phone" required>
                    </div>
                    <div class="form-group">
                        <label>Số CMND</label>
                        <input type="number" class="form-control" name="CMND"  value="{{ $employee->CMND }}" placeholder="Enter CMND" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $employee->email }}" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Địa chỉ</label>
                        <input type="email" class="form-control" name="address" placeholder="Enter address" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
