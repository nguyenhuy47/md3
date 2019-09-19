@extends('home')
@section('title')
    @endsection

@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Nhân Viên</h1>
            </div>
            <div class="col-12">

                <div class="row">
                    <div class="col-6">
                        <a class="btn btn-outline-primary" href="" data-toggle="modal" data-target="#teamModal">
                            Lọc
                        </a>
                        <br>
                        @if (Session::has('success'))
                            <p class="text-success">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                {{ Session::get('success') }}
                            </p>
                        @endif

                        @if(isset($totalEmployeeFilter))
                            <span class="text-muted">
                      {{'Tìm thấy' . ' ' . $totalEmployeeFilter . ' '. 'nhân viên:'}}
                  </span>
                        @endif

                        @if(isset($teamFilter))
                            <div class="pl-5">
                     <span class="text-muted"><i class="fa fa-check" aria-hidden="true"></i>
                         {{ 'Thuộc tỉnh' . ' ' . $teamFilter->name }}</span>
                            </div>
                        @endif
                    </div>
                    <div class="col-6">
                        <form class="navbar-form navbar-left" action="{{ route('employees.search') }}" method="get">
                            @csrf
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="keyword" placeholder="Tên nhân viên"
                                               value="{{ (isset($_GET['keyword'])) ? $_GET['keyword'] : '' }}">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-default">Tìm kiếm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Mã nhân viên</th>
                    <th scope="col">Nhóm nhân viên</th>
                    <th scope="col">Tên nhân viên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Số điện thoại</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($employees) == 0)
                    <tr>
                        <td colspan="7" class="text-center">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($employees as $key => $employee)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $employee->code }}</td>
                            <td>{{ $employee->teams->name }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->gender }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td><a href="{{ route('employees.edit', $employee->id) }}">sửa</a></td>
                            <td><a href="{{ route('employees.destroy', $employee->id) }}" class="text-danger"
                                   onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <a class="btn btn-primary" href="{{ route('employees.create') }}">Thêm mới</a>
                        <a class="btn btn-primary" href="{{ route('employees.index') }}">Quay lại</a>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="teamModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <form action="{{ route('employees.filterByTeam') }}" method="get">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="select-by-program">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label border-right">Lọc nhân viên theo
                                            nhóm</label>
                                        <div class="col-sm-7">
                                            <select class="custom-select w-100" name="team_id">
                                                <option value="">Chọn nhom</option>
                                                @foreach($teams as $team)
                                                    @if(isset($teamFilter))
                                                        @if($team->id == $teamFilter->id)
                                                            <option value="{{$team->id}}"
                                                                    selected>{{ $team->name }}</option>
                                                        @else
                                                            <option value="{{$team->id}}">{{ $team->name }}</option>
                                                        @endif
                                                    @else
                                                        <option value="{{$team->id}}">{{ $team->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="submitAjax" class="btn btn-primary">Chọn</button>
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Hủy
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
