@extends('welcome')
@section('admin_content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Chương trình đào tạo</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tên đào tạo</th>
                                    
                                    <th>Tuỳ chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all_daotao as $key => $value)
                                <tr>
                                    <td>{{$value->tendaotao}}</td>
                                    <td><a href="{{URL::to('/edit-daotao/'.$value->madaotao)}}"><i class="fas fa-pen-square"></i></a>
                                        <a href="{{URL::to('/delete-daotao/'.$value->madaotao)}}" onclick="return confirm('Are you sure to delete?')"><i class="fas fa-eraser"></i></a></td>
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