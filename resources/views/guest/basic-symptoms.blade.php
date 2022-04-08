@extends('guest.layout-guest',[
'title' => __($title ?? 'Triệu chứng')
])
@section('main')
    <!------main-content------>
    <!-----------newsletter--------------->
    <section class="page_title  pdt_80  pdb_40">
        <div class="container">
            <div class="row">
                <!---------row----------->
                <div class="col-lg-12 col-md-12 text-center">
                    <!---------col----------->
                    <div class="content_box">
                        <h6>Triệu chứng của COVID-19 </h6>
                        <h1>Các triệu chứng cơ bản</h1>
                        <ul class="bread_crumb text-center">
                            <li class="bread_crumb-item"><a href="#">Home</a></li>
                            <li class="bread_crumb-item"><a href="#">Prevention</a></li>
                            <li class="bread_crumb-item active"> Basic Symptoms</li>
                        </ul>
                    </div>
                    <!---------col-end---------->
                </div>
                <!----------row-end---------->
            </div>
        </div>
    </section>
    <!-----------newsletter-end-------------->
    <!-----------symptoms--------------->
    <section class="symptoms type_three pdt_100  pdb_100">
        <div class="container">
            <div class="row">
                <!---------row----------->
                <div class="col-lg-6 col-md-12">
                    <!---------symptoms_box----------->
                    <div class="image_box">
                        <img src="citizen/assets/image/resources/symptoms-page-1-1.png" class="img-fluid" alt="img" />
                    </div>
                    <!---------symptoms_box-end---------->
                </div>
                <div class="col-lg-6 col-md-12 d-flex">
                    <!---------symptoms_box----------->
                    <div class="symptoms_content">
                        <div class="heading  tp_one">
                            <h1>Triệu chứng cơ bản</h1>
                        </div>
                        <p>COVID-19 thường gây ra các triệu chứng giống như cúm bao gồm sốt và ho. Ở một số bệnh nhân - đặc
                            biệt là người cao tuổi và những người có tình trạng sức khỏe mãn tính khác - các triệu chứng này
                            có thể phát triển thành viêm phổi, với tức ngực, đau ngực và khó thở.</p>
                        <div class="symptoms_outer">
                            <div class="symptoms_box  type_three">
                                <div class="image_box">
                                    <img src="citizen/assets/image/resources/symptoms-2-1.png" class="img-fluid"
                                        alt="img" />
                                </div>
                                <div class="content_box">
                                    <h2> <a href="#">Ho, hắt hơi và đau họng</a></h2>
                                    <p>Các chuyên gia cho biết, sốt là một triệu chứng chính. Không cố định về con số, nhưng
                                        nó thực sự không phải là một cơn sốt cho đến khi nhiệt độ của bạn đạt ít nhất 39 ° C
                                    </p>
                                </div>
                            </div>
                            <div class="symptoms_box type_three">
                                <div class="image_box">
                                    <img src="citizen/assets/image/resources/symptoms-2-2.png" class="img-fluid"
                                        alt="img" />
                                </div>
                                <div class="content_box">
                                    <h2> <a href="#">Sốt cao, khó thở</a></h2>
                                    <p>Cứ 6 người thì có 1 người nhiễm COVID-19 bị bệnh nặng và khó thở hoặc thở gấp.</p>
                                </div>
                            </div>
                            <div class="symptoms_box type_three">
                                <div class="image_box">
                                    <img src="citizen/assets/image/resources/symptoms-2-3.png" class="img-fluid"
                                        alt="img" />
                                </div>
                                <div class="content_box">
                                    <h2> <a href="#">Đau đầu, ớn lạnh</a></h2>
                                    <p>Bạn có thể bị đau đầu và ơn lạnh, có triệu chứng như bệnh cúm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---------symptoms_box-end---------->
                </div>
                <!----------row-end---------->
            </div>
        </div>
    </section>
    <!-----------symptoms--end------------->
    <!-----------symptoms--------------->
    <section class="symptoms type_one pdt_100  pdb_70">
        <div class="container">
            <div class="row">
                <!---------row----------->
                <div class="col-lg-12 padding_zero">
                    <div class="owl-carousel four_items">
                        <!---------symptoms_box----------->
                        <div class="symptoms_box type_one">
                            <div class="image_box">
                                <img src="citizen/assets/image/resources/symptoms-1-1.png" class="img-fluid"
                                    alt="img" />
                            </div>
                            <div class="content_box">
                                <h2><a href="#">Sốt cao</a></h2>
                                <p>Các chuyên gia cho biết, sốt là một triệu chứng chính. Đừng cố chấp vào một con số, nhưng hãy biết rằng đó thực sự không phải là một cơn sốt cho đến khi nhiệt độ của bạn đạt ít nhất 39 ° C.</p>
                            </div>
                        </div>
                        <!---------symptoms_box-end---------->
                        <!---------symptoms_box----------->
                        <div class="symptoms_box type_one">
                            <div class="image_box">
                                <img src="citizen/assets/image/resources/symptoms-1-2.png" class="img-fluid"
                                    alt="img" />
                            </div>
                            <div class="content_box">
                                <h2><a href="#">Ho </a></h2>
                                <p>Ho là một triệu chứng quan trọng khác, nhưng nó không chỉ là bất kỳ cơn ho nào. Bạn cảm thấy tức ngực khi ho khan.</p>
                            </div>
                        </div>
                        <!---------symptoms_box-end---------->
                        <!---------symptoms_box----------->
                        <div class="symptoms_box type_one">
                            <div class="image_box">
                                <img src="citizen/assets/image/resources/symptoms-1-3.png" class="img-fluid"
                                    alt="img" />
                            </div>
                            <div class="content_box">
                                <h2><a href="#">Đau họng</a></h2>
                                <p> Bạn cũng có thể cảm thấy cổ họng đau, gắt khó chịu</p>
                            </div>
                        </div>
                        <!---------symptoms_box-end---------->
                        <!---------symptoms_box----------->
                        <div class="symptoms_box type_one">
                            <div class="image_box">
                                <img src="citizen/assets/image/resources/symptoms-1-4.png" class="img-fluid"
                                    alt="img" />
                            </div>
                            <div class="content_box">
                                <h2><a href="#">Đau đầu </a></h2>
                                <p>Một số người cũng cảm thấy đau đầu khi nhiễm bệnh</p>
                            </div>
                        </div>
                        <!---------symptoms_box-end---------->
                    </div>
                </div>
                <!----------row-end---------->
            </div>
        </div>
    </section>
    <!-----------symptoms-end-------------->
    <!-----------symptoms--------------->
    <section class="symptoms_content_outer pdt_100  pdb_100">
        <div class="container">
            <div class="row">
                <!---------row----------->
                <div class="col-lg-6 col-md-12 d-flex">
                    <!---------col---------->
                    <div class="symptoms_content">
                        <div class="heading tp_one">
                            <h1>Tự cách ly tại nhà</h1>
                        </div>
                        <p> Việc tự cách ly tại nhà đã được khuyến cáo cho những người được chẩn đoán mắc bệnh COVID-19 và những người nghi ngờ họ đã bị nhiễm bệnh. Các cơ quan y tế đã ban hành hướng dẫn chi tiết để tự cách ly đúng cách.</p>
                        <p>Nhiều chính phủ đã yêu cầu hoặc khuyến nghị tự kiểm dịch cho toàn bộ dân số sống trong các khu vực bị ảnh hưởng. Các hướng dẫn tự kiểm dịch mạnh nhất đã được ban hành cho những người thuộc nhóm rủi ro cao. Những người có thể đã tiếp xúc với một người nào đó có COVID-19 và những người gần đây đã đi du lịch đến một quốc gia hoặc khu vực có sự lây lan rộng rãi đã được khuyến cáo nên tự cách ly trong 14 ngày kể từ thời điểm có khả năng tiếp xúc gần đây nhất.
                        </p>
                        
                    </div>
                    <!---------col-end--------->
                </div>
                <div class="col-lg-6 col-md-12 d-flex">
                    <!---------col---------->
                    <div class="image_box">
                        <img src="citizen/assets/image/resources/symptoms-page-1-2.png" class="img-fluid" alt="img" />
                    </div>
                    <!---------col-end--------->
                </div>
                <!----------row-end---------->
            </div>
        </div>
    </section>
    <!-----------symptoms-end-------------->
    <!------main-content-end----->
@endsection
