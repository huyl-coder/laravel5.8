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
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Quản lý người dùng
                            <button type="button" id='btn-add' onclick="location.href='{{route("QuanTriHeThong.Nguoidung.User.create")}}'" class="btn btn-success add">Thêm mới</button>
                        </strong>
                    </div>
                    <div class="card-body">
                        <table id="" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>ngày tạo</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @foreach($User as $k)
                                <tr>
                                    <td>
                                        {{$i++}}
                                    </td>
                                    <td>{{$k->name}}</td>
                                    <td>{{$k->email}}</td>
                                    <td>{{ date('d-m-Y', strtotime($k->created_at))}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Chức năng </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 33px, 0px);">
                                                <a class="dropdown-item" href="{{route('QuanTriHeThong.Nguoidung.User.edit', $k->id)}}"><i class="fa fa-edit"></i> Sửa</a>
                                                <a class="dropdown-item"  href="{{route('QuanTriHeThong.Nguoidung.User.destroy', $k->id)}}"><i class="fa fa-times"></i> Xóa</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div>
@endsection