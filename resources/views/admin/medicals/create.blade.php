@extends('admin.layout-admin',[ 'title' => __($title ?? 'Tạo tiền sử bệnh')])
@section('main')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Tạo tiền sử bệnh</h3>
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
                    <div class="col-md-8">
                        <div class="card-inner-group">
                            <div class="card-inner">
                                <h5>Nhập mô tả tiền sử bệnh</h5>
                                <form method="POST" action="{{ route('admin.medicals.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf                                                                    
                                    <textarea class="form-control" name="description" rows="5"></textarea>                                             
                                    <br>
                                    <button type="submit" class="btn btn-primary">Tạo</button>
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
