<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/style.css') }}" />
    <title>SHTP-Đăng nhập</title>
    <link rel="shortcut icon" href="{{ asset('public/frontend/assets/logo.png') }}" type="image/x-icon">
</head>

<body>

    <div class="container ">
        <div class="forms-container">
            <div class="signin-signup">
                <?php
                $message = Session::get('message');
                if ($message) {
                echo '<span class="text-alert">', $message . '</span>';
                Session::put('message', null);
                }
                ?>
                <form action="{{ URL::to('/dangnhaptc') }}" class="sign-in-form" method="post">
                    {{ csrf_field() }}
                    <h2 class="title">Đăng nhập</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="tentk" required
                            oninvalid="this.setCustomValidity('Vui lòng nhập vào tài khoản!')" value="<?php
                            $user = Session::get('username');
                            echo $user;
                            ?>" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="matkhau" required
                            oninvalid="this.setCustomValidity('Vui lòng nhập vào mật khẩu!')" />
                    </div>
                    <span>
                        <input type="checkbox" class="checkbox"> Ghi nhớ đăng nhập
                    </span>
                    <a href="{{ URL::to('/quenmk') }}">Quên mật khẩu?</a>
                    <input type="submit" value="Đăng nhập" class="btn solid" />
                    <p class="social-text">hoặc đăng nhập với tài khoản khác</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>

                <?php
                $thongbao = Session::get('thongbao');
                if ($thongbao) {

                echo '<span class="text-alert">'. $thongbao . '</span>';
                Session::put('thongbao', null);
                ?>
                <script>
                    const container = document.querySelector(".container");
                    container.classList.add("sign-up-mode");

                </script>
                <?php
                }
                ?>
                <?php
                $signup = Session::get('signupdone');
                if ($signup) { ?>
                <script>
                    alert("Sign up sucssessfully")

                </script>
                <?php Session::put('signupdone', null);}
                ?>

                <form action="{{ URL::to('/adduser') }}" class="sign-up-form" method="POST">
                    {{ csrf_field() }}
                    <h2 class="title">Đăng ký</h2>
                    <div class="input-field">
                        <i class="fas fa-user-circle"></i>
                        <input type="text" placeholder="Tên tài khoản" name="tentk" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-address-book"></i>
                        <input type="text" placeholder="Họ và tên" name="txtTenhv" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="text" placeholder="Số điện thoại" name="txtSDT" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-map-marker-alt"></i>
                        <input type="text" placeholder="Địa chỉ" name="txtDiachi" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="matkhau" required />
                    </div>
                    <input type="submit" class="btn" value="Đăng ký" />
                    <p class="social-text">Hoặc đăng ký bằng tài khoản khác</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Chưa có tài khoản ?</h3>
                    <p>
                        Hãy đăng ký nhanh để học những khoá học ở SHTP-training của chúng tôi
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Đăng ký
                    </button>
                </div>
                <img src="{{ asset('public/frontend/assets/css/log.svg') }}" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Đã có tài khoản ?</h3>
                    <p>
                        Hãy đăng nhập và tìm những khoá học hay tại trung tâm SHTP-training 
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                       Đăng nhập 
                    </button>
                </div>
                <img src="{{ asset('public/frontend/assets/css/register.svg') }}" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="{{ asset('public/frontend/assets/css/app.js') }}"></script>
</body>

</html>
