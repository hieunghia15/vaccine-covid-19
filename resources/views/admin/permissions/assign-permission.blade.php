@extends('admin.layout-admin',[ 'title' => __($title ?? 'Phân quyền cho vai trò')])
@section('main')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">                      
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1"
                                        data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <h3 class="nk-block-title page-title">Phân quyền cho vai trò</h3>
                        </div><!-- .nk-block-between -->
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
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner-group">
                                <div class="card-inner p-0">
                                    <h4>Vai trò hiện tại: {{ $role->name }}</h4>
                                    <h5>Chọn các quyền hạn</h5>
                                    <form method="POST"
                                        action="{{ route('admin.permissions.insert-permission', [$role->id]) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('Patch')
                                        @foreach ($permission as $key => $permissions)
                                        <div class="form-check">
                                            <input class="check" type="checkbox" 
                                            @foreach ($get_permissions as
                                                $key=>$get_per)
                                            @if ($get_per->id==$permissions->id)
                                            checked
                                            @endif
                                            @endforeach
                                            name="permission[]"
                                            id="{{$permissions->id}}" value="{{$permissions->name}}">
                                            <label class="form-check-label" for="{{$permissions->id}}">
                                                {{$permissions->name}}
                                            </label>
                                        </div>
                                        @endforeach
                                        <br>
                                        <button type="submit" class="btn btn-primary">Phân quyền</button>                                       
                                    </form>
                                </div>                               
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    <script>
        $("#checkAll").click(function () {
        $(".check").prop('checked', $(this).prop('checked'));
    });
    </script>
@endsection
