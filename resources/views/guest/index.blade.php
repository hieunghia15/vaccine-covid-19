@extends('guest.layout-guest',[
'title' => __($title ?? 'Trang chủ')
])
@section('main')
         <!------main-content------>
         <!-------slider--section------>
         <section class="banner type_two" style="background: url(citizen/assets/image/main-slider/slider-2-1.jpg)">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 d-flex pr_0">
                     <div class="content_outer">
                        <div class="inner_box">                          
                           <h1 class="wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                             Tiêm Chủng Vắc Xin COVID-19
                           </h1>
                           <h5 class="wow slideInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                              "Toàn bộ người dân đang sinh sống và làm việc tại Việt Nam hãy đi tiêm vaccine phòng COVID-19.
                              Tiêm chủng không chỉ là quyền lợi, trách nhiệm của mỗi cá nhân mà còn là trách nhiệm đối với cộng đồng", <b> Thứ trưởng Nguyễn Trường Sơn kêu gọi</b>.
                           </h5>
                        </div>
                      
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="image_box wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <img src="citizen/assets/image/main-slider/slider--graphic-2-1.png" class="img-fluid" alt="img" />
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-------slider--section-end----->
         <!-----------counter--------------->
         <section class="counter type_two wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
            <div class="container">
               <div class="counter_outer_box">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-4 col-md-12">
                        <!---------col----------->
                        <div class="heading tp_one">
                           <h6>Số liệu vắc xin</h6>
                           <h1>CẦN THƠ</h1>                         
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-8 col-md-12 d-flex">
                        <!---------col----------->
                        <div class="counter_box_outer">
                           <div class="counter_box type_two one">                             
                              <div class="text_box">
                                 <h4>
                                    <span class="odometer" data-count="1,235,554"></span>
                                 </h4>
                                 <h6>Tổng số dân</h6>
                              </div>
                           </div>
                           <div class="counter_box type_two two">                    
                              <div class="text_box">
                                 <h4>
                                    <span class="odometer" data-count="2,760,326"></span>
                                 </h4>
                                 <h6>Số liều đã tiêm</h6>
                              </div>
                           </div>                          
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </div>
         </section>
         <!-----------counter-end-------------->
         <!-----------about--------------->
         <section class="about type_two pdt_100 pdb_100 wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
            <div class="container">
               <div class="row">
                  <!---------row----------->
                  <div class="col-lg-6 col-md-12 d-flex">
                     <!---------col----------->
                     <div class="about_content">
                        <div class="heading tp_one">
                           <h6>COVID-19</h6>
                           <h1>Giới thiệu về virus Covid-19</h1>
                        </div>
                        <p>
                           Bệnh do vi-rút corona (COVID-19) là một bệnh truyền nhiễm do vi-rút SARS-CoV-2 gây ra.
                           Hầu hết người mắc bệnh COVID-19 sẽ gặp các triệu chứng từ nhẹ đến trung bình và hồi phục mà không cần phải điều trị đặc biệt. Tuy nhiên, một số người sẽ chuyển bệnh nghiêm trọng và cần được hỗ trợ y tế.
                        </p>
                        <p class="last">
                           Các triệu chứng thường gặp nhất: sốt, ho, mệt mỏi, mất vị giác hoặc khứu giác
                        </p>
                     </div>
                     <!---------col-end---------->
                  </div>
                  <div class="col-lg-6 col-md-12">
                     <!---------col----------->
                     <div class="image_box one">
                        <img src="citizen/assets/image/resources/about-2-1.png" class="img-fluid" alt="img" />
                     </div>
                     <!---------col-end---------->
                  </div>
                  <!----------row-end---------->
               </div>
               <div class="empty_space"></div>
               <div class="row">
                  <!---------row----------->
                  <div class="col-lg-6 col-md-12">
                     <!---------col----------->
                     <div class="image_box two">
                        <img src="citizen/assets/image/resources/about-2-2.png" class="img-fluid" alt="img" />
                     </div>
                     <!---------col-end---------->
                  </div>
                  <div class="col-lg-6 col-md-12 d-flex">
                     <!---------col----------->
                     <div class="about_content">
                        <div class="heading tp_one">
                           <h6>Coronavirus là gì?</h6>
                           <h1>COVID-19 là gì?</h1>
                        </div>
                        <p>
                           COVID-19 (bệnh vi-rút corona 2019) là một bệnh do vi-rút có tên SARS-CoV-2 gây ra và được phát hiện vào ​​​​​ tháng 12 năm 2019 ở Vũ Hán, Trung Quốc.
                           Căn bệnh này rất dễ lây lan và đã nhanh chóng lan ra khắp thế giới. Chỉ sau 100 ngày xuất hiện, đại dịch viêm đường hô hấp cấp do virus Corona đã nhanh chóng tác động tới các lĩnh vực kinh tế, xã hội, thị trường tài chính chao đảo, nền kinh tế toàn cầu rơi vào suy thoái với tỷ lệ thất nghiệp và nghèo đói chưa từng có trong lịch sử.
                        </p>
                        <a href="#" class="read_more tp_one">
                           Đọc thêm <span class="linearicons-arrow-right"></span></a>
                     </div>
                     <!---------col-end---------->
                  </div>
                  <!----------row-end---------->
               </div>
            </div>
         </section>
         <!-----------counter-end-------------->
         <!-----------protect--------------->
         <section class="protect type_two pdt_100 pdb_100 wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
            <div class="container">
               <div class="row">
                  <!---------row----------->
                  <div class="col-lg-12 col-md-12">
                     <!---------col----------->
                     <div class="heading text-center tp_one">
                        <h6>Bạn cần làm gì?</h6>
                        <h1>Bảo vệ bản thân như thế nào?</h1>
                        <p>
                           Những hành động bạn nên thực hiện để bảo vệ, ngăn ngừa lây nhiễm COVID-19
                        </p>
                     </div>
                     <!---------col-end---------->
                  </div>
                  <!----------row-end---------->
               </div>
               <div class="row">
                  <!---------row----------->
                  <div class="col-lg-4 col-md-12">
                     <!---------col----------->
                     <div class="protect_box_left">
                        <!--------protext-box-------->
                        <div class="protect_box type_two">
                           <div class="content_box">
                              <h2><a href="#">Cách ly tại nhà</a></h2>
                              <p>
                              Hãy cách ly tại nhà nếu bạn xuât hiện những triệu chứng điển hình của COVID-19
                              </p>
                           </div>
                           <div class="image_box">
                              <img src="citizen/assets/image/resources/protect-box-2-1.png" class="img-fluid" alt="img" />
                              <span class="fa fa-check"></span>
                           </div>
                        </div>
                        <!--------protext-box-end------->
                        <!--------protext-box-------->
                        <div class="protect_box type_two">
                           <div class="content_box">
                              <h2><a href="#">Đeo khẩu trang</a></h2>
                              <p>
                                 Luôn luôn đeo khẩu trang ở nơi công cộng, nhất là khi ở trong không gian kín hoặc khi không thể giữ khoảng cách
                              </p>
                           </div>
                           <div class="image_box">
                              <img src="citizen/assets/image/resources/protect-box-2-2.png" class="img-fluid" alt="img" />
                              <span class="fa fa-check"></span>
                           </div>
                        </div>
                        <!--------protext-box-end------->
                        <!--------protext-box-------->
                        <div class="protect_box type_two">
                           <div class="content_box">
                              <h2><a href="#">Rửa tay</a></h2>
                              <p>
                                 Thường xuyên rửa tay. Dùng xà phòng và nước hoặc dung dịch rửa tay chứa cồn.
                              </p>
                           </div>
                           <div class="image_box">
                              <img src="citizen/assets/image/resources/protect-box-2-3.png" class="img-fluid" alt="img" />
                              <span class="fa fa-check"></span>
                           </div>
                        </div>
                        <!--------protext-box-end------->
                     </div>
                     <!---------col-end---------->
                  </div>
                  <div class="col-lg-4 col-md-12">
                     <!---------col----------->
                     <div class="content_image_box">
                        <img src="citizen/assets/image/resources/protect-2-1.png" class="img-fluid" alt="img" />
                     </div>
                     <!---------col-end---------->
                  </div>
                  <div class="col-lg-4 col-md-12">
                     <!---------col----------->
                     <div class="protect_box_right">
                        <!--------protext-box-------->
                        <div class="protect_box type_two">
                           <div class="image_box">
                              <img src="citizen/assets/image/resources/protect-box-2-5.png" class="img-fluid" alt="img" />
                              <span class="fa fa-times worng"></span>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Giữ khoản cách 2m</a></h2>
                              <p>
                                 Giữ khoảng cách an toàn với người khác (ít nhất 2 mét), kể cả khi họ không có biểu hiện bệnh
                              </p>
                           </div>
                        </div>
                        <!--------protext-box-end------->   
                         <!--------protext-box-------->
                         <div class="protect_box type_two">
                           <div class="image_box">
                              <img src="citizen/assets/image/resources/protect-box-2-8.png" class="img-fluid" alt="img" />
                              <span class="fa fa-times worng"></span>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Tiêm vắc xin</a></h2>
                              <p>Tiêm vaccine khi đến lượt. Tuân thủ chỉ dẫn của địa phương về việc tiêm vaccine.</p>
                           </div>
                        </div>
                        <!--------protext-box-end------->                
                        <!--------protext-box-------->
                        <div class="protect_box type_two">
                           <div class="image_box">
                              <img src="citizen/assets/image/resources/protect-box-2-8.png" class="img-fluid" alt="img" />
                              <span class="fa fa-times worng"></span>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Không tụ tập</a></h2>
                              <p>Không tụ tập đông người</p>
                           </div>
                        </div>
                        <!--------protext-box-end------->
                     </div>
                     <!---------col-end---------->
                  </div>
                  <!----------row-end---------->
               </div>
            </div>
         </section>
         <!-----------protect-end-------------->
         <!-----------spreading--------------->
         <section class="spreading type_two pdt_100 pdb_60">
            <div class="container">
               <div class="row">
                  <!---------row----------->
                  <div class="col-lg-12 col-md-12">
                     <!---------col----------->
                     <div class="heading text-center tp_one">
                        <h6>COVID-19 có thể lây lan như thế nào?</h6>
                        <h1>COVID-19 được truyền đi bằng những cách nào?</h1>
                     </div>
                     <!---------col-end---------->
                  </div>
                  <!----------row-end---------->
               </div>
               <div class="row">
                  <!---------row----------->
                  <div class="col-lg-4 col-md-12">
                     <!---------col----------->
                     <div class="spreading_box type_two wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="image_box">
                           <img src="citizen/assets/image/resources/spreading-1-1.png" class="img-fluid" alt="img" />
                        </div>
                        <div class="content_box">
                           <h2><a href="#">Không khí khi ho, hắt hơi</a></h2>
                           <p>
                              Để những giọt nhỏ và các hạt có chứa vi-rút rơi vào mắt, mũi hoặc miệng, đặc biệt là thông qua sự bắn tóe và tia xịt như ho hoặc hắt hơi.
                           </p>
                        </div>
                     </div>
                     <!---------col-end---------->
                  </div>
                
                  <div class="col-lg-4 col-md-12">
                     <!---------col----------->
                     <div class="spreading_box type_two wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image_box">
                           <img src="citizen/assets/image/resources/spreading-1-3.png" class="img-fluid" alt="img" />
                        </div>
                        <div class="content_box">
                           <h2><a href="#">Tiếp xúc trực tiếp với người bệnh</a></h2>
                           <p>
                              Tiếp xúc cơ thể trực tiếp với người nhiễm bệnh như ôm, bắt tay,...
                           </p>
                        </div>
                     </div>
                     <!---------col-end---------->
                  </div>
               
                  <div class="col-lg-4 col-md-12">
                     <!---------col----------->
                     <div class="spreading_box type_two wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image_box">
                           <img src="citizen/assets/image/resources/spreading-1-6.png" class="img-fluid" alt="img" />
                        </div>
                        <div class="content_box">
                           <h2><a href="#">Tiếp xúc bề mặt</a></h2>
                           <p>
                              Tiếp xúc với một bề mặt hoặc vật thể có virus, sau đó đưa tay lên mũi, mắt hoặc miệng của mình.
                           </p>
                        </div>
                     </div>
                     <!---------col-end---------->
                  </div>
                  <!----------row-end---------->
               </div>
            </div>
         </section>
         <!-----------spreading-end-------------->
         <!-----------symptoms--------------->
         <section class="symptoms type_two pdt_100 pdb_100">
            <div class="container">
               <div class="row">
                  <!---------row----------->
                  <div class="col-lg-12 col-md-12">
                     <!---------col----------->
                     <div class="heading text-center tp_one">
                        <h6>Các triệu chứng của COVID-19</h6>
                        <h1>Các dạng triệu chứng của COVID-19 là gì?</h1>
                     </div>
                     <!---------col-end---------->
                  </div>
                  <!----------row-end---------->
               </div>
               <div class="row">
                  <!---------row----------->
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <!---------symptoms_box----------->
                     <div class="symptoms_box type_two wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="image_box">
                           <img src="citizen/assets/image/resources/symptoms-2-1.png" class="img-fluid" alt="img" />
                        </div>
                        <div class="content_box">
                           <h2><a href="#">Sốt</a></h2>
                           <p>
                              Các chuyên gia cho biết, sốt là triệu chứng chính. Đừng cố chấp vào con số, nhưng hãy biết rằng nó thực sự không sốt cho đến khi nhiệt độ của bạn đạt ít nhất 39 ° C.
                           </p>
                        </div>
                     </div>
                     <!---------symptoms_box-end---------->
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <!---------symptoms_box----------->
                     <div class="symptoms_box type_two wow fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="image_box">
                           <img src="citizen/assets/image/resources/symptoms-2-2.png" class="img-fluid" alt="img" />
                        </div>
                        <div class="content_box">
                           <h2><a href="#">Ho </a></h2>
                           <p>
                              Ho là một triệu chứng quan trọng khác, nhưng nó không chỉ là bất kỳ cơn ho nào. Bạn cảm thấy tức ngực khi ho khan.
                           </p>
                        </div>
                     </div>
                     <!---------symptoms_box-end---------->
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <!---------symptoms_box----------->
                     <div class="symptoms_box type_two wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image_box">
                           <img src="citizen/assets/image/resources/symptoms-2-3.png" class="img-fluid" alt="img" />
                        </div>
                        <div class="content_box">
                           <h2><a href="#">Mệt mỏi</a></h2>
                           <p>
                              Đây cũng là một biểu hiện cho thấy bạn đã nhiễm COVID-19
                           </p>
                        </div>
                     </div>
                     <!---------symptoms_box-end---------->
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <!---------symptoms_box----------->
                     <div class="symptoms_box type_two wow fadeIn" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="image_box">
                           <img src="citizen/assets/image/resources/symptoms-2-4.png" class="img-fluid" alt="img" />
                        </div>
                        <div class="content_box">
                           <h2><a href="#">Mất vị giác hoặc khưu giác </a></h2>
                           <p>
                             Một số người sẽ cảm thấy mât vị giác, khứu giác khi nhiễm bệnh
                           </p>
                        </div>
                     </div>
                     <!---------symptoms_box-end---------->
                  </div>
                  <!----------row-end---------->
               </div>
               <div class="row">
                  <!---------row----------->
                  <div class="col-lg-12 text-center">
                     <a href="#" class="theme_btn tp_one"><span class="linearicons-man-woman"></span> Xem thêm triệu chứng</a>
                  </div>
                  <!----------row-end---------->
               </div>
            </div>
         </section>
         <!-----------symptoms-end-------------->
         <!-----------handwash--------------->
         <section class="handwash type_two pdt_100 pdb_50">
            <div class="container">
               <div class="row">
                  <!---------row----------->
                  <div class="col-lg-12 col-md-12">
                     <!---------col----------->
                     <div class="heading text-center tp_one">
                        <h6>Quy trình rửa tays</h6>
                        <h1>Cách rửa tay</h1>
                        <p>
                           Bạn có đang rửa tay đúng cách? Hầu hết chúng ta đều biết tầm quan trọng của việc thực hành vệ sinh tay tốt.
                           <br class="md_display_none" />
                           Nhưng chỉ vì bạn đang rửa tay thường xuyên, không có nghĩa là bạn đang rửa sạch chúng.
                        </p>
                     </div>
                     <!---------col-end---------->
                  </div>
                  <!----------row-end---------->
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="dashed_bg_one"></div>
                  </div>
                  <!---------row----------->
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <!---------col----------->
                     <div class="handwash_box type_two wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="image_box">
                           <img src="citizen/assets/image/resources/hand-wash-2-1.png" class="img-fluid" alt="img" />
                           <small>1</small>
                        </div>
                        <div class="content_box">
                           <h2><a href="#">Bôi xà phòng lên tay ướt</a></h2>
                        </div>
                     </div>
                     <!---------col-end---------->
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <!---------col----------->
                     <div class="handwash_box type_two wow fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="image_box">
                           <img src="citizen/assets/image/resources/hand-wash-2-2.png" class="img-fluid" alt="img" />
                           <small>2</small>
                        </div>
                        <div class="content_box">
                           <h2><a href="#">
                              Xoa lòng bàn tay</a></h2>
                        </div>
                     </div>
                     <!---------col-end---------->
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <!---------col----------->
                     <div class="handwash_box type_two wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image_box">
                           <img src="citizen/assets/image/resources/hand-wash-2-3.png" class="img-fluid" alt="img" />
                           <small>3</small>
                        </div>
                        <div class="content_box">
                           <h2><a href="#">
                              Tập trung vào mu bàn tay</a></h2>
                        </div>
                     </div>
                     <!---------col-end---------->
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <!---------col----------->
                     <div class="handwash_box type_two wow fadeIn" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="image_box">
                           <img src="citizen/assets/image/resources/hand-wash-2-4.png" class="img-fluid" alt="img" />
                           <small>4</small>
                        </div>
                        <div class="content_box">
                           <h2><a href="#">Làm sạch lòng bàn tay</a></h2>
                        </div>
                     </div>
                     <!---------col-end---------->
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <!---------col----------->
                     <div class="handwash_box type_two wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="image_box">
                           <img src="citizen/assets/image/resources/hand-wash-2-5.png" class="img-fluid" alt="img" />
                           <small>5</small>
                        </div>
                        <div class="content_box">
                           <h2><a href="#">
                              Sạch ngón tay cái</a></h2>
                        </div>
                     </div>
                     <!---------col-end---------->
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <!---------col----------->
                     <div class="handwash_box type_two wow fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="image_box">
                           <img src="citizen/assets/image/resources/hand-wash-2-6.png" class="img-fluid" alt="img" />
                           <small>6</small>
                        </div>
                        <div class="content_box">
                           <h2><a href="#">
                              Chà xát móng tay và đầu ngón tay</a></h2>
                        </div>
                     </div>
                     <!---------col-end---------->
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <!---------col----------->
                     <div class="handwash_box type_two wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image_box">
                           <img src="citizen/assets/image/resources/hand-wash-2-7.png" class="img-fluid" alt="img" />
                           <small>7</small>
                        </div>
                        <div class="content_box">
                           <h2><a href="#">Rửa sạch tay của bạn</a></h2>
                        </div>
                     </div>
                     <!---------col-end---------->
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <!---------col----------->
                     <div class="handwash_box type_two wow fadeIn" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="image_box">
                           <img src="citizen/assets/image/resources/hand-wash-2-8.png" class="img-fluid" alt="img" />
                           <small>8</small>
                        </div>
                        <div class="content_box">
                           <h2><a href="#">Lau khô bằng khăn giấy</a></h2>
                        </div>
                     </div>
                     <!---------col-end---------->
                  </div>
                  <div class="col-lg-12">
                     <div class="dashed_bg_two"></div>
                  </div>
                  <!----------row-end---------->
               </div>
            </div>
         </section>
         <!-----------handwash-end-------------->
         <!-----------blog--------------->
         <section class="blog type_two pdb_30">
            <div class="container">
               <div class="row">
                  <!---------row----------->
                  <div class="col-lg-12 col-md-12">
                     <!---------col----------->
                     <div class="heading text-center tp_one">                    
                        <h1>Bài viết mơi nhất</h1>
                        <p>
                          Cập nhật những bài viết mới liên quan đến tiêm chủng và COVID-19
                        </p>
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
                        <div class="blog_box type_one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="citizen/assets/image/resources/blog-1-1.jpg" class="img-fluid" alt="img" />
                              <div class="overlay">
                                 <a href="https://www.youtube.com/watch?v=JKQPI_zeBYA" data-fancybox="gallery "
                                    data-caption=" ">
                                    <span class="linearicons-camera-play"></span>
                                 </a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2>
                                 <a href="#">What can I do under the new rules?</a>
                              </h2>
                              <ul>
                                 <li>
                                    <span class="linearicons-calendar-full"></span>02 Apr
                                    2020
                                 </li>
                                 <li><span class="linearicons-bubbles"></span>21</li>
                              </ul>
                              <p>
                                 In an unprecedented effort to contain the coronavirus
                                 outbreak which has caused tens of thousands of deaths.
                              </p>
                              <a href="#" class="read_more tp_one">
                                 Read more <span class="linearicons-arrow-right"></span></a>
                           </div>
                        </div>
                        <!---------blog_box end----------->
                        <!---------blog_box----------->
                        <div class="blog_box type_one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="citizen/assets/image/resources/blog-1-2.jpg" class="img-fluid" alt="img" />
                              <div class="overlay">
                                 <a href="citizen/assets/image/resources/blog-1-2.jpg" data-fancybox="gallery "
                                    data-caption=" ">
                                    <span class="linearicons-picture2"></span>
                                 </a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2>
                                 <a href="#">What you need to know about C19 and pregnancy</a>
                              </h2>
                              <ul>
                                 <li>
                                    <span class="linearicons-calendar-full"></span>31 Mar
                                    2020
                                 </li>
                                 <li><span class="linearicons-bubbles"></span>39</li>
                              </ul>
                              <p>
                                 Until now, doctors have been reassuring pregnant women
                                 that they are no more at risk from COVID.
                              </p>
                              <a href="#" class="read_more tp_one">
                                 Read more <span class="linearicons-arrow-right"></span></a>
                           </div>
                        </div>
                        <!---------blog_box end----------->
                        <!---------blog_box----------->
                        <div class="blog_box type_one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="citizen/assets/image/resources/blog-1-3.jpg" class="img-fluid" alt="img" />
                              <div class="overlay">
                                 <a href="citizen/assets/image/resources/blog-1-3.jpg" data-fancybox="gallery "
                                    data-caption=" ">
                                    <span class="linearicons-picture2"></span>
                                 </a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2>
                                 <a href="#">Are you washing your hands properly?</a>
                              </h2>
                              <ul>
                                 <li>
                                    <span class="linearicons-calendar-full"></span>30 Apr
                                    2020
                                 </li>
                                 <li><span class="linearicons-bubbles"></span>42</li>
                              </ul>
                              <p>
                                 Most of us know how important it is to practise good
                                 hand hygiene. But just because you're washing hands.
                              </p>
                              <a href="#" class="read_more tp_one">
                                 Read more <span class="linearicons-arrow-right"></span></a>
                           </div>
                        </div>
                        <!---------blog_box end----------->
                        <!---------blog_box----------->
                        <div class="blog_box type_one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                           <div class="image_box">
                              <img src="citizen/assets/image/resources/blog-1-4.jpg" class="img-fluid" alt="img" />
                              <div class="overlay">
                                 <a href="citizen/assets/image/resources/blog-1-4.jpg" data-fancybox="gallery "
                                    data-caption=" ">
                                    <span class="linearicons-picture2"></span>
                                 </a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2>
                                 <a href="#">What is an underlying health condition? </a>
                              </h2>
                              <ul>
                                 <li>
                                    <span class="linearicons-calendar-full"></span>30 Apr
                                    2020
                                 </li>
                                 <li><span class="linearicons-bubbles"></span>42</li>
                              </ul>
                              <p>
                                 In an unprecedented effort to contain the coronavirus
                                 outbreak which has caused tens of thousands of deaths...
                              </p>
                              <a href="#" class="read_more tp_one">
                                 Read more <span class="linearicons-arrow-right"></span></a>
                           </div>
                        </div>
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
      <!--page_wapper-end---->
   </div>
   @endsection