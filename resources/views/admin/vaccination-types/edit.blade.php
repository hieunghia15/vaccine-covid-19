@extends('admin.layout-admin',[ 'title' => __($title ?? 'Tạo loại vắc xin')])
@section('main')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Cập nhật loại vắc xin</h3>
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
                                <form method="POST" action="{{ route('admin.vaccination-types.update',$vaccination_types->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH') 
                                    <!-- Address -->
                                    <div class="tab-pane" id="address">
                                        <div class="row gy-4">
                                            <div class="col-md-6">
                                                <label for="address">Tên loại vắc xin</label>
                                                <input type="text" name="name" class="form-control" placeholder="" value="{{$vaccination_types->name}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="address">Độ tuổi áp dụng</label>
                                                <input type="text" name="applicable_age" class="form-control" placeholder="" value="{{$vaccination_types->applicable_age}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="address">Hiệu quả</label>
                                                <input type="text" name="effection" class="form-control" placeholder="" value="{{$vaccination_types->effection}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="address">Liều tiêm</label>
                                                <input type="text" name="injection_dose" class="form-control" placeholder="" value="{{$vaccination_types->injection_dose}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="address">Thời gian giữa các mũi tiêm</label>
                                                <input type="text" name="injection_time" class="form-control" placeholder="" value="{{$vaccination_types->injection_time}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="address">Nhà sản xuất</label>
                                                <select class="form-control" name="manufacture_id">
                                                    <option value="{{ $vaccination_types->manufacture_id }}" class="form-control">
                                                        {{ $vaccination_types->manufacture->name }}</option>
                                                    @foreach ($manufactures as $key => $value)
                                                        <option value="{{ $value->id }}" class="form-control">
                                                            {{ $value->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- .tab-pane -->
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
