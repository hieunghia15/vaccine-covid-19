@extends('admin.layout-admin',[ 'title' => __($title ?? 'Danh sách địa điểm tiêm chủng')])
@section('main')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Danh sách địa điểm tiêm chủng</h4>
                    <div class="card-header-form">
                        <a href="{{route('admin.vaccination-sites.create')}}" class="btn btn-success">Thêm địa điểm tiêm chủng</a>
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
                                <th class="col-md-4">Tên địa điểm</th>
                                <th class="col-md-6">Địa chỉ</th>
                                <th>Hành động</th>
                            </tr>
                           @foreach ($vaccination_sites as $key => $value)                                 
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->location}}</td>
                                <td>{{$value->ward->name}}, {{$value->ward->district->name}}, {{$value->ward->district->province->type}} {{$value->ward->district->province->name}}</td>
                                <td>
                                    <a href="{{route('admin.vaccination-sites.edit',$value->id)}}" class="btn btn-primary">Cập nhật</a>      
                                    <form method="POST" action="{{route('admin.vaccination-sites.delete',$value->id)}}">
                                        @csrf
                                        @method('Delete')
                                        <button onclick="return confirm('Bạn có muốn xóa tiền sử bệnh này không?');"
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
                            {{ $vaccination_sites->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
