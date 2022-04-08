@extends('admin.layout-admin',[ 'title' => __($title ?? 'Edit Permission')])
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
                <div class="nk-block">
                        <div class="card-inner-group">
                            <div class="card-inner p-0">
                                <h3 class="nk-block-title page-title">Xóa quyền hạn</h3>
                                <h6>{{$permissions->name}}</h6>
                                <form method="POST" action="{{route('admin.permissions.delete-permission',[$permissions->id])}}" enctype="multipart/form-data">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('Bạn có muốn xóa quyền hạn này không?');"
                                            class="btn btn-danger">Xóa</button>
                                </form>
                            </div>                 
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection