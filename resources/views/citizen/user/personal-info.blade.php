@extends('citizen.layout-citizen',[
'title' => __($title ?? 'Thông tin cá nhân')
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
                           <h1>Thông tin cá nhân</h1>                        
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
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="card mb-4">
                                <div class="card-body text-center">
                                  <img src="../../citizen/assets/image/qr-code/qr-vaccine.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                  <h5 class="my-3">Mã hộ chiếu vắc xin</h5>
                                  <p class="text-muted mb-1">{{$users->fullname}}</p>                             
                                  <div class="d-flex justify-content-center mb-2">
                                    <a href="{{route('citizen.user.edit-profile',$users->id)}}" class="btn btn-primary">Cập nhật thông tin</a>
                                    <button type="button" class="btn btn-outline-primary ms-1">Chứng nhận tiêm chủng</button>
                                  </div>
                                </div>
                              </div>                             
                            </div>
                            <div class="col-lg-6">
                              <div class="card mb-4">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0 font-weight-bold">Họ tên:</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">{{$users->fullname}}</p>
                                    </div>
                                  </div>
                                  <hr>                                                                  
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0 font-weight-bold">Giới tính:</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">{{$users->gender}}</p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0 font-weight-bold">Ngày sinh:</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">{{$birthday}}</p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0 font-weight-bold">Số điện thoại:</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">{{$users->phone}}</p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-5">
                                      <p class="mb-0 font-weight-bold">Số CMND/CCCD/Hộ chiếu:</p>
                                    </div>
                                    <div class="col-sm-5">
                                      <p class="text-muted mb-0">{{$users->identification}}</p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0 font-weight-bold">Email:</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">{{$users->email}}</p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0 font-weight-bold">Địa chỉ:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        @if($users->ward_id!=NULL)
                                      <p class="text-muted mb-0">
                                        {{ $users->address }},
                                        {{ $users->ward->name }},
                                        {{ $users->ward->district->name }},
                                        {{ $users->ward->district->province->type }}
                                        {{ $users->ward->district->province->name }}
                                      </p>
                                      @else
                                      <p class="text-muted mb-0">{{ $users->address }}</p>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                              </div>                              
                            </div>                                              
                      </section>
                 </div>
               </div>
            </section>         
@endsection