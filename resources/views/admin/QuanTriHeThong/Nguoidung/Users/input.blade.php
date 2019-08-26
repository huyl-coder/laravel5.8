@extends('admin.layouts.master')
@section('title','Quản lý người dùng')
@section('header','Quản lý người dùng')
@section('link')
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">Table</a></li>
    <li class="active">Quản lý người dùng</li>
@endsection
@section('content')
<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"><i class="fa fa-edit"></i> Input Người Dùng</strong>
        </div>
        <div class="card-body">
            <div id="pay-invoice">
                <div class="card-body">
                    <div class="col-md-12">
                        <form method="POST" id='frm' action="{{route('QuanTriHeThong.Nguoidung.User.store',$User->id)}}">
                            @csrf
                            <div class="form-group col-md-6">
                                <label>Tên</label>
                                <input type="text" id="name" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{$User->name}}" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="text" id="name" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{$User->email}}" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="col col-md-9">
                                <label class=" form-control-label">Nhóm</label>
                                    <div class="form-check">
                                        @foreach($Nhom as $k)
                                            <div class="checkbox">
                                                <label class="form-check-label ">
                                                    <input type="checkbox" {{$k->id_user>0?'checked':''}} name="nguoiDungVaNhom[]" value="{{$k->id}}" class="form-check-input">{{$k->ten}}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class='float-right'>
                                    <button type="submit" id="save" class="btn btn-success btn-flat m-b-30 m-t-30">Lưu</button>
                                    <button type='button' class="btn btn-primary" onclick="location.href='{{route("QuanTriHeThong.Nguoidung.User.index")}}'">Quay Lại</a></button>
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