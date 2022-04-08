@extends('admin.layout-admin',[ 'title' => __($title ?? 'Danh sách loại vắc xin')])
@section('main')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Danh sách loại vắc xin</h4>
                    <div class="card-header-form">
                        <a href="{{route('admin.vaccination-types.create')}}" class="btn btn-success">Thêm loại vắc xin</a>
                    </div>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>STT</th>
                                <th class="col-md-4">Tên loại vắc xin</th>
                                <th class="col-md-2">Độ tuổi áp dụng</th>
                                <th class="col-md-2">Hiệu quả</th>
                                <th class="col-md-1">Liều tiêm</th>
                                <th class="col-md-2">Thời gian giữa các mũi tiêm</th>
                                <th class="col-md-6">Nhà sản xuất</th>
                                <th>Hành động</th>
                            </tr>
                           @foreach ($vaccination_types as $key => $value)                                 
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->applicable_age}}</td>
                                <td>{{$value->effection}}</td>
                                <td>{{$value->injection_dose}}</td>
                                <td>{{$value->injection_time}}</td>
                                <td>{{$value->manufacture->name}}</td>
                                <td>
                                    <a href="{{route('admin.vaccination-types.edit',$value->id)}}" class="btn btn-primary">Cập nhật</a>      
                                    <form method="POST" action="{{route('admin.vaccination-types.delete',$value->id)}}">
                                        @csrf
                                        @method('Delete')
                                        <button onclick="return confirm('Bạn có muốn xóa loại vắc xin này không?');"
                                            class="btn btn-danger">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        <ul class="pagination mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1 <span
                                        class="sr-only">(current)</span></a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
