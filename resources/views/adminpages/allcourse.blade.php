@extends('welcome')
@section('admin_content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Khoá học</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tên khoá học</th>
                                    <th>Lịch khai giảng</th>
                                    <th>Số lượng học viên</th>
                                    <th>Thời lượng học</th>
                                    <th>Mục tiêu khoá học</th>
                                    <th>Nội dung giảng dạy</th>
                                    <th>Hình ảnh</th>
                                    <th>Tuỳ chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all_course as $key => $course)
                                <tr>
                                    <td>{{$course->tenkh}}</td>
                                    <td>{{$course->lichkhaigiang}}</td>
                                    <td>{{$course->soluonghv}}</td>
                                    <td>{{$course->thoiluonghoc}}</td>
                                    <td>{!! nl2br(e($course->muctieukh)) !!}</td>
                                    <td>{!!nl2br(e($course->noidunggiangday))!!}</td>
                                    <td><img src="{{URL::to('public/upload/courseimage/'.$course->anhdaidien)}}" alt="" style="width: 70%"></td>
                                    <td><a href="{{URL::to('/edit-course/'.$course->makh)}}"><i class="fas fa-pen-square"></i></a>
                                        <a href="{{URL::to('/delete-course/'.$course->makh)}}" onclick="return confirm('Are you sure to delete?')"><i class="fas fa-eraser"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span style="color:red">'.$message.'</span>';
                            Session::put('message',null);
                        }
                    ?>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection