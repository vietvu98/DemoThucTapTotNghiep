<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Mobile Application HTML5 Template">

    <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

    <title>SHTP-Trung tâm đào tạo khu công nghệ cao</title>

    <link rel="shortcut icon" href="{{ asset('public/frontend/assets/logo.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/maicons.css') }}">

    <link rel="stylesheet" href="{{ asset('public/frontend/assets/vendor/animate/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('public/frontend/assets/vendor/owl-carousel/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/mobster.css') }}">

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .galleryContainer {
            border: none;
            width: 100%;
            height: 500px;
            max-width: 1000px;
            margin: auto;
            user-select: none;
            box-shadow: 0px 0px 3px 1px #00000078;
            padding: 10px;
            box-sizing: border-box;
        }

        .galleryContainer .slideShowContainer {
            width: 100%;
            height: 90%;
            overflow: hidden;
            background-color: gainsboro;
            position: relative;
        }

        .galleryContainer .slideShowContainer #playPause {
            width: 32px;
            height: 32px;
            position: absolute;
            background-image: url(images/playPause.png);
            background-repeat: no-repeat;
            z-index: 5;
            background-size: cover;
            margin: 5px;
            cursor: pointer;
        }

        .galleryContainer .slideShowContainer #playPause:hover {
            opacity: .7;
        }

        .galleryContainer .slideShowContainer .imageHolder {
            width: 100%;
            height: 100%;
            position: absolute;
            opacity: 0;
        }

        .galleryContainer .slideShowContainer .imageHolder img {
            width: 100%;
            height: 100%;
        }

        .galleryContainer .slideShowContainer .imageHolder .captionText {
            display: none;
        }

        .galleryContainer .slideShowContainer .leftArrow,
        .galleryContainer .slideShowContainer .rightArrow {
            width: 50px;
            background: #00000036;
            position: absolute;
            left: 0;
            z-index: 1;
            transition: background 0.5s;
            height: 72px;
            top: 50%;
            transform: translateY(-50%);
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .galleryContainer .slideShowContainer .rightArrow {
            left: auto;
            right: 0;
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .galleryContainer .slideShowContainer .leftArrow:hover,
        .galleryContainer .slideShowContainer .rightArrow:hover {
            background: #000000a8;
            cursor: pointer;
        }

        .galleryContainer .arrow {
            display: inline-block;
            border: 3px solid white;
            width: 10px;
            height: 10px;
            border-left: none;
            border-bottom: none;
            margin: auto;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }

        .galleryContainer .arrow.arrowLeft {
            transform: rotateZ(-135deg);
        }

        .galleryContainer .arrow.arrowRight {
            transform: rotateZ(45deg);
        }


        .galleryContainer .slideShowContainer>.captionTextHolder {
            position: absolute;
            bottom: 0;
            z-index: 1;
            color: white;
            font-family: sans-serif;
            font-size: 20px;
            text-align: center;
            width: 100%;
            background: #00000047;
            height: 50px;
            line-height: 50px;
            overflow: hidden;
        }

        .galleryContainer .slideShowContainer>.captionTextHolder>.captionText {
            margin: 0;
        }

        .galleryContainer #dotsContainer {
            width: 100%;
            height: 10%;
            text-align: center;
            padding-top: 20px;
            box-sizing: border-box;
        }

        .galleryContainer #dotsContainer .dots {
            display: inline-block;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            margin-left: 5px;
            background-color: #bbb;
            cursor: pointer;
            transition: background-color 0.5s;
        }

        .galleryContainer #dotsContainer .dots:first-child {
            margin-left: 0;
        }

        .galleryContainer #dotsContainer .dots:hover,
        .galleryContainer #dotsContainer .dots.active {
            background-color: #717171;
            ;
        }




        .galleryContainer .moveLeftCurrentSlide {
            animation-name: moveLeftCurrent;
            animation-duration: 0.5s;
            animation-timing-function: linear;
            animation-fill-mode: forwards;

        }

        .galleryContainer .moveLeftNextSlide {
            animation-name: moveLeftNext;
            animation-duration: 0.5s;
            animation-timing-function: linear;
            animation-fill-mode: forwards;
        }

        @keyframes moveLeftCurrent {
            from {
                margin-left: 0;
                opacity: 1;
            }

            to {
                margin-left: -100%;
                opacity: 1;
            }
        }

        @keyframes moveLeftNext {
            from {
                margin-left: 100%;
                opacity: 1;
            }

            to {
                margin-left: 0%;
                opacity: 1;
            }
        }


        .galleryContainer .moveRightCurrentSlide {
            animation-name: moveRightCurrent;
            animation-duration: 0.5s;
            animation-timing-function: linear;
            animation-fill-mode: forwards;
        }

        .galleryContainer .moveRightPrevSlide {
            animation-name: moveRightPrev;
            animation-duration: 0.5s;
            animation-timing-function: linear;
            animation-fill-mode: forwards;
        }

        @keyframes moveRightCurrent {
            from {
                margin-left: 0;
                opacity: 1;
            }

            to {
                margin-left: 100%;
                opacity: 1;
            }
        }

        @keyframes moveRightPrev {
            from {
                margin-left: -100%;
                opacity: 1;
            }

            to {
                margin-left: 0%;
                opacity: 1;
            }
        }

        .slideTextFromBottom {
            animation-name: slideTextFromBottom;
            animation-duration: 0.7s;
            animation-timing-function: ease-out;
        }

        @keyframes slideTextFromBottom {
            from {
                opacity: 0;
                margin-top: 100px
            }

            to {
                opacity: 1;
                margin-top: 0px;
            }
        }

        .slideTextFromTop {
            animation-name: slideTextFromTop;
            animation-duration: 0.7s;
            animation-timing-function: ease-out;
        }

        @keyframes slideTextFromTop {
            from {
                opacity: 0;
                margin-top: -100px
            }

            to {
                opacity: 1;
                margin-top: 0px;
            }
        }

    </style>
