@extends('welcome')
@section('admin_content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Thông tin học viên</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tên học viên</th>
                                    <th>Địa chỉ</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Khoá học</th>                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all_hv as $key => $hv)
                                <tr>
                                    <td>{{$hv->tenhv}}</td>
                                    <td>{{$hv->diachi}}</td>
                                    <td>{{$hv->email}}</td>
                                    <td>{{$hv->sdt}}</td>
                                    <td>{{$hv->tenkh}}</td>
                                    
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