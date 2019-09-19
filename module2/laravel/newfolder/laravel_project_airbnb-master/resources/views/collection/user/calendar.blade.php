@extends('collection.user.layout.teamplate')
@section('content')
    <div id="content-wrapper">
        <div class="container-fluid">
            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i> Lịch
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Lịch hẹn</th>
                                <th>Tên người hẹn</th>
                                <th>Số điện thoại</th>
                                <th>Nhà</th>
                                <th>Huy</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($calenders as $key => $calender)
                                <tr>
                                    <td>{{ $key++ }}</td>
                                    <td>{{ $calender->calender }}</td>
                                    <td>{{ $calender->name }}</td>
                                    <td>{{ $calender->phone }}</td>
                                    <td>{{ $calender->houses->name }}</td>
                                    <td><a href="{{ route('deleteCalender', $calender->id) }}">Huy</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        @if(session()->has('calender'))
            alert("{{ session()->get('calender') }}");
        @endif
    </script>
@endsection

