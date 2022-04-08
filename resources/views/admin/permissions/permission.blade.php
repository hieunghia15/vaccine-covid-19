@extends('admin.layout-admin',[ 'title' => __($title ?? 'Danh sách quyền hạn')])
@section('main')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Danh sách quyền hạn</h4>
                    <div class="card-header-form">
                        <a href="{{route('admin.permissions.create-permission')}}" class="btn btn-success">Thêm quyền hạn</a>
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
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Hành động</th>
                            </tr>
                            @foreach ($all_permissions_in_database as $key => $permission)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$permission->name}}</td>
                                <td><a href="{{route('admin.permissions.update-permission',$permission->id)}}" class="btn btn-primary">Sửa</a>
                                    <a href="{{route('admin.permissions.delete-permission',$permission->id)}}" class="btn btn-danger">Xóa</a>
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
