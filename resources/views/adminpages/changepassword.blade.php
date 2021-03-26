@extends('welcome')
@section('admin_content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Đổi mật khẩu</strong>
        </div>
        <div class="card-body card-block">
            
            <form action="{{URL::to('/update-password')}}" method="post"  class="form-horizontal">
                {{ csrf_field() }}
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nhập mật khẩu cũ</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtMatkhaucu"
                            placeholder="Mật khẩu cũ" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nhập mật khẩu mới</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="mk_moi" name="txtMatkhaumoi"
                            placeholder="Nhập mật khẩu mới" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Xác nhận lại mật khẩu</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="xacnhan" name="txtXacnhanmk"
                            placeholder="Xác nhận lại mật khẩu" class="form-control"></div>
                </div>
                
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Đổi mật khẩu
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Huỷ
                </button>
            </form>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script>
                    $('#mk_moi, #xacnhan').on('keyup', function() {
                        if ($('#mk_moi').val() == $('#xacnhan').val()) {
                            $('#message').html('Matching').css('color', 'green');
                            $("#submit").attr("disabled", false);
                           
                        } else
                            $('#message').html('Not Matching').css('color', 'red');
                           
                    });

                </script>
        </div>
       
    </div>
    
</div>



@endsection