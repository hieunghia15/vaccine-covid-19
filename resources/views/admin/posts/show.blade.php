@extends('admin.layout-admin',[ 'title' => __($title ?? 'Xóa bài viết')])
@section('main')
    <!-- Main Content -->
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Xem bài viết</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Posts</a></div>
            <div class="breadcrumb-item">Create New Post</div>
        </div>
    </div>
    <h2 class="section-title">{{$posts->category->name}}</h2>   
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <h4>{{$posts->title}}</h4>
                    <span>{{$posts->created_at->format('d/m/Y H:i:s')}}</span>
                   {!!$posts->content!!}
                   <h6 class="float-right">Theo {{$posts->postBy->fullname}}</h6>
                </div>
            </div>
        </div>
    @endsection
