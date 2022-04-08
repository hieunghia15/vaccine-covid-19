<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $title ?? '' }} Đăng ký</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('stisla/assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('stisla/assets/modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/assets/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('stisla/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('stisla/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/assets/css/components.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('stisla/assets/css/custom.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <h4>HỆ THỐNG QUẢN LÝ TIÊM CHỦNG VẮC XIN COVID-19</h4>
                        </div>
                        <div class="card card-primary" style="border:2px solid #6777ef">
                            <div class="card-header">
                                <h4>ĐĂNG KÝ TÀI KHOẢN</h4>
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
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <!-- FullName -->
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="fullname">Họ tên <span
                                                        class="text-danger">*</span></label>
                                                <input id="fullname" type="text" class="form-control" name="fullname"
                                                    value="{{ old('fullname') }}" autofocus>
                                            </div>
                                            <!-- Phone -->
                                            <div class="form-group col-6">
                                                <label for="phone">Số điện thoại <span
                                                        class="text-danger">*</span></label>
                                                <input id="phone" type="text" class="form-control" name="phone"
                                                    value="{{ old('phone') }}" required pattern="/([\+84|84|0]+(3|5|7|8|9|1[2|6|8|9]))+([0-9]{8})\b/"
                                                    title="Số điện thoại phải đúng định dạng">
                                            </div>
                                        </div>
                                        <!-- Password -->
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="password" class="d-block">Mật khẩu <span
                                                        class="text-danger">*</span></label>
                                                <input id="password" type="password" class="form-control pwstrength"
                                                    data-indicator="pwindicator" name="password" required
                                                    autocomplete="new-password">
                                                <div id="pwindicator" class="pwindicator">
                                                    <div class="bar"></div>
                                                    <div class="label"></div>
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="password2" class="d-block">Xác nhận mật khẩu</label>
                                                <input id="password2" type="password" class="form-control"
                                                    name="password_confirmation" required>
                                            </div>
                                        </div>
                                        <!-- Birthday -->
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="birthday">Ngày tháng năm sinh <span
                                                        class="text-danger">*</span></label>
                                                <input id="birthday" type="date" class="form-control" name="birthday"
                                                    value="{{ old('birthday') }}">
                                            </div>
                                            <!-- Gender -->
                                            <div class="form-group col-6">
                                                <label for="gender">Giới tính <span
                                                        class="text-danger">*</span></label>
                                                <select id="gender" name="gender" class="form-control">
                                                    <option value="Nam">Nam</option>
                                                    <option value="Nữ">Nữ</option>
                                                    <option value="Khác">Khác</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Email -->
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="email">Email</label>
                                                <input id="email" type="email" class="form-control" name="email"
                                                    value="{{ old('email') }}">
                                            </div>
                                            <!-- Identification -->
                                            <div class="form-group col-6">
                                                <label for="identification">Số CCCD/CMND/Hộ chiếu <span
                                                        class="text-danger">*</span></label>
                                                <input id="identification" type="text" class="form-control"
                                                    name="identification" value="{{ old('identification') }}"
                                                    required>
                                            </div>
                                        </div>
                                        <!-- Address -->
                                        @include('location.index')
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="agree" class="custom-control-input"
                                                    id="agree">
                                                <a href="{{ route('login') }}"
                                                    class="underline text-sm text-gray-600 hover:text-gray-900">Bạn đã
                                                    có
                                                    tài khoản? Đăng nhập ngay</a>
                                            </div>
                                        </div>
                                        <div class="form-group" style="width:25%; margin-left:38%">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                                Đăng ký
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="simple-footer">
                                Copyright &copy; 2022 NghiaBuddy
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('stisla/assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('stisla/assets/modules/popper.js') }}"></script>
    <script src="{{ asset('stisla/assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('stisla/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('stisla/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('stisla/assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('stisla/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('stisla/assets/modules/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('stisla/assets/modules/chart.min.js') }}"></script>
    <script src="{{ asset('stisla/assets/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('stisla/assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('stisla/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('stisla/assets/js/page/index.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('stisla/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('stisla/assets/js/custom.js') }}"></script>
</body>

</html>
