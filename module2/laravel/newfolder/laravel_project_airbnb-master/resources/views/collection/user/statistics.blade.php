@extends('collection.user.layout.teamplate')
@section('content')
    <div id="content-wrapper">
        <div class="container-fluid">
            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i> Thống kê
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên người thuê</th>
                                <th>Nhà</th>
                                <th>Gíá tiền</th>
                                <th>Trạng thái</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($statistics as $key => $statistic)
                                <tr>
                                    <td>{{ $key++ }}</td>
                                    <td>{{ $statistic->user->name }}</td>
                                    <td>{{ $statistic->name }}</td>
                                    <td>{{ $statistic->price }}</td>
                                    <td>
                                        @if($statistic->status == 0 )
                                            Chưa cho thuê
                                        @else
                                             Đã cho thuê
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <tr>Tổng doanh thu : {{ $price }} VND</tr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

