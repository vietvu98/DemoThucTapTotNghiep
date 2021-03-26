@extends('welcome')
@section('admin_content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Tạo khoá học</strong>
            </div>
            <div class="card-body card-block">
                <form action="{{URL::to('/save-course')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên khoá học</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtTenkhoahoc"
                                placeholder="Tên khoá học" class="form-control" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Lịch khai giảng</label>
                        </div>
                        <div class="col-12 col-md-9"><div class="datetimepicker">
                            <input type="date" id="date" name="dtLichKG" required/>
                        </div></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số lượng học viên</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtSoluonghv"
                                placeholder="Số lượng học viên" class="form-control" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Học phí</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtHocphi"
                                placeholder="Học phí" class="form-control" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Thời lượng học</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtThoiluonghoc"
                                placeholder="Thời lượng học" class="form-control" required></div>
                    </div>
                    

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Mục tiêu khoá học</label></div>
                        <div class="col-12 col-md-9"><textarea name="txtMuctieu" id="textarea-input" rows="9"
                                placeholder="Mục tiêu khoá học" class="form-control" required></textarea></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Nội dung giảng dạy</label></div>
                        <div class="col-12 col-md-9"><textarea name="txtNoidung" id="textarea-input" rows="9"
                                placeholder="Nội dung giảng dạy" class="form-control" required></textarea></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Đào tạo</label></div>
                        <div class="col-12 col-md-9">
                            
                            <select name="slDaotao" id="select" class="form-control">
                                @foreach ($all_daotao as $key => $value)
                                <option value="{{$value->madaotao}}">{{$value->tendaotao}}</option>
                                @endforeach
                            </select>
                           
                            
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Hình ảnh</label></div>
                        <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="imgKhoaHoc"
                                multiple="" class="form-control-file" required></div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Thêm khoá học
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Huỷ
                    </button>
                </form>
            </div>
           
        </div>
        
    </div>

@endsection
