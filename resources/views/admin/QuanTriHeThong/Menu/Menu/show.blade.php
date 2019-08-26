@extends('admin.layouts.master')
@section('title','Chi tiết menu')
@section('header','Quản lý menu')
@section('link')
<li><a href="#">Bảng điều khiển</a></li>
<li><a href="#">Hệ thống</a></li>
<li><a href="#">Quản lý menu</a></li>
<li class="active">Chi tiết menu</li>
@endsection
@section('content')
<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"><i class="fa fa-edit"></i> Chi tiết Menu</strong>
        </div>
        <div class="card-body">
            <div id="pay-invoice">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="form-group col-md-3">
                            <label>Icon</label>
                            <div class="iconDetail">
                                <i class='{{$detail->icon}}'></i>
                            </div>
                        </div>
                        <div class="form-group col-md-9">
                            <label>Tên</label>
                            <input type="text"  class="form-control detail" value="{{$detail->ten}}" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Menu cha</label>
                            @if($detail->chaId == 0)
                                <input type="text"  class="form-control detail" value="Không có menu cha(Nó là menu cha)" disabled>
                            @else
                                @foreach($list as $val)
                                    @if($val->id == $detail->chaId)
                                        <input type="text"  class="form-control detail" value="{{$val->ten}}" disabled>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label>Mở menu</label>
                            @if($detail->openMenu == 0)
                                <input type="text"  class="form-control detail" value="Mở theo tab hiện tại" disabled>
                            @else
                                <input type="text"  class="form-control detail" value="Mở ra tab mới" disabled>      
                            @endif
                        </div>
                        <div class="form-group col-md-3">
                            <label>Hành động</label>
                            @if($detail->actionId == 0)
                                <input type="text" class="form-control detail" value="Không có hành động" disabled>
                            @else
                                <input type="text" class="form-control detail" value="{{$detail->action->ten}}" disabled>
                            @endif
                        </div>
                        <div class="form-group col-md-9">
                            <label>Link</label>
                            @if($detail->link == '')
                                <input type="text" class="form-control detail" value="Không có link" disabled>
                            @else
                                <input type="text" class="form-control detail" value="{{$detail->link}}" disabled>
                            @endif
                        </div>
                        <div class="form-group col-md-12">
                            <div class='float-right'>
                                <button type='button' class="btn btn-primary" onclick="location.href='{{route("QuanTriHeThong.Menu.Menu.index")}}'">Quay Lại</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection