@extends('admin.layout-admin',[ 'title' => __($title ?? 'Danh sách bài viết')])
@section('main')
    <!-- Main Content -->
    <div class="section-header">
        <h1>Danh sách bài viết</h1>
        <div class="section-header-button">
            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Thêm mới</a>
        </div>
        {{-- <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Posts</a></div>
              <div class="breadcrumb-item">All Posts</div>
            </div> --}}
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
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tất cả bài viết</h4>
                        </div>
                        <div class="card-body">
                            <div class="float-left">
                                <select class="form-control selectric">
                                    <option>Tất cả</option>
                                    <option>Move to Draft</option>
                                    <option>Move to Pending</option>
                                    <option>Delete Pemanently</option>
                                </select>
                            </div>
                            <div class="float-right">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Tìm kiếm">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="clearfix mb-3"></div>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th class="col-md-1">STT</th>
                                        <th class="col-md-4">Tiêu đề</th>
                                        <th class="col-md-2">Danh mục</th>
                                        <th class="col-md-2">Tác giả</th>
                                        <th class="col-md-2">Ngày đăng</th>
                                        <th class="col-md-2">Trạng thái</th>
                                    </tr>
                                    @foreach ($posts as $key => $value)
                                        <tr>
                                            <td>
                                                {{ $key + 1 }}
                                            </td>
                                            <td>{{ $value->title }}
                                                <div class="table-links">
                                                    <div class="bullet"></div>
                                                    <a href="{{ route('admin.posts.show', $value->id) }}">Xem chi tiết</a>
                                                    <div class="bullet"></div>
                                                    <a href="{{ route('admin.posts.edit', $value->id) }}">Sửa</a>
                                                    <div class="bullet"></div>
                                                    <a href="{{ route('admin.posts.destroy', $value->id) }}"
                                                        class="text-danger">Xóa</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#">{{ $value->category->name }}</a>
                                            </td>
                                            <td>
                                                <div class="d-inline-block ml-1">{{ $value->postBy->fullname }}</div>
                                            </td>
                                            <td>{{ $value->updated_at->format('d/m/Y H:i:s') }}</td>
                                            <td>
                                                @if ($value->is_actived == 0)
                                                    <div class="badge badge-warning">Chưa duyệt</div>
                                                @else
                                                    <div class="badge badge-primary">Đã duyệt</div>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="float-right">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
