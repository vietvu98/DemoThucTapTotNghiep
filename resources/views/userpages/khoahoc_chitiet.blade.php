@extends('welcomeuser')
@section('user_content')


    <main>

        <div class="page-hero-section bg-image hero-mini"
            style="background-image: url({{ url('public/frontend/assets/img/hero_mini.svg') }});">
            <div class="hero-caption">
                <div class="container fg-white h-100">
                    <div class="row justify-content-center align-items-center text-center h-100">
                        <div class="col-lg-6">
                            <h3 class="mb-4 fw-medium">Chi tiết khoá học</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
                                    <li class="breadcrumb-item"><a href="{{URL::to('/khoahoc')}}">Khoá học</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Chi tiết khoá học</li>
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
                        @foreach ($ctkh as  $values)
                            <article class="blog-single-entry">
                                <div class="post-thumbnail">
                                    <img src="{{ URL::to('public/upload/courseimage/' . $values->anhdaidien) }}" alt="">
                                </div>
                                <div class="post-date">
                                    <?php
                                    $timestamp = strtotime($values->lichkhaigiang);
                                    $time = date('d-m-Y', $timestamp);
                                    ?>
                                    Lịch khai giảng dự kiến <a href="#"><?php echo $time; ?></a>
                                </div>
                                <h1 class="post-title">{{ $values->tenkh }}</h1>
                                <div class="entry-meta mb-4">
                                    <div class="meta-item entry-author">
                                        <div class="icon">
                                            <span class="mai-person"></span>
                                        </div>
                                        by <a href="#">Admin</a>
                                    </div>
                                    
                                </div>
                                <div class="entry-content">
                                    <p style="font-size: 20px; font-weight: bold">1.Mục tiêu khoá học</p>
                                    <p>{!! nl2br($values->muctieukh) !!}</p>
                                    <p style="font-size: 20px; font-weight: bold">2.Nội dung giảng dạy</p>
                                    <p>{!! nl2br($values->noidunggiangday) !!}</p>
                                    <p style="font-size: 20px; font-weight: bold">3.Thông tin</p>
                                    <p>- Thời lượng học : {{ $values->thoiluonghoc }} Tiết</p>
                                    <p>- Thời gian học thoả thuận</p>
                                    <p>- Số lượng : 8 - {{ $values->soluonghv }} / Lớp</p>
                                    <p>- Chứng chỉ: SHTP Training Center</p>
                                </div>

                            </article>
                        @endforeach


                        <!-- Comments -->
                        <div class="comment-area">

                            <div class="comment-form-wrap pt-5">

                                
                                <div class="form-group">
                                    <a class="btn btn-primary" id="dangky_kh"  data-target="#exampleModal" href="{{ URL::to('/add_khoahoc/' . $values->makh) }}"
                                        style="color: white">Đăng ký ngay</a>
                                </div>
                                <?php
                            $thanhcong = Session::get('thanhcong');
                            $da_dk  = Session::get('da_dk');
                            $hethan = Session::get('hethan');
                            if($thanhcong){
                                ?>
                                <script>
                                    alert("Đăng ký thành công");
                
                                </script>
                                <?php
                                Session::put('thanhcong',null);
                            }
                            elseif ($da_dk) {
                                ?>
                                <script>
                                    alert("Đã đăng ký khoá học này rồi");
                
                                </script>
                                <?php
                                Session::put('da_dk',null);
                            }
                            elseif ($hethan) {
                                ?>
                                <script>
                                    alert("Hết hạn đăng ký");
                
                                </script>
                                <?php
                               
                                Session::put('hethan',null);
                            }
                        ?>

                            </div>
                        </div> <!-- end comment -->
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
                            <h3 class="widget-title">Các khoá học khác</h3>
                            @foreach($kh_lq as $kh)
                            <div class="blog-widget">
                                <div class="blog-img">
                                    <img src="{{ URL::to('public/upload/courseimage/' . $kh->anhdaidien) }}" alt="">
                                </div>
                                <div class="entry-footer">
                                    <div class="blog-title mb-2"><a href="{{URL::to('/chitietkhoahoc/'.$kh->makh)}}">{{ $kh->tenkh}}</a></div>
                                    <div class="meta">
                                        <a href="{{URL::to('/chitietkhoahoc/'.$kh->makh)}}"><span class="icon-calendar"></span> {{$kh->lichkhaigiang}}</a>
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>

                        
                    </div> <!-- end sidebar -->

                </div> <!-- .row -->
                
            </div>
        </div>

    </main>

@endsection
