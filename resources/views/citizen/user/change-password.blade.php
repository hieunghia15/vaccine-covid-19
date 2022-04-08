@extends('citizen.layout-citizen',[
'title' => __($title ?? 'Đổi mật khẩu')
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
                        <h1>Đổi mật khẩu</h1>
                    </div>
                    <!---------col-end---------->
                </div>
                <!----------row-end---------->
            </div>
        </div>
    </section>
    <!-----------page_title-end-------------->
    <div class="about type_two">
        <div class="container py-4">
            <div class="ml-5 mr-5">
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
                    <div class="col-md-10 offset-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if ($errors)
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                                <form class="form-horizontal" method="POST"
                                    action="{{ route('citizen.user.change-password') }}">
                                    @csrf
                                    <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                        <label for="new-password" class="col-md-4 control-label">Mật khẩu hiện tại</label>
                                        <div class="col-md-6">
                                            <input id="current-password" type="password" class="form-control"
                                                name="current-password" required >
                                                <br>
                                                <input id="toggleBtn" type="button" onclick="currentPassword()"
                                                value="Hiện mật khẩu" class="btn btn-outline-primary btn-sm">
                                            @if ($errors->has('current-password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('current-password') }}</strong>
                                                </span>
                                            @endif                                           
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                        <label for="new-password" class="col-md-4 control-label">Mật khẩu mới</label>
                                        <div class="col-md-6">
                                            <input id="new-password" type="password" class="form-control"
                                                name="new-password" required>
                                                <br>
                                                <input id="new-password-btn" type="button" onclick="newPassword()"
                                                value="Hiện mật khẩu" class="btn btn-outline-primary btn-sm">
                                            @if ($errors->has('new-password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('new-password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="new-password-confirm" class="col-md-4 control-label">Xác nhận mật
                                            khẩu</label>
                                        <div class="col-md-6">
                                            <input id="new-password-confirm" type="password" class="form-control"
                                                name="new-password_confirmation" required>
                                                <br>
                                                <input id="new-password-confirm-btn" type="button" onclick="newPasswordConfirm()"
                                                value="Hiện mật khẩu" class="btn btn-outline-primary btn-sm">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                               Đổi mật khẩu
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function currentPassword() {
                var upass = document.getElementById('current-password');
                var toggleBtn = document.getElementById('toggleBtn');
                if(upass.type == "password"){
                    upass.type = "text";
                    toggleBtn.value = "Ẩn mật khẩu";
                } else {
                    upass.type = "password";
                    toggleBtn.value = "Hiện mật khẩu";
                }
            }

            function newPassword() {
                var upass = document.getElementById('new-password');
                var toggleBtn = document.getElementById('new-password-btn');
                if(upass.type == "password"){
                    upass.type = "text";
                    toggleBtn.value = "Ẩn mật khẩu";
                } else {
                    upass.type = "password";
                    toggleBtn.value = "Hiện mật khẩu";
                }
            }

            function newPasswordConfirm() {
                var upass = document.getElementById('new-password-confirm');
                var toggleBtn = document.getElementById('new-password-confirm-btn');
                if(upass.type == "password"){
                    upass.type = "text";
                    toggleBtn.value = "Ẩn mật khẩu";
                } else {
                    upass.type = "password";
                    toggleBtn.value = "Hiện mật khẩu";
                }
            }
            </script>
    @endsection
