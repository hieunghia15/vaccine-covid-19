@extends('guest.layout-guest',[
'title' => __($title ?? 'Bài viết')
])
@section('main')
    <main class="main-content">
        <!------main-content------>
        <!-----------page_title--------------->
        <section class="page_title big  pdt_80  pdb_40">
            <div class="container">
                <div class="row">
                    <!---------row----------->
                    <div class="col-lg-12 col-md-12 text-center">
                        <!---------col----------->
                        <div class="content_box">
                            <h1>Bài Viết</h1>
                        </div>
                        <!---------col-end---------->
                    </div>
                    <!----------row-end---------->
                </div>
            </div>
        </section>
        <!-----------page_title-end-------------->
        <!-----------blog_v1--------------->
        <section class="blog_v1 pdt_80  pdb_100">
            <div class="container">
                <div class="featured_post">
                    <div class="row">
                        <!---------row----------->
                        <div class="col-lg-12">
                            <!---------blog_box----------->
                            <div class="blog_box type_two">
                                <div class="image_box">
                                    <img src="{{ $posts_first->thumbnail }}" class="img-fluid" alt="img" width="90%" />
                                    <div class="overlay ">
                                        <a href="{{ $posts_first->thumbnail }}" data-fancybox="gallery " data-caption=" ">
                                            <span class="linearicons-picture2"></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="content_box clearfix">
                                    <h2><a href="{{route('guest.read',$posts_first->post_slug)}}">{{ $posts_first->title }}</a></h2>
                                    <ul>
                                        <li><span class="linearicons-calendar-full"></span>{{ \Carbon\Carbon::parse($posts_first->created_at)->format('d/m/Y H:i')}}
                                        </li>
                                    </ul>
                                    <p>{{ $posts_first->description }}</p>                                 
                                </div>

                            </div>
                            <!---------blog_box end----------->
                        </div>
                        <!---------row-end---------->
                    </div>
                </div>
                <div class="row">
                    <!---------row----------->
                    @foreach ($posts as $post)
                        <div class="col-lg-4">
                            <!---------blog_box----------->
                            <div class="blog_box type_one">
                                <div>
                                    <img src="{{ $post->thumbnail }}" class="img-fluid" alt="img" style="border-radius:15px"/>
                                </div>
                                <div class="content_box">
                                    <h2><a href="{{route('guest.read',$post->post_slug)}}">{{ $post->title }}</a></h2>
                                    <ul>
                                        <li><span class="linearicons-calendar-full"></span>{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y H:i')}}</li>
                                    </ul>
                                    <p>{{ $post->description }}</p>
                                    <a href="{{route('guest.read',$post->post_slug)}}" class="read_more tp_one"> Đọc thêm <span
                                            class="linearicons-arrow-right"></span></a>
                                </div>
                            </div>
                            <!---------blog_box end----------->
                        </div>
                    @endforeach
                    <!----------row-end---------->
                </div>
                <div class="row">
                    <!----------row----------->
                    <div class="col-lg-12">
                        <div class="pageination_box">
                            <ul class="pagination">
                                <li class="disabled"><a href="#"><small class="linearicons-arrow-left"></small>
                                        Previous Post</a></li>
                                <li class="active"><a href="#">1 </a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="disabled"><span>...</span></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">Next Post<small class="linearicons-arrow-right"></small></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!----------row-end---------->
                </div>
            </div>
        </section>
        <!-----------blog_v1-end-------------->
        <!------main-content-end----->
    </main>
@endsection
