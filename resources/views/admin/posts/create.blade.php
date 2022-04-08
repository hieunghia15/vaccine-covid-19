@extends('admin.layout-admin',[ 'title' => __($title ?? 'Tạo bài viết')])
@section('main')
    <!-- Main Content -->
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{route('admin.posts.index')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tạo bài viết mới</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Posts</a></div>
            <div class="breadcrumb-item">Create New Post</div>
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
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Viết bài viết của bạn</h4>
                    </div>
                    <form method="POST" action="{{ route('admin.posts.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf  
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tiêu đề</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="title" id="slug" onkeyup="ChangeToSlug();">
                            </div>
                        </div>
                        <input type="hidden" class="form-control" name="post_slug" id="convert_slug">
                        <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mô tả</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Danh mục</label>
                            <div class="col-sm-12 col-md-7">
                                <select class="form-control selectric" name="category_id">
                                    @foreach ($categories as $key=> $value)                                                                  
                                    <option value="{{$value->id}}">{{$value->name}}</option>   
                                    @endforeach                                
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nội dung</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="summernote" name="content"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ảnh thu nhỏ</label>
                            <div class="col-sm-12 col-md-7">
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Chọn ảnh</label>
                                    <input type="file" name="thumbnail" id="image-upload" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Trạng thái</label>
                            <div class="col-sm-12 col-md-7">
                                <select class="form-control selectric" name="is_actived">
                                    <option value="0">Chưa duyệt</option>
                                    <option value="1">Đã duyệt</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button type="submit" class="btn btn-primary">Tạo bài viết</button>
                                <button type="reset" class="btn btn-primary">Đặt lại</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
