@extends('welcomeuser')
@section('user_content')

    <main>
        <div class="page-hero-section bg-image hero-mini"
            style="background-image: url({{ url('public/frontend/assets/img/hero_mini.svg') }});">
            <div class="hero-caption">
                <div class="container fg-white h-100">
                    <div class="row justify-content-center align-items-center text-center h-100">
                        <div class="col-lg-6">
                            <h3 class="mb-4 fw-medium">Đào tạo</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
                                    <li class="breadcrumb-item"><a href="{{URL::to('/gt')}}">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Đào tạo</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 py-3">
                        @foreach ($all_kh as $key => $values)
                            <?php
                            $time = strtotime($values->lichkhaigiang);
                            $day = date('d', $time);
                            $month = date('m', $time);
                            ?>
                            <article class="blog-entry">
                                <div class="entry-header">
                                    <div class="post-thumbnail">
                                        <img src="{{ URL::to('/public/upload/courseimage/' . $values->anhdaidien) }}"
                                            alt="">
                                    </div>
                                    <div class="post-date">
                                        <h3><?php echo $day; ?></h3>
                                        <span><?php echo $month; ?></span>
                                    </div>
                                </div>
                                <div class="post-title"><a href="{{ URL::to('/chitietkhoahoc/' . $values->makh) }}">{{ $values->tenkh }}</a></div>
                                <div class="entry-meta mb-2">
                                    <div class="meta-item entry-author">
                                        <div class="icon">
                                            <span class="mai-person"></span>
                                        </div>
                                        by <a href="#">Admin</a>
                                    </div>
                                    
                                </div>
                                <div class="entry-content">
                                    <p>- Thời lượng học : {{ $values->thoiluonghoc }} Tiết</p>
                                    <p>- Thời gian học thoả thuận</p>
                                    <p>- Số lượng : 8 - {{ $values->soluonghv }} / Lớp</p>
                                    <p>- Chứng chỉ: SHTP Training Center</p>
                                </div>
                                <a href="{{ URL::to('/chitietkhoahoc/' . $values->makh) }}" class="btn btn-primary">Xem chi
                                    tiết</a>
                            </article>
                        @endforeach


                    </div>
                    <!-- Sidebar -->
                    <div class="col-lg-4 py-3">
                        <div class="widget-wrap">
                            <form action="{{URL::to('/timkiem')}}" method="POST" class="search-form">
                                {{ csrf_field() }}
                                <h3 class="widget-title">Search</h3>
                                <div class="form-group">
                                    
                                    <input type="text" class="form-control" name="txtTimkiem" placeholder="Type a keyword and hit enter">
                                    <button class="icon mai-search" style="border:none;background:transparent; outline:none"></button>
                                </div>
                            </form>
                        </div>


                        <div class="widget-wrap">
                            <h3 class="widget-title">SHTP-Training</h3>
                            <p>Chương trình đào tạo của SHTP Training được chuyên môn hóa theo các ngành Công Nghệ Cao mũi nhọn: Tự động hóa, Cơ khí chính xác, Công Nghệ Thông tin, Công Nghệ Vật liệu mới, Công nghệ sinh học. Với tầm nhìn hội nhập phát triển theo công nghệ cao và chuyển giao công nghệ cho lực lượng lao động cao cấp, SHTP Training liên kết hợp tác với các hãng, tập đoàn công nghệ lớn trên thê giới như Microsoft, VMWare, PTC, Sonion… để đưa chương trình đào tạo đi vào thực tiễn ứng dụng.</p>
                        </div>
                    </div> <!-- end sidebar -->
                </div>
            </div>
        </div>

    </main>

@endsection
