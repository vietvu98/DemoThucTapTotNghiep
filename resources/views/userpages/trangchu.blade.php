@extends('welcomeuser')
@section('user_content')

<div class="page-hero-section bg-image hero-home-2" style="background-image: url({{asset('public/frontend/assets/img/bg_hero_2.svg')}});">
    <div class="hero-caption">
      <div class="container fg-white h-100">
        <div class="row align-items-center h-100">
          <div class="col-lg-6 wow fadeInUp">

            <h1 class="mb-4 fw-normal" style="font-size: 48px">TRUNG TÂM ĐÀO TẠO KHU CÔNG NGHỆ CAO</h1>
            <p class="mb-4">THE TRAINNING CENTER OF SAIGON HI-TECH PARK<br></p>

            <a href="#" class="btn btn-dark">About Us</a>

          </div>
          <div class="col-lg-6 d-none d-lg-block wow zoomIn">
            <div class="img-place mobile-preview shadow floating-animate" style="max-width: 485px">
              <img src="{{asset('public/frontend/assets/img/showcase.jpg')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section no-scroll">
    <div class="container">
      <h2 class="text-center wow fadeIn">Our Main Features</h2>

      <div class="row justify-content-center mt-5" >
                <div class="galleryContainer">
                    <div class="slideShowContainer">
                        <div id="playPause" onclick="playPauseSlides()"></div>
                        <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
                        <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
                        <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
                        <div class="imageHolder">
                            <img src="{{asset('public/frontend/assets/img/banner_web1.jpg')}}">
                            <p class="captionText"></p>
                        </div>
                        <div class="imageHolder">
                            <img src="{{asset('public/frontend/assets/img/banner_web2.jpg')}}">
                            <p class="captionText"></p>
                        </div>
                        <div class="imageHolder">
                            <img src="{{asset('public/frontend/assets/img/banner_web.jpg')}}">
                            <p class="captionText"></p>
                        </div>
                        <div class="imageHolder">
                            <img src="{{asset('public/frontend/assets/img/banner_web2.jpg')}}">
                            <p class="captionText"></p>
                        </div>
                    </div>
                    <div id="dotsContainer"></div>
                </div>
        </div>

      </div>
    </div>
  </div>
  <div class="page-section">
    <div class="container" style="max-width : 1400px">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="iconic-list">
            <div class="iconic-item wow fadeInUp">
              <div class="iconic-content">
                <h5>Chương trình đào tạo sơ cấp nghề</h5>
                <p class="fs-small">Đào tạo nghề giúp ích trong cuộc sống. Chương trình đào tạo đa dạng với các nghề khác nhau.</p>
              </div>
              <div class="iconic-md iconic-text bg-warning fg-white rounded-circle">
                <img src="{{asset('public/frontend/assets/img/iconcntt.png')}}" alt="">
              </div>
            </div>
            <div class="iconic-item wow fadeInUp">
              <div class="iconic-content">
                <h5>Kỹ thuật - Tự động hóa</h5>
                <p class="fs-small"> thực hiện điều điều khiển và tự động hóa các dây chuyền sản xuất công nghiệp trong các nhà máy. Kỹ thuật điều kiển có một cơ sở nền tảng khoa học vững chắc, đảm bảo cho việc điều khiển một cách nhanh chóng, chính xác đạt hiệu suất cao với các dây chuyền sản xuất phức tạp.</p>
              </div>
              <div class="iconic-md iconic-text bg-info fg-white rounded-circle">
                <img src="{{asset('public/frontend/assets/img/icontdh.png')}}" alt="">
              </div>
            </div>
            <div class="iconic-item wow fadeInUp">
              <div class="iconic-content">
                <h5>Ngoại ngữ</h5>
                <p class="fs-small">Phá bỏ rào cản ngôn ngữ trong giao tiếp . Giúp cải thiện trình độ ngoại ngữ của bản thân</p>
              </div>
              <div class="iconic-md iconic-text bg-indigo fg-white rounded-circle">
                <img src="{{asset('public/frontend/assets/img/language1.png')}}" alt="">              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-3 wow zoomIn">
          <div class="img-place mobile-preview shadow" style="max-width: 383px">
            <img src="{{asset('public/frontend/assets/img/factoryAutomatic/factory.jpg')}}" alt="">
          </div>
        </div>
        <div class="col-lg-4 py-3">
          <div class="iconic-list">
            <div class="iconic-item wow fadeInUp">
              <div class="iconic-md iconic-text bg-warning fg-white rounded-circle">
                <img src="{{asset('public/frontend/assets/img/laborsafety.png')}}" alt="">
              </div>
              <div class="iconic-content">
                <h5>An toàn lao động</h5>
                <p class="fs-small">giải pháp phòng, chống tác động của các yếu tố nguy hiểm nhằm bảo đảm không xảy ra thương tật, tử vong đối với con người trong quá trình lao động.</p>
              </div>
            </div>
            <div class="iconic-item wow fadeInUp">
              <div class="iconic-md iconic-text bg-success fg-white rounded-circle">
                <img src="{{asset('public/frontend/assets/img/educate.png')}}" alt="">
              </div>
              <div class="iconic-content">
                <h5>Đào tạo theo nhu cầu</h5>
                <p class="fs-small">Đào tạo theo nhu cầu làm việc. Thời gian đào tạo rõ ràng, tạo điều kiện cho việc đào tạo được suôn sẻ hơn.</p>
              </div>
            </div>
            <div class="iconic-item wow fadeInUp">
              <div class="iconic-md iconic-text bg-indigo fg-white rounded-circle">
                <img src="{{asset('public/frontend/assets/img/softskills.png')}}" alt="">
              </div>
              <div class="iconic-content">
                <h5>Kỹ năng mềm</h5>
                <p class="fs-small">Giúp cải thiện kỹ năng sống, giao tiếp, lãnh đạo, làm việc theo nhóm, kỹ năng quản lý thời gian, thư giãn, vượt qua khủng hoảng, sáng tạo và đổi mới...</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="page-section">
    <div class="container">
      <div class="text-center wow fadeIn">
        <h2 class="mb-4">Đối tác của chúng tôi</h2>
        <p>Become a <a href="#">partners?</a></p>
      </div>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 justify-content-center align-items-center mt-5">
        <div class="p-3 wow zoomIn">
          <a href="https://www.jica.go.jp/vietnam/vietnamese/office/index.html">
            <div class="img-place client-img">
              <img src="{{asset('public/frontend/assets/img/partner/jica-logo.png')}}" alt="">
            </div></a>
          
        </div>
        <div class="p-3 wow zoomIn">
          <a href="http://dcselab.edu.vn/">
            <div class="img-place client-img">
              <img src="{{asset('public/frontend/assets/img/partner/dcselab.jpg')}}" alt="">
            </div>
          </a>
          
        </div>
        <div class="p-3 wow zoomIn">
          <a href="http://eng.kitech.re.kr/technology/page1-4.php">
            <div class="img-place client-img">
              <img src="{{asset('public/frontend/assets/img/partner/KITECH_Logo.png')}}" alt="">
            </div>
          </a>
          
        </div>
        <div class="p-3 wow zoomIn">
          <a href="https://www.nhhk.com.vn/">
            <div class="img-place client-img">
              <img src="{{asset('public/frontend/assets/img/partner/NHHK.jpg')}}" alt="">
            </div>
          </a>
          
        </div>
        <div class="p-3 wow zoomIn">
          <a href="{{URL::to('/gt')}}"><div class="img-place client-img">
            <img src="{{asset('public/frontend/assets/img/partner/mitsubishi.png')}}" alt="">
          </div></a>
          
        </div>
        <div class="p-3 wow zoomIn">
          <a href="https://www.smcworld.com/about_us/en-vn/vietnam.html">
            <div class="img-place client-img">
              <img src="{{asset('public/frontend/assets/img/partner/smc.jpg')}}" alt="">
            </div>
          </a>
          
        </div>
        <div class="p-3 wow zoomIn">
          <a href="https://www.np.nipro-pharma.co.jp/english/page/nipro-pharma-vietnam.php"><div class="img-place client-img">
            <img src="{{asset('public/frontend/assets/img/partner/NIPRO.png')}}" alt="">
          </div></a>
          
        </div>
        <div class="p-3 wow zoomIn">
          <a href="https://caodang.fpt.edu.vn/"><div class="img-place client-img">
            <img src="{{asset('public/frontend/assets/img/partner/fpt.jpg')}}" alt="">
          </div></a>
          
        </div>
      </div>
    </div>
  </div>

  @endsection
