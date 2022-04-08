@extends('citizen.layout-citizen',[
'title' => __($title ?? 'Cập nhật thông tin cá nhân')
])
@section('main')
    <!-----------page_title--------------->
    <section class="page_title  pdt_80  pdb_40">
        <div class="container">
            <div class="row">
                <!---------row----------->
                <div class="col-lg-12 col-md-12 text-center">
                    <!---------col----------->
                    <div class="content_box">
                        <h1>Cập nhật thông tin cá nhân</h1>
                    </div>
                    <!---------col-end---------->
                </div>
                <!----------row-end---------->
            </div>
        </div>
    </section>
    <!-----------page_title-end-------------->
    <!-----------about--------------->
    <section class="about type_two">
        <section>
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
                <div class="container py-4">
                    <div class="ml-5 mr-5">
                        <h5>Nhập thông tin</h5>
                        <br>
                        <form action="{{ route('citizen.user.update-profile',$users->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Họ tên <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="{{$users->fullname}}" name="fullname">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Số điện thoại <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" disabled="true" value="{{$users->phone}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Ngày tháng năm sinh <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" value="{{$users->birthday}}" name="birthday">
                                </div>
                                <div class="form-group col-md-6">
                                    <label> Giới tính <span class="text-danger">*</span></label>
                                    <ul class="custom-control-group">
                                        @if (Auth()->user()->gender == 'Nam')
                                            <li>
                                                <div class="custom-control custom-radio custom-control-pro no-control">
                                                    <input type="radio" class="custom-control-input" name="gender"
                                                        id="sex-male" value="Nam" checked required>
                                                    <label class="custom-control-label" for="sex-male">Nam</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio custom-control-pro no-control">
                                                    <input type="radio" class="custom-control-input" name="gender"
                                                        id="sex-female" value="Nữ" required>
                                                    <label class="custom-control-label" for="sex-female">Nữ</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio custom-control-pro no-control">
                                                    <input type="radio" class="custom-control-input" name="gender"
                                                        id="sex-other" value="Khác" required>
                                                    <label class="custom-control-label" for="sex-other">Khác</label>
                                                </div>
                                            </li>
                                        @elseif (Auth()->user()->gender == 'Nữ')
                                            <li>
                                                <div class="custom-control custom-radio custom-control-pro no-control">
                                                    <input type="radio" class="custom-control-input" name="gender"
                                                        id="sex-male" value="Nam" required>
                                                    <label class="custom-control-label" for="sex-male">Nam</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio custom-control-pro no-control">
                                                    <input type="radio" class="custom-control-input" name="gender"
                                                        id="sex-female" value="Nữ" checked required>
                                                    <label class="custom-control-label" for="sex-female">Nữ</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio custom-control-pro no-control">
                                                    <input type="radio" class="custom-control-input" name="gender"
                                                        id="sex-other" value="Khác" required>
                                                    <label class="custom-control-label" for="sex-other">Khác</label>
                                                </div>
                                            </li>
                                        @elseif (Auth()->user()->gender == 'Khác')
                                            <li>
                                                <div class="custom-control custom-radio custom-control-pro no-control">
                                                    <input type="radio" class="custom-control-input" name="gender"
                                                        id="sex-male" value="Nam" required>
                                                    <label class="custom-control-label" for="sex-male">Nam</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio custom-control-pro no-control">
                                                    <input type="radio" class="custom-control-input" name="gender"
                                                        id="sex-female" value="Nữ" required>
                                                    <label class="custom-control-label" for="sex-female">Nữ</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio custom-control-pro no-control">
                                                    <input type="radio" class="custom-control-input" name="gender"
                                                        id="sex-other" value="Khác" checked required>
                                                    <label class="custom-control-label" for="sex-other">Khác</label>
                                                </div>
                                            </li>
                                        @else
                                            <li>
                                                <div class="custom-control custom-radio custom-control-pro no-control">
                                                    <input type="radio" class="custom-control-input" name="gender"
                                                        id="sex-male" value="Nam" required>
                                                    <label class="custom-control-label" for="sex-male">Nam</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio custom-control-pro no-control">
                                                    <input type="radio" class="custom-control-input" name="gender"
                                                        id="sex-female" value="Nữ" required>
                                                    <label class="custom-control-label" for="sex-female">Nữ</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio custom-control-pro no-control">
                                                    <input type="radio" class="custom-control-input" name="gender"
                                                        id="sex-other" value="Khác" required>
                                                    <label class="custom-control-label" for="sex-other">Khác</label>
                                                </div>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="text" class="form-control" value="{{$users->email}}" name="email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Số CMND/CCCD/Hộ chiếu <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="{{$users->identification}}" name="identification">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Tỉnh/Thành phố</label>
                                    @if (Auth()->user()->ward_id != null)
                                    <select class="form-control" id="province-dropdown">
                                        <option value="">Chọn tỉnh/thành phố</option>
                                        <option selected="selected" value="{{$users->ward->district->province->id}}">{{$users->ward->district->province->name}}</option>
                                        @foreach ($province_user as $province)
                                            <option value="{{ $province->id }}">
                                                {{ $province->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @else
                                    <select class="form-control" id="province-dropdown">
                                      <option value="">Chọn tỉnh/thành phố</option>
                                      @foreach ($provinces as $province)
                                          <option value="{{ $province->id }}">
                                              {{ $province->name }}
                                          </option>
                                      @endforeach
                                  </select>
                                  @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Quận/Huyện</label>
                                    @if (Auth()->user()->ward_id != null)
                                        <select class="form-control" id="district-dropdown">
                                            <option value="  {{ Auth()->user()->ward->district->id }}">
                                                {{ Auth()->user()->ward->district->name }}
                                            </option>
                                        </select>
                                    @else
                                        <select class="form-control" id="district-dropdown">
                                        </select>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Phường/Xã</label>
                                    @if (Auth()->user()->ward_id != null)
                                        <select class="form-control" id="ward-dropdown" name="ward_id">
                                            <option value="  {{ Auth()->user()->ward->id }}">
                                                {{ Auth()->user()->ward->name }}
                                            </option>
                                        </select>
                                    @else
                                        <select class="form-control" id="ward-dropdown" name="ward_id">
                                        </select>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Thôn/Xóm/Số nhà</label>
                                    <input type="text" class="form-control" id="address"
                                        value="{{ Auth()->user()->address }}" name="address">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                            <button type="reset" class="btn btn-primary">Đặt lại</button>
                        </form>
                    </div>
                </div>
        </section>
    </section>
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
@endsection
