@extends('admin.layout-admin',[ 'title' => __($title ?? 'Cấp vai trò cho người dùng')])
@section('main')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Cấp vai trò cho người dùng</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tr>
                                <th>STT</th>
                                <th>Tên người dùng</th>
                                <th>Vai trò</th>
                                <th>Hành động</th>
                            </tr>
                            @foreach ( $user as $key => $value )
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $value->fullname }}</td>
                                <td>
                                    @foreach ($value->roles as $role)
                                    <span class="tb-sub">{{$role->name}}</span>
                                @endforeach
                            </td>
                                <td><a href="{{route('admin.permissions.assign-role',[$value->id])}}" class="btn btn-primary">Phân vai trò</a>
                                </td>
                            </tr>
                            @endforeach                           
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        <ul class="pagination mb-0">
                            {{ $user->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
