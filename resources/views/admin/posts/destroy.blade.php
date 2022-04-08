@extends('admin.layout-admin',[ 'title' => __($title ?? 'Xóa bài viết')])
@section('main')
    <!-- Main Content -->
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Xóa bài viết</h1>
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
                        <form method="POST" action="{{ route('admin.posts.delete', $posts->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('Delete')
                            <div class="card-body">
                               <h6>Bạn có muốn xóa bài viết này?</h6>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12">
                                        <button type="submit" onclick="return confirm('Bạn có muốn xóa ?');" class="btn btn-danger">Xóa</button>
                                        <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Trở lại</a>                                      
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
