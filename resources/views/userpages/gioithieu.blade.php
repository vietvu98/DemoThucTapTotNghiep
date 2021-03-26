@extends('welcomeuser')
@section('user_content')

    <div class="bg-light">

        <div class="page-hero-section bg-image hero-mini"
            style="background-image: url({{ url('public/frontend/assets/img/hero_mini.svg') }});">
            <div class="hero-caption">
                <div class="container fg-white h-100">
                    <div class="row justify-content-center align-items-center text-center h-100">
                        <div class="col-lg-6">
                            <h3 class="mb-4 fw-medium">Giới thiệu</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
                                    <li class="breadcrumb-item"><a href="{{ URL::to('/gt') }}">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Giới thiệu</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 my-3 wow fadeInUp">
                        <div class="card-page">
                            <div class="row row-beam-md">
                                <div class="col-md-4 text-center py-3 py-md-2">
                                    <i class="mai-location-outline h3"></i>
                                    <p class="fg-primary fw-medium fs-vlarge">Vị trí</p>
                                    <p class="mb-0">Lô E1 – Khu Công nghệ cao, Xa lộ Hà Nội, Phường Tân Phú, Quận 9, Thành phố Hồ Chí Minh</p>
                                </div>
                                <div class="col-md-4 text-center py-3 py-md-2">
                                    <i class="mai-call-outline h3"></i>
                                    <p class="fg-primary fw-medium fs-vlarge">Liên hệ</p>
                                    <p class="mb-1">(84-28) 37 360 052</p>
                                    <p class="mb-0">(84-28) 37 360 053</p>
                                </div>
                                <div class="col-md-4 text-center py-3 py-md-2">
                                    <i class="mai-mail-open-outline h3"></i>
                                    <p class="fg-primary fw-medium fs-vlarge">Email</p>
                                    <p class="mb-1">contact@shtp-training.edu.vn</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card-page">
                          <h3 class="mb-3">SHTP - Training</h3>
                        <img src="{{asset('public/frontend/assets/img/factoryAutomatic/gioithieu1.jpg')}}" style="width : 100%" alt="">
                          <p>Tọa lạc tại Quận 9, Tp. HCM, Khu CNC là 1 trong 3 khu công nghệ cao cấp quốc gia do Chính phủ thành lập. Tổng diện tích của khu CNC là 913 ha, chia ra 2 giai đoạn phát triển: 300 ha cho giai đoạn 1, và 613 ha cho giai đoạn 2.</p>
                        <p>Ban Quản lý Khu CNC tiếp tục kêu gọi đầu tư vào khu không gian khoa học với các dự án thuộc lãnh vực nghiên cứu triển khai, ươm tạo và đào tạo, đồng thời tiếp tục triển khai xây dựng cơ sở hạ tầng và thu hút đầu tư vào giai đoạn 2.</p>
                        <img src="{{asset('public/frontend/assets/img/factoryAutomatic/gioithieu2.jpg')}}" style="width : 100%" alt="">
                        <strong>* Trung tâm Đào tạo Trực thuộc Khu Công Nghệ Cao Tp. HCM (SHTP Training):</strong>
                          <p>SHTP Training là một trong các đơn vị chức năng chủ lực của khu CNC. Được thành lập từ năm 2005, SHTP Training có nhiệm vụ đào tạo, tuyển dụng và cung ứng nguồn nhân lực chất lượng cao, đáp ứng nhu cầu tuyển dụng của các nhà đầu tư trong khu CNC nói riêng, trong địa bàn Tp. HCM và khu vực phía Nam nói chung.</p>
                          <img src="{{asset('public/frontend/assets/img/factoryAutomatic/gioithieu3.jpg')}}" style="width : 100%" alt="">
                          <strong>* Tầm nhìn:</strong>
                          <p>Chương trình đào tạo của SHTP Training được chuyên môn hóa theo các ngành Công Nghệ Cao mũi nhọn: Tự động hóa, Cơ khí chính xác, Công Nghệ Thông tin, Công Nghệ Vật liệu mới, Công nghệ sinh học. Với tầm nhìn hội nhập phát triển theo công nghệ cao và chuyển giao công nghệ cho lực lượng lao động cao cấp, SHTP Training liên kết hợp tác với các hãng, tập đoàn công nghệ lớn trên thê giới như Microsoft, VMWare, PTC, Sonion… để đưa chương trình đào tạo đi vào thực tiễn ứng dụng.</p>
                            <p>Bên cạnh đó SHTP Training còn đào tạo các chương trình chuyên sâu về kỹ năng thiết yếu cho các cấp quản lý như Kỹ năng nâng cao năng lực cá nhân, kỹ năng quản lý, kỹ năng về Ngoại ngữ, Tin học văn phòng… nhằm trang bị cho cho lực lượng lao động kỹ năng thích nghi và hội nhập với môi trường làm việc hiện đại và năng động.</p>
                            <img src="{{asset('public/frontend/assets/img/factoryAutomatic/gioithieu4.jpg')}}" style="width : 100%" alt="">
                            <p>SHTP Training phát triển các chương trình liên kết đào tạo với các trường Đại Học trong và ngoài nước với mục tiêu đào tạo nguồn nhân lực cao cấp, chất lượng chuyên môn cao, và nắm bắt được công nghệ mới một cách thực tiễn.</p>
                            <img src="{{asset('public/frontend/assets/img/factoryAutomatic/gioithieu5.jpg')}}" style="width : 100%" alt="">
                        <strong>* Sứ mệnh:</strong>
                        <p>Với cơ sở hạ tầng rộng rãi, khang trang và hiện đại, với đội ngũ giảng viên có năng lực chuyên môn cao, SHTP Training đã và đang lớn mạnh không ngừng để trở thành một đơn vị đào tạo và cung ứng nguồn nhân lực hàng đầu về các lãnh vực Công Nghệ Cao của TP. HCM và cả nước.</p>
                        
                        
                        
                        
                        </div>
                
                        
                      </div>
                </div>
            </div>
        </div>

    </div> <!-- .bg-light -->

@endsection
