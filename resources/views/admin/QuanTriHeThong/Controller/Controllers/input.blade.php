@extends('admin.layouts.master')
@section('title','Input controller')
@section('header','Quản lý controller')
@section('link')
    <li><a href="#">Bảng điều khiển</a></li>
    <li><a href="#">Hệ thống</a></li>
    <li class="active">Quản lý controller</li>
@endsection
@section('content')
<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"><i class="fa fa-edit"></i> Input controller</strong>
        </div>
        <div class="card-body">
            <div id="pay-invoice">
                <div class="card-body">
                    <div class="col-md-12">
                        <form method="POST" id='frm' action="{{route('QuanTriHeThong.Controller.Controllers.store',$controllers->id)}}">
                            @csrf
                            <div class="form-group col-md-6">
                                <label>Tên Controllers</label>
                                <input type="text" id="ten" class="form-control  @error('ten') is-invalid @enderror" name="ten" value="{{$controllers->ten}}" autofocus>
                                @error('ten')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label>Chọn Modules</label>
                                <select name="module" class="standardSelect" tabindex="1">
                                    @foreach($modules as $val)
                                        <option value="{{$val->id}}" {{($val->id==$controllers->moduleid)?'selected':''}}>{{$val->ten}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Kích hoạt</label>
                                <label class="switch switch-3d switch-primary mr-3"><input type="checkbox" class="switch-input" name='kichhoat' value="1" {{($controllers->kichhoat==1)?'checked':''}}> <span class="switch-label"></span> <span class="switch-handle"></span></label>
                            </div>
                            <div class="form-group col-md-12">
                                <div class='float-right'>
                                    <button type="submit" id="save" class="btn btn-success btn-flat m-b-30 m-t-30">Lưu</button>
                                    <button type='button' class="btn btn-primary" onclick="location.href='{{route("QuanTriHeThong.Controller.Controllers.index")}}'">Quay Lại</a></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection