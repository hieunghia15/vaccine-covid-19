@extends('admin.layout-admin',[ 'title' => __($title ?? 'Cập nhật quyền hạn')])
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
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
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
                <div class="col-md-4">
                        <div class="card-inner-group">
                            <div class="card-inner p-0">
                                <h3 class="nk-block-title page-title">Cập nhật quyền hạn</h3>
                                <form method="POST" action="{{route('admin.permissions.update-permission',[$permissions->id])}}" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <input type="text" class="form-control" id="" name="name" value="{{$permissions->name}}">
                                    <br>
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                    <button type="reset" class="btn btn-primary">Đặt lại</button>
                                </form>
                            </div>
                           
                        </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection