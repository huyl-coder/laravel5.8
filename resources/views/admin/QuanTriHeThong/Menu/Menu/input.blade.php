@extends('admin.layouts.master')
@section('title','Input menu')
@section('header','Quản lý menu')
@section('link')
    <li><a href="#">Bảng điều khiển</a></li>
    <li><a href="#">Hệ thống</a></li>
    <li><a href="#">Quản lý menu</a></li>
    <li class="active">Input menu</li>
@endsection
@section('content')
<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"><i class="fa fa-edit"></i> Input menu</strong>
        </div>
        <div class="card-body">
            <div id="pay-invoice">
                <div class="card-body">
                    <div class="col-md-12">
                        <form method="POST" id='frm' action="{{route('QuanTriHeThong.Menu.Menu.store',$menu->id)}}">
                            @csrf
                            <input type="hidden" value="{{$menu->level}}" name="level" id="level">
                            <div class="form-group col-md-3">
                                <label>Icon</label>
                                <input type="text" id="icon" class="form-control  @error('icon') is-invalid @enderror" name="icon" value="{{$menu->icon}}" autofocus>
                                @error('icon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-9">
                                <label>Tên</label>
                                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$menu->ten}}"autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label>Menu cha</label>
                                <select name="parent" id="menuEdit" class="standardSelect" style="padding:.375rem .75rem" tabindex="1">
                                    <option value='0'>-none-</option>
                                    @foreach($option as $val)
                                        <option value="{{$val->id}}"  {{ $val->select }}>{{str_repeat('|--',$val->level)}}{{$val->ten}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Mở menu</label>
                                <select name="openMenu" class="defaultsel" tabindex="1">
                                    @if($menu->openMenu == 0)
                                    <option value='0'>Tab hiện hành</option>
                                    <option value='1'>Tab mới</option>
                                    @else
                                    <option value='1'>Tab mới</option>
                                    <option value='0'>Tab hiện hành</option>
                                    @endif
                                </select>
                            </div>
                            <div id="testCheck" class="form-group col-md-12">
                                <input type="radio" id="checkCo"  name="radio" required> Có Menu Con   
                                <input type="radio" id="checkKo"  name="radio"> Không Có Menu Con
                            </div>
                            <div id="action" class="form-group col-md-3">
                                <label>Actions</label>
                                <select name="action" id="menuAction" class="standardSelect" tabindex="1">
                                    @foreach($action as $val)
                                        <option value="{{$val->id}}" {{($val->id == $menu->actionId)?'selected':''}}>{{$val->ten}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div id="link" class="form-group col-md-9">
                                <label>Link</label>
                                <input type="text" id='lienKet' class="form-control" name="link" value="{{$menu->link}}">
                            </div>
                            <div class="form-group col-md-12">
                                <div class='float-right'>
                                    <button type="submit" id="save" class="btn btn-success btn-flat m-b-30 m-t-30">Lưu</button>
                                    <button type='button' class="btn btn-primary" onclick="location.href='{{route("QuanTriHeThong.Menu.Menu.index")}}'">Quay Lại</a></button>
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