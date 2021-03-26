@extends('welcome')
@section('admin_content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Tạo User</strong>
            </div>
            <div class="card-body card-block">
                <form action="{{URL::to('/save-user')}}" method="post"  class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">User</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtUser"
                                placeholder="Tên User" class="form-control" required></div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mật khẩu</label></div>
                        <div class="col-12 col-md-9"><input type="password" id="text-input" name="txtPassword"
                                placeholder="Password" class="form-control" required></div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Thêm User
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Huỷ
                    </button>
                </form>
            </div>
           
        </div>
        
    </div>

@endsection
