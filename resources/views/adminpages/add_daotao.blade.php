@extends('welcome')
@section('admin_content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Đào tạo</strong>
            </div>
            <div class="card-body card-block">
                <form action="{{URL::to('/save-daotao')}}" method="post"  class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên đào tạo</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtTendaotao"
                                placeholder="Tên đào tạo" class="form-control" required></div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Thêm đào tạo
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Huỷ
                    </button>
                </form>
            </div>
           
        </div>
        
    </div>

@endsection
