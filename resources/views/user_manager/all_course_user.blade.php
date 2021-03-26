@extends('welcome_user_manager')
@section('user_manager_content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Khoá học đã đăng ký</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tên khoá học</th>
                                    <th>Địa chỉ</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all_dk as $key => $values)
                                <tr>
                                    <td>{{$values->tenkh}}</td>
                                    <td>{{$values->lichkhaigiang}}</td>
                                    <td>{{$values->thoiluonghoc}}</td>
                                    <td>{{$values->hocphi}}</td>                                    
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