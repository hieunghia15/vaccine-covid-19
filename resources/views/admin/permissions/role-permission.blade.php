@extends('admin.layout-admin',[ 'title' => __($title ?? 'Cấp quyền hạn cho vai trò')])
@section('main')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Cấp quyền hạn cho vai trò</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tr>
                                <th>STT</th>
                                <th>Vai trò</th>
                                <th>Quyền hạn</th>
                                <th>Hành động</th>
                            </tr>
                            @foreach ($role as $key => $value)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $value->name }}</td>
                                <td>
                                @foreach ($value->permissions as $permission )
                                {{ $permission->name }}
                                @endforeach
                            </td>
                                <td><a href="{{route('admin.permissions.assign-permission',['id'=>$value->id])}}" class="btn btn-primary">Phân quyền</a>
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
