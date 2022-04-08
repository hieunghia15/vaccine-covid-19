@extends('guest.layout-guest',[
'title' => __($title ?? 'Giới thiệu')
])
@section('main')
<!------main-content------>
            <!-----------page_title--------------->
            <section class="page_title  pdt_80  pdb_40">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12 text-center">
                        <!---------col----------->
                        <div class="content_box">
                           <h6>Coronavirus là gì?s</h6>
                           <h1>Thông tin về COVID-19</h1>
                           <ul class="bread_crumb text-center">
                              <li class="bread_crumb-item"><a href="#">Home</a></li>
                              <li class="bread_crumb-item"><a href="#">About</a></li>
                              <li class="bread_crumb-item active"> About COVID-19</li>
                           </ul>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------page_title-end-------------->
            <!-----------about--------------->
            <section class="about type_two pdt_100 pdb_100">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-6 col-md-12">
                        <!---------col----------->
                        <div class="image_box">
                           <img src="citizen/assets/image/resources/about-page-1-1.png" class="img-fluid" alt="img" />
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-6 col-md-12 d-flex">
                        <!---------col----------->
                        <div class="about_content">
                           <div class="heading tp_one">
                              <h1> Đại dịch do Coronavirus gây ra 2019-2020 </h1>
                           </div>
                           <p>Đại dịch coronavirus 2019–20 là một đại dịch đang diễn ra của bệnh do coronavirus 2019 (COVID-19), gây ra bởi coronavirus 2 (SARS-CoV-2) gây hội chứng hô hấp cấp tính nghiêm trọng. Đợt bùng phát lần đầu tiên được xác định tại Vũ Hán, Hồ Bắc, Trung Quốc, vào tháng 12 năm 2019. Tổ chức Y tế Thế giới (WHO) tuyên bố đợt bùng phát là Tình trạng khẩn cấp về sức khỏe cộng đồng cần quan tâm của quốc tế vào ngày 30 tháng 1 năm 2020 và công nhận là đại dịch vào ngày 11 tháng 3.
                           </p>
                           <p>Tính đến 2022, hơn 490 triệu ca trường hợp nhiễm COVID-19 đã được báo cáo tại hơn 190 quốc gia và vùng lãnh thổ, dẫn đến khoảng 6,15 triệu trường hợp tử vong. Hơn 310 triệu người đã khỏi bệnh kể từ đó.</p>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
                  <div class="empty_space"></div>
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-6 col-md-12 d-flex">
                        <!---------col----------->
                        <div class="about_content">
                           <div class="heading tp_one">
                              <h6>Coronavirus là gì?</h6>
                              <h1>Virus COVID-19 là gì?</h1>
                           </div>
                           <p>COVID-19 là một dòng coronavirus mới chưa được xác định trước đây ở người. Nó được xác định lần đầu tiên ở Vũ Hán, tỉnh Hồ Bắc, Trung Quốc, nơi nó đã gây ra một đợt bùng phát lớn và đang diễn ra. Nó đã lan rộng hơn ở Trung Quốc. Các trường hợp sau đó đã được xác định ở một số quốc gia khác. Vi rút COVID-19 có liên quan chặt chẽ với vi rút coronavirus dơi.
                           </p>
                           <h2>SARS-CoV-2 có liên quan chặt chẽ với SARS-CoV</h2>
                           <p class="last">Nó được cho là có nguồn gốc từ động vật lây lan. Phân tích di truyền cho thấy coronavirus kết hợp di truyền với chi Betacoronavirus, trong chi Sarbecovirus (dòng B) cùng với hai chủng có nguồn gốc từ dơi. Nó giống 96% ở cấp độ toàn bộ bộ gen với các mẫu coronavirus dơi khác (BatCov RaTG13). Vào tháng 2 năm 2020, các nhà nghiên cứu Trung Quốc phát hiện ra rằng chỉ có một sự khác biệt về axit amin trong một số phần nhất định của trình tự bộ gen giữa vi rút từ tê tê và vi rút từ người, tuy nhiên, so sánh toàn bộ bộ gen cho đến nay đã tìm thấy nhiều nhất 92% vật liệu di truyền được chia sẻ giữa pangolin coronavirus và SARS-CoV-2, không đủ để chứng minh tê tê là vật chủ trung gian.
                           </p>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-6 col-md-12">
                        <!---------col----------->
                        <div class="image_box">
                           <img src="citizen/assets/image/resources/protect-1-1.png" class="img-fluid" alt="img">
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------about-end-------------->
            <!-----------about--------------->
            <section class="about_covid_all type_one pdt_100 pdb_70">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <!---------col----------->
                        <div class="icon_box type_one">
                           <div class="image_box">
                              <img src="citizen/assets/image/resources/icon-box-1-1.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Lây lan</a></h2>
                              <p>Virus này chủ yếu lây lan khi tiếp xúc gần và qua các giọt đường hô hấp khi người ta ho hoặc hắt hơi. Các giọt đường hô hấp có thể được tạo ra trong quá trình thở nhưng vi rút nói chung không lây nhiễm trong không khí. Mọi người cũng có thể nhiễm COVID-19 bằng cách chạm vào bề mặt bị ô nhiễm và sau đó là mặt của họ. Nó dễ lây lan nhất khi mọi người có triệu chứng.</p>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <!---------col----------->
                        <div class="icon_box type_one">
                           <div class="image_box">
                              <img src="citizen/assets/image/resources/icon-box-1-2.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Triệu chứng </a></h2>
                             <p>Thời gian từ khi tiếp xúc đến khi bắt đầu có triệu chứng thường khoảng năm ngày, nhưng có thể từ 2 đến 14 ngày. Các triệu chứng phổ biến bao gồm sốt, ho và khó thở. Các biến chứng có thể bao gồm viêm phổi và hội chứng suy hô hấp cấp tính. Không có thuốc chủng ngừa hoặc điều trị kháng vi-rút cụ thể được biết đến.</p>
                              
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <!---------col----------->
                        <div class="icon_box type_one">
                           <div class="image_box">
                              <img src="citizen/assets/image/resources/icon-box-1-3.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="content_box">
                              <h2><a href="#">Phòng ngừa</a></h2>
                             <p>Không có thuốc chủng ngừa hoặc điều trị kháng vi-rút cụ thể được biết đến. Điều trị chủ yếu là điều trị triệu chứng và hỗ trợ. Các biện pháp phòng ngừa được khuyến nghị bao gồm rửa tay, che miệng khi ho, giữ khoảng cách với người khác, theo dõi và tự cách ly đối với những người nghi ngờ mình bị nhiễm bệnh.</p>
                            
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------about-end-------------->
            <!-----------prevention--------------->
            <section class="prevention type_three pdt_100">
               <div class="map_bg"><img src="citizen/assets/image/resources/world-map-prevention-bg.png" class="img-fluid" alt="img" /></div>
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12 col-sm-6">
                        <!---------col----------->
                        <div class="prevention_content">
                           <div class="heading tp_one">
                              <h1>Kiểm soát và Phòng ngừa Dịch bệnh</h1>
                           </div>
                           <p>Các nỗ lực để ngăn chặn sự lây lan của vi rút bao gồm hạn chế đi lại, cách ly, giới nghiêm, kiểm soát mối nguy tại nơi làm việc, hoãn và hủy sự kiện cũng như đóng cửa cơ sở. Chúng bao gồm việc kiểm dịch Hồ Bắc, kiểm dịch quốc gia hoặc khu vực ở những nơi khác trên thế giới, các biện pháp giới nghiêm ở Trung Quốc và Hàn Quốc, các biện pháp đóng cửa biên giới khác nhau hoặc hạn chế hành khách đến, kiểm tra tại các sân bay và ga tàu, và các lệnh cấm đi lại của hành khách.</p>
                           <p>Đại dịch đã dẫn đến sự gián đoạn kinh tế xã hội nghiêm trọng trên toàn cầu, hoãn hoặc hủy bỏ các sự kiện thể thao, tôn giáo và văn hóa, và nỗi lo thiếu hụt nguồn cung lan rộng đã thúc đẩy hoạt động mua bán hoảng loạn. Các trường học và đại học đã đóng cửa trên toàn quốc hoặc địa phương ở hơn 160 quốc gia , ảnh hưởng đến hơn 1,5 tỷ sinh viên.Thông tin sai lệch và các thuyết âm mưu về virus này đã lan truyền trên mạng và đã có những vụ việc bài ngoại và phân biệt chủng tộc đối với người Trung Quốc cũng như những người Đông và Đông Nam Á khác. Khi đại dịch lây lan và hình thành các điểm nóng trên toàn cầu, chẳng hạn như ở châu Âu và Hoa Kỳ, sự phân biệt đối xử với những người từ các điểm nóng này cũng đã xảy ra.</p>
                           <div class="image_box">
                              <img src="citizen/assets/image/resources/prevention-three-1.png" class="img-fluid" alt="img" />
                           </div>
                          
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------prevention-end-------------->
            @endsection