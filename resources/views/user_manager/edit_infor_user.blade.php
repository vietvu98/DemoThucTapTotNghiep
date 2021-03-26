@extends('welcome_user_manager')
@section('user_manager_content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Cập nhật thông tin cá nhân</strong>
            </div>

            <div class="card-body card-block">
              @foreach ($all_hv as $key => $values)
              <form action="{{URL::to('/save-infor')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Họ và tên: </label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" placeholder="Họ và tên" name="txtTenhv" value="{{$values->tenhv}}" required class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email: </label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input"placeholder="Email" name="email" value="{{$values->email}}" required class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số điện thoại</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" placeholder="Số điện thoại" name="txtSDT" value="{{$values->sdt}}" required class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Địa chỉ</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" placeholder="Địa chỉ" name="txtDiachi" value="{{$values->diachi}}" required  class="form-control"></div>
                </div>
                
                
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Cập nhật
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Huỷ
                </button>
            </form>
              @endforeach
               
                

            </div>

        </div>

    </div>

@endsection
