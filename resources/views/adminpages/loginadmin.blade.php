<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Admin</title>
    <link rel="stylesheet" href="{{ asset('public/backend/css/login.css') }}">
	<link rel="stylesheet" href="{{ asset('public/backend/vendor/fontawesome-free/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('public/backend/vendor/fontawesome-free/css/all.min.css') }}">
</head>

<body>
    <h2>SHTP Training Khu công nghệ cao</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#" method="POST">
                <h2>Quên mật khẩu?</h2>
                
                <span>Hoặc sử dụng email để đăng ký</span>
                <input type="text" placeholder="Tên tài khoản" name="txtTenTK"/>
                <input type="email" placeholder="Email" name="txtEmail" />
				<input type="text" placeholder="Password" />
				<a href="{{URL::to('/send-mail')}}"><i class="fas fa-retweet"></i></a>
                <button>Gửi xác nhận</button>
            </form>
        </div>
        <div class="form-container sign-in-container">

            <form action="{{ URL::to('/admin1') }}" method="POST">
                {{ csrf_field() }}
                <h1>Đăng nhập</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Hoặc sử dụng tài khoản của bạn</span>
                <input type="text" placeholder="Tên tài khoản" name="txtTenTK" />
                <input type="password" placeholder="Mật khẩu" name="txtMK" />

                <button >Đăng Nhập</button>
                <?php
                $message = Session::get('message');
                if ($message) {
                echo '<span style="color:#ff8585;">' . $message . '</span>';
                Session::put('message', null);
                }
                ?>
            </form>


        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Chào mừng trở lại!</h1>
                    <p>Để giữ kết nối với chúng tôi, vui lòng đăng nhập bằng thông tin cá nhân</p>
                    <button class="ghost" id="signIn">Đăng Nhập</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Chào bạn!</h1>
                    <p>Nhập thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi</p>
                    <button class="ghost" id="forgotpassword">Quên mật khẩu ?</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>
            Nguyễn Viết Vũ - Phạm Duy Tấn
        </p>
    </footer>
    
    <script src="{{ asset('public/backend/js/login.js') }}"></script>
</body>

</html>
