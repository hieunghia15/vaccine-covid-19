@extends('admin.layout-admin',[ 'title' => __($title ?? 'Tạo địa điểm tiêm chủng')])
@section('main')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Tạo địa điểm tiêm chủng</h3>
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
                                <form method="POST" action="{{ route('admin.vaccination-sites.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf                                                                                                       
                                     <!-- Address -->
                                     <div class="tab-pane" id="address">
                                        <div class="row gy-4">
                                            <div class="col-md-6">
                                                <label for="address">Tên địa điểm</label>
                                                <input type="text" name="location" class="form-control" placeholder="">  
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="province">Tỉnh/Thành Phố</label>
                                                    <select class="form-control" id="province-dropdown">
                                                        <option value="">Chọn tỉnh/thành phố</option>
                                                        @foreach ( App\Models\Province::all() as $province)
                                                            <option value="{{ $province->id }}">
                                                                {{ $province->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="district">Quận/Huyện</label>
                                                    <select class="form-control" id="district-dropdown">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ward">Phường/Xã</label>
                                                    <select class="form-control" id="ward-dropdown" name="ward_id">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .tab-pane -->
                                    <br>
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                    <script>
                                        $(document).ready(function() {
                                            $('#province-dropdown').on('change', function() {
                                                var province_id = this.value;
                                                $("#district-dropdown").html('');
                                                $.ajax({
                                                    url: "{{ route('locations.get-district') }}",
                                                    type: "POST",
                                                    data: {
                                                        province_id: province_id,
                                                        _token: '{{ csrf_token() }}'
                                                    },
                                                    dataType: 'json',
                                                    success: function(result) {
                                                        $('#district-dropdown').html(
                                                            '<option value="">Chọn quận/huyện</option>');
                                                        $.each(result.districts, function(key, value) {
                                                            $("#district-dropdown").append('<option value="' + value
                                                                .id +
                                                                '">' + value.name + '</option>');
                                                        });
                                                        $('#ward-dropdown').html(
                                                            '<option value="">Chọn phường xã </option>');
                                                    }
                                                });
                                            });
                                    
                                            $('#district-dropdown').on('change', function() {
                                                var district_id = this.value;
                                                $("#ward-dropdown").html('');
                                                $.ajax({
                                                    url: "{{ route('locations.get-ward') }}",
                                                    type: "POST",
                                                    data: {
                                                        district_id: district_id,
                                                        _token: '{{ csrf_token() }}'
                                                    },
                                                    dataType: 'json',
                                                    success: function(result) {
                                                        $('#ward-dropdown').html('<option value="">Chọn phường/xã</option>');
                                                        $.each(result.wards, function(key, value) {
                                                            $("#ward-dropdown").append('<option value="' + value.id +
                                                                '">' + value.name + '</option>');
                                                        });
                                                    }
                                                });
                                            });
                                    
                                        });
                                    </script>
                                                                             
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
