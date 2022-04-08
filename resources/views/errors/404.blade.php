@extends('guest.layout-guest',[
'title' => __($title ?? 'Lỗi')
])
@section('main')
<main class="main-content">
   <!------main-content------>
            <!-----------error_page--------------->
            <section class="404 error_page">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-3 col-md-12">
                     </div>
                     <div class="col-lg-6 col-md-12">
                        <!---------col----------->
                        <div class="content_outer d-flex text-center">
                           <div class="content_box_inner">
                              <div class="image_box">
                                 <img src="../../citizen/assets/image/resources/404-1.png" class="img-fluid" alt="img" />
                              </div>
                              <div class="text_box">
                                 <h1>Có gì đó không đúng ở đây</h1>
                                 <p> Trang bạn đang tìm kiếm đã bị di chuyển, xóa, đổi tên hoặc có thể không bao giờ tồn tại. Thử tìm kiếm khác hoặc quay lại <a href="{{route('guest.index')}}">Trang chủ</a>
                                 </p>
                              </div>                             
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-3 col-md-12">
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------error_page-end-------------->
          @endsection