@extends('guest.layout-guest',[
'title' => __($title ?? 'Kết quả tìm kiếm')
])
@section('main')
    <!--Header-->
    <main class="main-content">
        <!------main-content------>
        <!-----------page_title--------------->
        <section class="page_title type_two  pdt_100  pdb_40">
            <div class="container">
                <div class="row">
                    <!---------row----------->
                    <div class="col-lg-12 col-md-12">
                        <!---------col----------->
                        <div class="content_box">
                            <h1>Tìm kiếm cho “<span>{{ $search }}</span>”</h1>
                            <ul class="bread_crumb">
                                <li class="bread_crumb-item"><a href="">Trang chủ</a></li>
                                <li class="bread_crumb-item active"> Tìm kiếm cho “{{ $search }}” </li>
                            </ul>
                        </div>
                        <!---------col-end---------->
                    </div>
                    <!----------row-end---------->
                </div>
            </div>
        </section>
        <!-----------page_title-end-------------->
        <!-----------search_results--------------->
        <section class="search_results pdt_100  pdb_70">
            <div class="container">
                <div class="row">
                    <!---------row----------->
                    <div class="col-lg-9">
                        <!---------col----------->
                        @if ($count_post > 0)
                            @foreach ($posts as $key => $value)
                                <div class="row">
                                    <!----search box---->
                                    <div class="col-lg-4">
                                        <img src="../{{ $value->thumbnail }}" class="img-fluid" alt="search results"
                                            width="100%" />
                                    </div>
                                    <div class="col-lg-8">
                                        <h2><a href="#">{{ $value->title }}</a></h2>
                                        <p>{{ $value->description }}</p>
                                        <a href="#" class="read_more tp_one"> Đọc thêm<span
                                                class="linearicons-arrow-right"></span></a>
                                    </div>
                                    <!----search box end---->
                                </div>
                                <br>
                                <br>                           
                            @endforeach
                        @else
                            <h6>Không tìm thấy kết quả</h6>
                        @endif
                        <!---------col-end---------->
                        <div class="row">
                           <!----------row----------->
                           <div class="col-lg-12">
                               <div class="pageination_box">
                                   {{ $posts->links() }}
                               </div>
                           </div>
                           <!----------row-end---------->
                       </div>
                    </div>
                    <div class="col-lg-3">
                        <!---------col----------->
                        <div class="page_sidebar right">
                            <!------page_sidebar-----start-->
                            <div class="widgets_siderbar">
                                <!------widgets-----start-->
                                <div class="blog_box type_one">
                                    <div class="image_box">
                                        <img src="citizen/assets/image/resources/blog-1-2.jpg" class="img-fluid"
                                            alt="img">
                                    </div>
                                    <a href="#" class="tags">Mới nhất</a>
                                    <div class="content_box">
                                        <h2><a href="#">What you need to know about C19 and pregnancy</a></h2>
                                        <ul>
                                            <li><span class="linearicons-calendar-full"></span>31 Mar 2020</li>
                                            <li><span class="linearicons-bubbles"></span>39 </li>
                                        </ul>
                                        <p> Until now, doctors have been reassuring pregnant women that they are no more at
                                            risk from COVID.</p>
                                        <a href="#" class="read_more tp_one"> Read more <span
                                                class="linearicons-arrow-right"></span></a>
                                    </div>
                                </div>
                                <!--widgets-end-->
                            </div>
                            <!------page_sidebar-----end-->
                        </div>
                        <!---------col-end---------->
                    </div>
                    <!----------row-end---------->
                </div>
            </div>
        </section>
        <!-----------search_results-end-------------->
    @endsection