</head>

<body>
   
    <nav class="navbar navbar-expand-lg navbar-dark navbar-floating">
        <div class="container">
            <a class="navbar-brand" href="{{ URL::to('/gt') }}">
                <img src="{{ asset('public/frontend/assets/logo.png') }}" alt="" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
                aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ URL::to('/gt') }}">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Đào tạo</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($all_daotao as $key=> $value)
                            <a class="dropdown-item" href="{{URL::to('/khoahoc/'.$value->madaotao)}}">{{$value->tendaotao}}</a>
                            @endforeach
                          
                        </div>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/gioithieu') }}">Giới thiệu</a>
                    </li>
                    
                </ul>
                <?php
                $tentk_user = Session::get('tentk_user');
                if ($tentk_user == null) { ?>
                <div class="ml-auto my-2 my-lg-0">
                    <a href="{{ URL::to('/dangnhap') }}"> <button class="btn btn-primary rounded-pill ">Sign
                            In</button></a>
                </div>
                <?php } else { ?>
                <div class="ml-auto my-2 my-lg-0">
                    <a href=""> <button class="btn btn-primary rounded-pill " style="background-color: azure">
                            <div class="user-area dropdown float-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-user"></i><span class="username">
                                        <?php
                                        $name = Session::get('tentk_user');
                                        $matk = Session::get('matk_user');
                                        if ($name) {
                                        echo $name;
                                        }
                                        ?>
                                    </span>
                                </a>

                                <div class="user-menu dropdown-menu" >

                                    <a class="nav-link" href="{{URL::to('/user-manager')}}"><i class="fa fa-user"></i> Thông tin </a>

                                    

                                    <a class="nav-link" href="{{ URL::to('/dangxuat') }}"><i
                                            class="fa fa-power-off">Đăng
                                            xuất</i> </a>
                                </div>
                            </div>
                        </button></a>
                </div>
                <?php }
                ?>
            </div>
        </div>
    </nav>


    <!-- FAQ -->

    <!-- Clients -->
    @yield('user_content')

    <div class="page-footer-section bg-dark fg-white">
        <div class="container">
            <div class="row mb-5 py-3">
                <div class="col-sm-6 col-lg-6 py-3">
                    <img src="{{ asset('public/frontend/assets/logo.png') }}" class="mb-3" alt="" style="width:40%">
                    <ul class="menu-link">
                        <li>TRUNG TÂM ĐÀO TẠO KHU CÔNG NGHỆ CAO – THE TRAINING CENTER OF SAIGON HI-TECH PARK </li>
                        <li><strong>Địa chỉ:</strong> Lô E1, Khu Công nghệ cao, Xa lộ Hà Nội, Phường Hiệp Phú, Quận 9, TP.HCM </li>
                        <li> <strong>Điện thoại: </strong>(84-28) 37 360 052 - 37 360 053</li>
                        <li><strong>Email: </strong>contact@shtp-training.edu.vn</li>
                    </ul>
                </div>
                
                <div class="col-md-6 col-lg-4 py-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4264636199064!2d106.78374351535652!3d10.855132560702963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe1eceda934207c2c!2sSaigon%20Hi-Tech%20Park%20Training%20Center!5e0!3m2!1svi!2s!4v1611285799798!5m2!1svi!2s" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                    <!-- Social Media Button -->
                    <div class="mt-4">
                        <a href="https://www.facebook.com/SHTP.Training" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-facebook"></span></a>
                        <a href="https://www.facebook.com/vieclam.shtp/" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-facebook">Job</span></a>
                        
                    </div>
                </div>
            </div>
        </div>

        <hr>


    </div>


    </div>
    

    <script src="{{ asset('public/frontend/assets/js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('public/frontend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('public/frontend/assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('public/frontend/assets/vendor/wow/wow.min.js') }}"></script>

    <script src="{{ asset('public/frontend/assets/js/mobster.js') }}"></script>
    
    <script>
        var slideIndex, slides, dots, captionText;

        function initGallery() {
            slideIndex = 0;
            slides = document.getElementsByClassName("imageHolder");
            slides[slideIndex].style.opacity = 1;

            captionText = document.querySelector(".captionTextHolder .captionText");
            captionText.innerText = slides[slideIndex].querySelector(".captionText").innerText;

            //disable nextPrevBtn if slide count is one
            if (slides.length < 2) {
                var nextPrevBtns = document.querySelector(".leftArrow,.rightArrow");
                nextPrevBtns.style.display = "none";
                for (i = 0; i < nextPrevBtn.length; i++) {
                    nextPrevBtn[i].style.display = "none";
                }
            }

            //add dots
            dots = [];
            var dotsContainer = document.getElementById("dotsContainer"),
                i;
            for (i = 0; i < slides.length; i++) {
                var dot = document.createElement("span");
                dot.classList.add("dots");
                dotsContainer.append(dot);
                dot.setAttribute("onclick", "moveSlide(" + i + ")");
                dots.push(dot);
            }
            dots[slideIndex].classList.add("active");
        }
        initGallery();

        function plusSlides(n) {
            moveSlide(slideIndex + n);
        }

        function moveSlide(n) {
            var i;
            var current, next;
            var moveSlideAnimClass = {
                forCurrent: "",
                forNext: ""
            };
            var slideTextAnimClass;
            if (n > slideIndex) {
                if (n >= slides.length) {
                    n = 0;
                }
                moveSlideAnimClass.forCurrent = "moveLeftCurrentSlide";
                moveSlideAnimClass.forNext = "moveLeftNextSlide";
                slideTextAnimClass = "slideTextFromTop";
            } else if (n < slideIndex) {
                if (n < 0) {
                    n = slides.length - 1;
                }
                moveSlideAnimClass.forCurrent = "moveRightCurrentSlide";
                moveSlideAnimClass.forNext = "moveRightPrevSlide";
                slideTextAnimClass = "slideTextFromBottom";
            }

            if (n != slideIndex) {
                next = slides[n];
                current = slides[slideIndex];
                for (i = 0; i < slides.length; i++) {
                    slides[i].className = "imageHolder";
                    slides[i].style.opacity = 0;
                    dots[i].classList.remove("active");
                }
                current.classList.add(moveSlideAnimClass.forCurrent);
                next.classList.add(moveSlideAnimClass.forNext);
                dots[n].classList.add("active");
                slideIndex = n;
                captionText.style.display = "none";
                captionText.className = "captionText " + slideTextAnimClass;
                captionText.innerText = slides[n].querySelector(".captionText").innerText;
                captionText.style.display = "block";
            }

        }
        var timer = null;

        function setTimer() {
            timer = setInterval(function() {
                plusSlides(1);
            }, 5000);
        }
        setTimer();

        function playPauseSlides() {
            var playPauseBtn = document.getElementById("playPause");
            if (timer == null) {
                setTimer();
                playPauseBtn.style.backgroundPositionY = "0px"
            } else {
                clearInterval(timer);
                timer = null;
                playPauseBtn.style.backgroundPositionY = "-33px"
            }
        }

    </script>


</body>

</html>
