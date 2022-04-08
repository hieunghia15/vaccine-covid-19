@extends('guest.layout-guest',[
'title' => __($title ?? $posts->title)
])
@section('main')
  <!-----------page_title--------------->
   <section class="page_title  pdt_80  pdb_40">
      <div class="container">
         <div class="row">
            <!---------row----------->
            <div class="col-lg-12 col-md-12 text-center">
               <!---------col----------->
               <!---------col-end---------->
            </div>
            <!----------row-end---------->
         </div>
      </div>
   </section>
   <!-----------page_title-end-------------->   
   <!-----------blog_detail--------------->
   <section class="blog_detail no_sidebar  pdb_100">
      <div class="container">
         <div class="row">
            <!---------row----------->          
            <!----------row-end---------->
         </div>
         <div class="row">
            <!---------row----------->
            <div class="col-lg-2 col-md-12">
               <!---------enpty_column----------->
            </div>
            <div class="col-lg-8 col-md-12">
               <!---------col----------->
               <div class="blog_detail_content">
                  <!-----blog_upper_box------->
                  <div class="blog_detail_upper_box">
                    <center> <h1>{{$posts->title}}</h1> </center>          
                     <ul class="blog_details_elements">
                        <li><small class="linearicons-calendar-full"></small> {{ \Carbon\Carbon::parse($posts->created_at)->format('d/m/Y H:i')}}</li>
                        <li><small class="linearicons-user"></small> Tác giả: <b>{{$posts->postBy->fullname}}</b></li>                      
                        <li><small class="linearicons-clipboard-empty"></small> Danh mục: <a href="{{route('guest.category',$posts->category->category_slug)}}">{{$posts->category->name }}</a></li>
                     </ul>
                     <h6>{{$posts->description}}</h6>
                  </div>
                  <!-----blog_upper_box-end------>
                  <!-----blog_lower_box------->
                  <div class="blog_detail_lower_box">
               <div style="font-family: 'Roboto Slab', serif;"> {!!$posts->content!!}</div>  
                  </div>
                  <div class="col-lg-4">
                     <h4>Theo {{$posts->postBy->fullname}}</h4>
                   </div>
                  <div class="more_content">
                     <div class="row">                      
                        <div class="col-lg-12">
                           <ul class="tags">
                              <li><span class="linearicons-tags"></span></li>
                              @foreach (App\Models\Category::all() as $value)                                                             
                              <li class="clearfix"><a href="{{route('guest.category',$value->category_slug)}}">{{$value->name}}</a></li>   
                              @endforeach                       
                           </ul>
                        </div>
                        
                     </div>
                  </div>                          
               </div>
               <!---------col-end---------->
            </div>
            <div class="col-lg-2 col-md-12">
               <!---------enpty_column----------->
            </div>
            <!----------row-end---------->
         </div>
      </div>
   </section>
   <!-----------blog_detail-end-------------->  
   <!-----------blog--------------->
   <section class="blog type_one  pdt_100  pdb_50">
      <div class="container">
         <div class="row">
            <!---------row----------->
            <div class="col-lg-12 col-md-12">
               <!---------col----------->
               <div class="heading text-center tp_one">
                  <h1>Bài viết gần đây</h1>
               </div>
               <!---------col-end---------->
            </div>
            <!----------row-end---------->
         </div>
         <div class="row">
            <!---------row----------->
            <div class="col-lg-12 col-md-12 padding_zero">
               <!---------col----------->             
               <div class="owl-carousel four_items">
                  <!---------blog_box----------->
                  @foreach ($post_recents as $post_recent)
                  <div class="blog_box type_one">
                     <div class="image_box">
                        <img src="../{{$post_recent->thumbnail}}" class="img-fluid" alt="img" />
                     </div>
                     <div class="content_box">
                        <h2><a href="{{route('guest.read',[$post_recent->category->category_slug,$post_recent->post_slug])}}">{{$post_recent->title}}</a></h2>
                        <ul>
                           <li><span class="linearicons-calendar-full"></span>{{$post_recent->created_at}}</li>
                        </ul>
                        <p>{{$post_recent->description}}</p>
                        <a href="{{route('guest.read',[$post_recent->category->category_slug,$post_recent->post_slug])}}" class="read_more tp_one"> Đọc thêm  <span class="linearicons-arrow-right"></span></a>
                     </div>
                  </div>
                  @endforeach
                  <!---------blog_box end----------->                
               </div>          
               <!---------col-end---------->
            </div>
            <!----------row-end---------->
         </div>
      </div>
   </section>
   <!-----------blog-end-------------->
   <!------main-content-end----->
@endsection